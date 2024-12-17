<?php
session_start();

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$privacy = '';
switch ($_SESSION['privacy']) {
	case 'agree':
		$privacy .= '同意します';
		break;
	default :
		$privacy .= '同意しません';
		break;
}

$to = 'yanatake17.17@gmail.com';

$subject = 'PyroSparX公式Webサイト通したお問い合わせ';

$body =

	'<お名前（仮名またはニックネーム可）・団体名>' ."\n" .
	$_SESSION['name'] . "\n" ."\n" .
	'<メールアドレス>' ."\n" .
	$_SESSION['mail'] . "\n" ."\n" .
	'<お問い合わせ内容・コメント>' . "\n" .
	$_SESSION['message']  . "\n" ."\n" .
	'<個人情報の取扱いについて>' ."\n" .
	$privacy . "\n";

$result = mb_send_mail($to, $subject, $body);

$subject_to_customer = 'お問合せありがとうございました（PyroSparX）';

$body_to_customer =
	'この度はお問い合わせ頂きまして、誠にありがとうございました。'. "\n" ."\n" .
	'たった今送信されたメールにあなたのメールアドレス（任意で入力）が記載され、なおかつお問い合わせの内容がこちらの返信を要する場合は、こちらから返信いたします。'. "\n" ."\n" .
	'内容によっては返答が遅れる場合がありますので、ご了承ください。' ."\n" ."\n" .
	'＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝' ."\n" ."\n" .
	'<お名前（仮名またはニックネーム可）・団体名>' ."\n" .
	$_SESSION['name'] . "\n" ."\n" .
	'<メールアドレス>' ."\n" .
	$_SESSION['mail'] . "\n" ."\n" .
	'<お問い合わせ内容・コメント>' . "\n" .
	$_SESSION['message']  . "\n" ."\n" .
	'<個人情報の取扱いについて>' ."\n" .
	$privacy . "\n"."\n" .
	'＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝' ."\n" ."\n" .
	'────────────────────────────────' ."\n" .
	'Tokyo,Japan' ."\n" .
	'COPYRIGHT 2019 PyroSparX ALL RIGHT RESERVED.' ."\n" .
	'────────────────────────────────'. "\n";

$result_to_customer = mb_send_mail($_SESSION['mail'], $subject_to_customer, $body_to_customer);

if ($result) {
	$title_english ='completed';
	$title = '送信完了';
	$body ='
	<h1>送信に成功しました</h1>
	<p>
		この度はお問い合わせ頂きまして、誠にありがとうございました。<br>
		たった今送信されたメールにあなたのメールアドレス（任意で入力）が記載され、なおかつお問い合わせの内容がこちらの返信を要する場合は、こちらから返信いたします。<br>
		内容によっては返答が遅れる場合がありますので、ご了承ください。
	</p>
	<a href="../../index.php" class="back_to_top_button">
		<i class="fa fa-backward" aria-hidden="true"></i>
		トップに戻る
	</a>
	';
} else {
	$title_english = 'error';
	$title = '送信エラー';
	$body ='
	<h1>送信に失敗しました</h1>
	<p>
		申し訳ございません。予期せぬエラーが発生しました。トップページからやり直し、もう一度送信を試みてください。
	</p>
	<a href="../index.php" class="back_to_top_button">
		<i class="fa fa-backward" aria-hidden="true"></i>
		トップに戻る
	</a>
	';
}

$_SESSION['body'] = $body;
$_SESSION['title_english'] = $title_english;
$_SESSION['title'] = $title;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>contact | PyroSparX</title>
<?php
	include('../../module/u2/meta.php');
?>
<link rel="stylesheet" href="../../common/css/contact.css" />
</head>
<body>
</body>
</html>
