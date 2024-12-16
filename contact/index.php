<!DOCTYPE html>
<html lang="ja">
<head>
<title>contact | PyroSparX</title>
<?php
	include('../module/meta.php');
?>
<link rel="stylesheet" href="../common/css/contact.css" />
</head>
<body>
<div id="page_title">
	<video src="img/page_title.mp4" playsinline muted autoplay loop></video>
	<a href="../index.php">
		<h2>
    	PyroSparX
  	</h2>
	</a>
	<h1>
		<span class="big">contact</span>
		<span class="small">お問い合わせ</span>
	</h1>
</div>
<?php
  include('../module/header.php');
?>
<div id="main_contents">
	<section>
    <h1 class="section_title">
      mail form
      <span>
        メールフォーム
      </span>
    </h1>
		<div class="description">
			楽曲を使用する場合は、下記のメールフォームをご使用になり、私たちにお問い合わせください。<br>
			PyroSparX の楽曲は無料で使用できます。 ご自身の活動・動画・イベントへの使用、商用利用も歓迎します。 その際は、使用料は一切いただきませんが、私たちが使用状況を把握できるように、使用目的をご連絡ください。
		</div>
		<div class="contact_contents top_section" id="form">
      <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
      <form action="confirm/index.php" method="POST">
        <div class="form_item">
          <h4>お名前（仮名またはニックネーム可）・団体名<span>必須</span></h4>
          <div class="item_input">
            <input type="text" placeholder="" name="name" value="" size="40" aria-required="true" required>
          </div>
        </div>
        <div class="form_item">
          <h4>メールアドレス<span class="at_will">任意</span></h4>
          <div class="item_input">
            <input type="email" placeholder="mailaddress@me.com" name="mail" value="" size="40" aria-required="true">
          </div>
        </div>
        <div class="form_item">
          <h4>お問い合わせ内容・コメント<span class="at_will">任意</span></h4>
          <div class="item_input">
            <textarea name="message" placeholder="他にご要望・ご不明な点がある場合は、こちらに入力してください" cols="40" rows="10" aria-invalid="false"></textarea>
          </div>
        </div>
        <div class="privacy_item">
          <h4>個人情報の取扱いについて</h4>
          <p>
            本フォームからあなたが記入・登録された個人情報は、あなたへの電子メール送信などのみの目的で利用・保管することをお約束いたします。
          </p>
          <div>
            <label>
              <input type="checkbox" name="privacy" value="agree" class="checkbox_input">
              <span class="checkbox_input_text">同意します</span>
            </label>
          </div>
        </div>
        <input type="submit" value="入力内容のご確認" class="submit_button">
      </form>
    </div>
  </section>
</div>
<?php
  include('../module/footer.php');
?>
</body>
</html>
