@extends('layouts.app')
@section('header')
<script src="{{ asset('/js/tab.js') }}"></script>
@endsection
@section('title', $task->title)
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-header" style="margin-top:-20px;padding-bottom:0px;">
			<h1>
				<b>{{ $task->title }}</b>
				<br>
				<small>
					<small>@lang('words.tasks.difficulty')</small>
					<span style="color:{{ config('tasks.colors')[$task->difficulty] }};">
						{{ config('tasks.stars')[$task->difficulty] }}
					</span>
					<small>&ensp;@lang('words.tasks.solved')&#65306;</small>
					<span>{{ $task->solved }}</span>
					<small>&ensp;@lang('words.tasks.examinees')&#65306;</small>
					<span>{{ $task->examinees }}</span>
					<small>&ensp;@lang('words.tasks.validity.validity')&#65306;</small>
					<span>
						{{ $task->examinees == 0 ? __('words.tasks.no_examinees') : sprintf('%03.1f', $task->solved / $task->examinees * 100) . '%' }}
					</span>
				</small>
			</h1>
		</div>
		<h2><b>@lang('words.tasks.statement')</b></h2>
		<p>{!! nl2br(e($task->statement)) !!}</p>
		<h2><b>@lang('words.tasks.constraints')</b></h2>
		<p>{{ $task->constraints }}</p>
		<h2><b>@lang('words.tasks.input')</b></h2>
		<p>{{ $task->input }}</p>
		<pre><code>{{ $task->input_code }}</code></pre>
		<h2><b>@lang('words.tasks.output')</b></h2>
		<p>{{ $task->output }}</p>
		@isset($task->output_code)
			<pre><code>{{ $task->output_code }}</code></pre>
		@endisset
		<hr>
		@foreach ($task->samples as $key => $sample)
			<h3><b>@lang('words.tasks.sample_input')&thinsp;{{ $key + 1 }}</b></h3>
			<pre><code>{{ $sample->input_code }}</code></pre>
			<h3><b>@lang('words.tasks.sample_output')&thinsp;{{ $key + 1 }}</b></h3>
			<pre><code>{{ $sample->output_code }}</code></pre>
			<hr>
		@endforeach
		<h2><b>@lang('words.answers.answer')</b></h2>
		{{ Form::open(['route' => ['answers.check', $task->id]]) }}
			{{ Form::textarea('source', "&lt;?php\n", ['rows' => 15, 'style' => 'width:100%;', 'id' => 'tab']) }}
			<hr>
			<button class="btn btn-block btn-primary" name="submission" type="submit" onclick="return confirm('@lang('words.buttons.submission_confirm')');">
				@lang('words.buttons.submission')
			</button>
		{{ Form::close() }}
		<hr>
		<ol class="breadcrumb">
			<li><a href="{{ route('tasks.index') }}">@lang('words.titles.tasks_list')</a></li>
			<li class="active">{{ $task->title }}</li>
		</ol>
	</div>
</div>
@endsection
