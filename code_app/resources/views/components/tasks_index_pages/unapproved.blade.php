<div class="table-responsive">
	<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr>
				<th style="width:15%;">
					<div class="text-center">@lang('words.tasks.difficulty')</div>
				</th>
				<th style="width:55%;">
					<div class="text-center">@lang('words.tasks.title')</div>
				</th>
				<th style="width:15%;">
					<div class="text-center">@lang('words.tasks.created_and_updated_date')</div>
				</th>
				<th style="width:15%;">
					<div class="text-center">@lang('words.tasks.creator')</div>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tasks as $task)
				<tr>
					<td style="color:{{ config('tasks.colors')[$task->difficulty] }};">
						{{ config('tasks.stars')[$task->difficulty] }}
					</td>
					<td>
						<a href="{{ route('admin.tasks.edit', ['id' => $task->id]) }}">
							{{ $task->title }}
						</a>
					</td>
					<td class="text-center">
						{{ $task->updated_at }}
					</td>
					<td class="text-center">
						<img src="{{ asset('storage/icons/' . $task->user->icon) }}" width="20px" height="20px">
						{{ $task->user->name }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>