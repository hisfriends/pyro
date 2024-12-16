<!DOCTYPE html>
<html lang="ja">
<head>
<title>about | PyroSparX</title>
<?php
	include('../module/meta.php');
?>
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
		<span class="big">About</span>
		<span class="small">PyroSparX について知る</span>
	</h1>
</div>
<?php
  include('../module/header.php');
?>
<div id="main_contents">
	<section>
		<div class="section_title">
			Style
			<span>
				スタイル
			</span>
		</div>
		<div class="feature">
			<div class="img_wrapper">
				<img src="img/style_01.jpg"/>
			</div>
			<div class="description">
				<p>
					あらゆる楽曲のジャンルに関心を示す貪欲な創作意欲。それを追求するストイックな姿勢。クールなルックスに包まれた、鋭いアイロニーと溢れ出るパッション。独特な感性を持ち合わせていながらも、同世代の多くの人に支持されるスタイル。
				</p>
				<p>
					これからの下の文章を考えよう。
				</p>
			</div>
		</div>
	</section>
	<section>
		<div class="section_title">
			History
			<span>
				これまでの活動
			</span>
		</div>
    <table class="history_list">
			<tbody>
	      <tr class="column">
	        <th class="day">
	          2014年
	        </th>
	        <td class="title">
						Macbook を購入し、楽曲を作り始める。制作ソフトも含めて、30万円を超える貯めたバイト代を溶かす。
	        </td>
	      </tr>
				<tr class="column">
	        <th class="day">
	          2015年
	        </th>
	        <td class="title">
						ボーカロイドにも手を出す。
	        </td>
	      </tr>
				<tr class="column">
	        <th class="day">
	          2015年
	        </th>
	        <td class="title">
						親友に映像制作を頼み、自らの楽曲をYoutubeにアップする活動を開始。
	        </td>
	      </tr>
			</tbody>
    </table>
	</section>
	<section>
		<?php
		  include('../module/contact.php');
		?>
	</section>
</div>
<?php
  include('../module/footer.php');
?>
</body>
</html>
