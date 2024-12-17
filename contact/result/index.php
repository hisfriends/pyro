<?php
session_start();

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$title = $_SESSION['title'];
$title_english = $_SESSION['title_english'];
$body = $_SESSION['body'];

session_destroy();
?>
<!DOCTYPE html>
<html>
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
	<a href="../../">
		<h2>
			PyroSparX
		</h2>
	</a>
	<h1>
		<span class="big"><?php echo $title_english ;?></span>
		<span class="small"><?php echo $title ;?></span>
	</h1>
</div>
<?php
	include('../../module/u2/header.php');
?>
<div id="main_contents">
	<section>
    <div id="result" class="contact_contents top_section">
      <div class="explain_wrapper">
        <?php echo $body ;?>
      </div>
    </div>
  </section>
</div>
<?php
  include('../../module/u2/footer.php');
?>
</body>
</html>
