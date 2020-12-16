<?php

return [

	'titles' => [
		'tasks_list' => '問題一覧',
		'task_create' => '問題作成',
		'answers_list' => '回答一覧',
	],

	'notices' => [
		'no_tasks' => '検索条件に該当する問題がありません',
		'no_answers' => "まだ回答がありません<br>問題一覧ページから回答してみましょう！",
		'can_not_answer' => '作成した問題には回答できません',
	],

	'flashes' => [
		'guest_logged_in' => '簡単ログインしました！',
		'no_task' => '存在しない問題です',
		'no_answer' => '存在しない回答です',
		'wrong_answer' => '不正解です...',
		'correct_answer' => '正解です!',
		'task_created' => '問題を提案をお受けしました！ 運営のレビューをお待ち下さい',
	],

	'tasks' => [
		'title' => '問題名',
		'title_search_placeholder' => '問題名で検索',
		'statement' => '問題文',
		'constraints' => '制約',
		'input' => '入力',
		'output' => '出力',
		'sample_input' => '入力例',
		'sample_output' => '出力例',
		'difficulty' => '難易度',
		'creator' => '作成者',
		'solved' => '正解者数',
		'examinees' => '回答者数',
		'no_select' => '選択しない',
		'no_examinees' => '回答者無し',
		'include_no_examinees' => '「回答者無し」を含める',
		'lower_validity' => '正答率下限',
		'upper_validity' => '正答率上限',
		'validity' => [
			'validity' => '合格率',
			'lower' => ':n%以上',
			'upper' => ':n%以下',
		],
	],

	'answers' => [
		'answer' => '回答',
		'answer_date' => '回答日時',
		'judge' => '判定',
		'byte' => 'バイト数',
		'code' => '提出コード',
		'compile' => 'コンパイルメッセージ',
		'testings' => 'テストケース',
		'test_number' => 'テスト番号',
	],

	'buttons' => [
		'register' => '新規登録',
		'login' => 'ログイン',
		'logout' => 'ログアウト',
		'guest_login' => '簡単ログイン',
		'or' => 'または',
		'search' => '検索',
		'submission' => '提出',
		'submission_confirm' => '提出しますか?',
		'send' => '送信',
		'send_confirm' => '送信しますか?',
		'approval' => '承認',
		'approval_confirm' => 'この問題を承認しますか？',
		'update_only' => '更新のみ',
		'update_only_confirm' => '更新しますか？',
	],

];