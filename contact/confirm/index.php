<?php
session_start();
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
<div id="page_title">
	<video src="../img/page_title.mp4" playsinline muted autoplay loop></video>
	<a href="../../index.php">
		<h2>
			PyroSparX
		</h2>
	</a>
	<h1>
		<span class="big">confirm</span>
		<span class="small">入力内容の確認</span>
	</h1>
</div>
<?php
	include('../../module/u2/header.php');
?>
<div id="main_contents">
	<section>
		<div id="confirm" class="contact_contents top_section">
      <div class="explain_wrapper">
        <h1>入力内容をご確認ください。</h1>
        <p>
          下記のフォームに必要事項をご記入の上、送信して下さい。内容を確認後、３営業日以内にお返事させていただきます。メールの確認作業に時間を要する場合がございますので、お急ぎのお客様はお電話にてお問い合わせください。
        </p>
      </div>
      <div class="form_wrapper">
				<div class="form_item">
          <h4>お問い合わせ件名</h4>
          <div class="item_input">
            <p>
              <?php
                echo htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
              ?>
            </p>
          </div>
        </div>
        <div class="form_item">
          <h4>お名前（仮名またはニックネーム可）・団体名</h4>
          <div class="item_input">
            <p>
              <?php
                echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
              ?>
            </p>
          </div>
        </div>
				<?php
          if (!empty($_POST['mail'])){
            echo '<div class="form_item">';
            echo '<h4>メールアドレス</h4>';
            echo '<div class="item_input">';
            echo '<p>';
            echo htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
            echo '</p>';
            echo '<label>';
            echo '</div>';
            echo '</div>';
          }
        ?>
        <?php
          if (!empty($_POST['message'])){
            echo '<div class="form_item">';
            echo '<h4>お問い合わせ内容・コメント</h4>';
            echo '<div class="item_input">';
            echo '<p>';
            echo htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
            echo '</p>';
            echo '<label>';
            echo '</div>';
            echo '</div>';
          }
        ?>
        <div class="form_item">
          <h4>個人情報の取扱いについて</h4>
          <div class="item_checkbox">
            <?php
            $privacy = '';
            switch ($_POST['privacy']) {
              case 'agree':
                $privacy .= '同意します';
                break;
              default :
                $privacy .= '同意しません';
                break;
            }

            echo '<label class="checkbox_input_text">';
            echo $privacy;
            echo '</label>';
            ?>
          </div>
        </div>
        <?php
					$_SESSION['name'] = $_POST['name'];
          $_SESSION['mail'] = $_POST['mail'];
          $_SESSION['message'] = $_POST['message'];
          $_SESSION['privacy'] = $_POST['privacy'];
        ?>
        <div class="confirm_buttons">
          <h4>この内容で送信してよろしいですか？</h4>
          <button onClick="history.back();" class="back_button">
            <i class="fa fa-backward" aria-hidden="true"></i>
            修正する
          </button>
          <button onClick="location.href='../sendmail/index.php'" class="submit_button">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            送信する
          </button>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
  include('../../module/u2/footer.php');
?>
</body>
</html>
