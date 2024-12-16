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
		<span class="big">Music</span>
		<span class="small">楽曲を聞く</span>
	</h1>
</div>
<?php
  include('../module/header.php');
?>
<div id="main_contents">
	<section>
		<div class="section_title">
			Listen
			<span>
				聞く
			</span>
		</div>
		<div class="description">
			<p>
				画像をクリックすると再生されます。音量に注意してください。音楽を再生したくない方は、お手持ちのデバイスの音量を下げてください。
			</p>
		</div>
		<div class="music_list">
			<div class="column">
				<div class="img_wrapper">
					<img src="img/FOREVER.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('FOREVER').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('FOREVER').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>FOREVER</h2>
					<h3>2019.4</h3>
				</div>
				<div class="medium">
					<a href="content/FOREVER.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=AEOky2Nj-rg" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="FOREVER" preload="metadata" controls>
					<source src="content/FOREVER.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/NEXT_STORY.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('NEXT_STORY').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('NEXT_STORY').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>NEXT STORY</h2>
					<h3>2019.2</h3>
				</div>
				<div class="medium">
					<a href="content/NEXT_STORY.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=LQ15Kh4CDCk" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="NEXT_STORY" preload="metadata" controls>
					<source src="content/NEXT_STORY.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/LULLABY.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('LULLABY').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('LULLABY').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>LULLABY</h2>
					<h3>2018.12</h3>
				</div>
				<div class="medium">
					<a href="content/LULLABY.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=Vi6xfMjAQMI" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="LULLABY" preload="metadata" controls>
					<source src="content/LULLABY.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/FRAGMENT.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('FRAGMENT').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('FRAGMENT').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>FRAGMENT</h2>
					<h3>2018.11</h3>
				</div>
				<div class="medium">
					<a href="content/FRAGMENT.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=Ati3E77k-SA" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="FRAGMENT" preload="metadata" controls>
					<source src="content/FRAGMENT.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/SWEET_DAYDREAM.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('SWEET_DAYDREAM').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('SWEET_DAYDREAM').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>SWEET DAYDREAM</h2>
					<h3>2018.11</h3>
				</div>
				<div class="medium">
					<a href="content/SWEET_DAYDREAM.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=-pg1pmv8QD8" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="SWEET_DAYDREAM" preload="metadata" controls>
					<source src="content/SWEET_DAYDREAM.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/GLITTER_WORLD.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('GLITTER_WORLD').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('GLITTER_WORLD').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>GLITTER WORLD</h2>
					<h3>2018.11</h3>
				</div>
				<div class="medium">
					<a href="content/GLITTER_WORLD.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=U_H22kyOYIA" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="GLITTER_WORLD" preload="metadata" controls>
					<source src="content/GLITTER_WORLD.mp3" type="audio/mp3">
				</audio>
			</div>
			<div class="column">
				<div class="img_wrapper">
					<img src="img/To_my_horizon.jpg"/>
					<div class="controler">
						<div class="switch start">
							<i class="far fa-play-circle" onclick="document.getElementById('To_my_horizon').play()"></i>
						</div>
						<div class="switch stop">
							<i class="far fa-pause-circle" onclick="document.getElementById('To_my_horizon').pause()"></i>
						</div>
					</div>
				</div>
				<div class="script">
					<h2>To my horizon</h2>
					<h3>2018.4</h3>
				</div>
				<div class="medium">
					<a href="content/To_my_horizon.mp3" download class="link">
						<i class="fas fa-download"></i>
						ダウンロード
					</a>
					<a href="https://www.youtube.com/watch?v=WYbbgqLX8KQ" class="link">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</div>
				<audio id="To_my_horizon" preload="metadata" controls>
					<source src="content/To_my_horizon.mp3" type="audio/mp3">
				</audio>
			</div>
		</div>
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
