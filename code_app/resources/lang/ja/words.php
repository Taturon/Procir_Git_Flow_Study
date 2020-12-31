<?php

return [

	'titles' => [
		'register' => '新規登録',
		'login' => 'ログイン',
		'profile' => ':nameさんのプロフィール',
		'created_tasks' => ':nameさんが作成した問題一覧',
		'approved_tasks' => '承認済み問題',
		'unapproved_tasks' => '承認待ち問題',
		'your_profile' => 'プロフィール',
		'profile_edit' => 'プロフィール編集',
		'tasks_list' => '問題一覧',
		'task_create' => '問題作成',
		'task_edit' => '問題編集',
		'answers_list' => '回答一覧',
		'admin_dashboard' => '管理者ダッシュボード',
		'approved_tasks_list' => '承認済み問題一覧',
		'unapproved_tasks_list' => '承認待ち問題一覧',
		'tasks_recent_unapproved_list' => '直近の承認待ち問題',
		'tasks_recent_approved_list' => '直近の承認済み問題',
		'task_edit_or_approve' => '問題の編集・承認',
		'inquiries_list' => 'お問い合わせ一覧',
		'recent_inquiries_list' => '直近のお問い合わせ',
		'inquiry_create' => 'お問い合わせ',
	],

	'notices' => [
		'required' => '必須',
		'optional' => '任意',
		'max_characters' => '最大:count文字',
		'max_mega_bytes' => '最大5MB',
		'icon_size' => ':min &times; :min ~ :max &times; :max px',
		'valid_extensions' => 'jpg/png/bmp/gif/svgのみ',
		'no_tasks' => '検索条件に該当する問題がありません',
		'no_created_tasks' => "まだ問題がありません<br>問題作成ページから作成してみましょう！",
		'no_approved_tasks' => ":nameさんの承認済み問題はありません",
		'no_unapproved_tasks' => ":nameさんの承認待ち問題はありません",
		'no_answers' => "まだ回答がありません<br>問題一覧ページから回答してみましょう！",
		'no_inquiries' => 'お問い合わせはありません',
		'can_not_self_answer' => '作成した問題には回答できません',
		'can_not_duplicate_answer' => '正解した問題には回答できません',
		'tasks_no_unapproved_list' => '承認待ち問題はありません',
		'tasks_no_approved_list' => '承認済み問題はありません',
	],

	'flashes' => [
		'guest_logged_in' => 'お試しログインしました！',
		'session_expired' => 'ログインセッションが切れました 再度ログインして下さい',
		'invalid_access' => '不正なアクセスです',
		'no_user' => '存在しないユーザーです',
		'no_task' => '存在しない問題です',
		'no_answer' => '存在しない回答です',
		'no_inquiry' => '存在しないお問い合わせです',
		'wrong_answer' => '不正解です...',
		'correct_answer' => '正解です！',
		'profile_updated' => 'プロフィールを更新しました！',
		'task_created' => '問題を提案をお受けしました！ 運営のレビューをお待ち下さい',
		'task_updated' => '問題の内容を更新しました！',
		'task_deleted' => '問題を削除しました！',
		'task_approved' => '問題を承認しました！',
		'inquiry_recived' => 'お問い合わせを送信しました！',
	],

	'authentication' => [
		'name' => '名前',
		'mail' => 'メールアドレス',
		'password' => 'パスワード',
		'password_confirm' => 'パスワード(確認)',
		'remember' => 'ログイン情報の保存',
	],

	'users' => [
		'registered_date' => '登録日時',
		'name' => 'ユーザー名',
		'email' => 'メールアドレス',
		'icon' => 'アイコン',
		'recent_answers' => '最近の回答',
		'recent_tasks' => '最近作成した問題',
		'created_tasks' => '作成した問題一覧',
		'unapproved' => '未承認',
		'approved' => '承認済',
		'unapproved_tasks_count' => '承認待ち問題数',
		'approved_tasks_count' => '承認済み問題数',
		'all_answers_count' => '回答数',
		'correct_answers_count' => '正答数',
		'correct_answer_rate' => '正答率',
	],

	'inquiries' => [
		'user_name' => 'ユーザー名',
		'title' => 'タイトル',
		'categories' => 'カテゴリー',
		'contents' => '内容',
		'inquired_date' => 'お問合せ日時',
		'other' => 'その他',
		'about_tasks' => '問題について',
		'about_judges' => '解答の合否判定について',
		'defect_report' => '不具合報告',
		'new_features_request' => '新機能の要望',
	],

	'tasks' => [
		'basic_configuration' => '基本設定',
		'title' => '問題名',
		'title_search_placeholder' => '問題名で検索',
		'statement' => '問題文',
		'constraints' => '制約',
		'input' => '入力',
		'input_description' => '入力の説明',
		'output' => '出力',
		'output_description' => '出力の説明',
		'difficulty' => '難易度',
		'samples' => 'サンプルケース',
		'sample_input' => '入力例',
		'sample_output' => '出力例',
		'tests' => 'テストケース',
		'test_input' => 'テスト入力',
		'test_output' => 'テスト出力',
		'creator' => '作成者',
		'solved' => '正解者数',
		'examinees' => '回答者数',
		'created_date' => '作成日時',
		'created_and_updated_date' => '作成・更新日時',
		'approved_date' => '承認日時',
		'published_date' => '公開日時',
		'no_select' => '選択しない',
		'no_examinees' => '回答者無し',
		'include_no_examinees' => '回答者無しを含む',
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
		'guest_login' => 'お試しログイン',
		'or' => 'または',
		'forgot' => 'パスワードを忘れた方はこちら',
		'search' => '検索',
		'submission' => '提出',
		'submission_confirm' => '提出しますか?',
		'send' => '送信',
		'send_confirm' => '送信しますか?',
		'approval' => '承認',
		'approval_confirm' => 'この問題を承認しますか？',
		'edit' => '編集',
		'update' => '更新',
		'can_not_update' => 'ゲストユーザーはプロフィールを更新できません',
		'update_confirm' => '更新しますか？',
		'update_only' => '更新のみ',
		'update_only_confirm' => '更新しますか？',
		'delete' => '削除',
		'delete_confirm' => '問題「:title」を削除しますか？',
	],

	'mails' => [
		'subject_task_created' => '問題作成通知',
		'header_task_created' => '問題が作成されました',
	],

];
