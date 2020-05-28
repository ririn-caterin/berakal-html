<?php include('./component-page/header.php')?>

<div class="page-content page-post">
	<div class="container">
		<div class="page-inside">
			<!-- breadcrumb - START -->
			<ul class="breadcrumb">
				<li><a href="./">Home</a></li>
				<li class="separator"><img src="./assets/icons/ic_arrow-right.svg" alt=""></li>
				<li><a href="category.php">Aplikasi</a></li>
				<li class="separator"><img src="./assets/icons/ic_arrow-right.svg" alt=""></li>
				<li><span>Gmail</span></li>
			</ul>
			<!-- breadcrumb - END -->

			<h1 class="page-title">Cara Mengatasi Lupa Password Gmail Android</h1>
			
			<!-- post meta - START -->
			<div class="post-meta">
				<a class="post-ava" href="writer-page.php"><img src="./assets/images/ava-1.jpg" alt=""></a>
				<div class="author-info">
					<a href="writer-page.php" class="author-name">Anika Putri</a>
					<a href="#" class="btn btn-follow">follow</a>
					<div class="author-desc">Penikmat Kopi dan Pecinta Teknologi</div>
				</div>
			</div>
			<!-- post meta - END -->
			
			<!-- post heading -START -->
			<div class="post-heading">
				<div class="post-published">
					Published April 27, 2020
				</div>
				<div class="post-share">
					<span>Share</span>
					<ul class="socmed-links">
						<li><a href="#"><?php include './assets/icons/ic_twitter.svg'; ?></a></li>
						<li><a href="#"><?php include './assets/icons/ic_facebook.svg'; ?></a></li>
						<li><a href="#"><?php include './assets/icons/ic_linkedin.svg'; ?></a></li>
				</div>
				<a class="post-reply" href="#">
					<img src="./assets/icons/ic_comment.svg" alt="">
					<span>2 reply</span>
				</a>
			</div>
			<!-- post heading - END -->

			<!-- post featured - START -->
			<div class="post-featured">
				<img src="./assets/images/post-6.jpg" alt="">
			</div>
			<!-- post featured - END -->

			<div class="article-post">
				<p>Mungkin kamu bertanya-tanya dengan hal yang satu ini. Apa itu deep linking? Deep Linking adalah sebuah teknik yang menggunakan teknik anchor text untuk dapat menghubungkan antara halaman tersebut dengan halaman lain yang ada di website ataupun blog kamu.</p>
				<h2>Fitur Terbaik WhatsApp Pro</h2>
				<p>Berikut ini adalah beberapa fitur menarik yang dapat kalian temukan pada aplikasi Whatsapp Pro, antara lain:</p>

				<!-- toc - START -->
				<div id="ez-toc-container" class="ez-toc-container">
					<div class="ez-toc-title-container">
						<p class="ez-toc-title">Daftar Isi</p>
						<span class="ez-toc-title-toggle"><?php include('./assets/icons/ic_angle-down.svg')?></span>
					</div>
					<nav>
						<ul class="ez-toc-list">
							<li><a href="#">1. Tema dan Kustomisasi</a></li>
							<li><a href="#">2. Font</a></li>
							<li><a href="#">3. Mata – mata WhatsApp Web</a></li>
							<li><a href="#">4. Penjadwalan Pesan</a></li>
							<li><a href="#">5. Ubah Latar Belakang Utama</a></li>
							<li><a href="#">6. Mod Privasi</a></li>
							<li><a href="#">7. Fitur Unggulan Lainnya</a></li>
						</ul>
					</nav>
				</div>
				<!-- toc - END -->

				<h2>1. Tema dan Kustomisasi</h2>
				<p>Tema yang dibuat pada GBWA Asli akan senantiasa bekerja secara sempurna di dalam versi Premium satu ini. Sehingga kamu tidak perlu ragu lagi akan hal ini.</p>
				<p>Bahkan, kamu juga bisa mengunduh seluruh tema yang tersedia di dalamnya, menarik bukan?</p>

				<h2>2. Font</h2>
				<p>Untuk sebagian orang, penggunaan font default adalah hal yang membosankan. Dengan menggunakan aplikasi ini, maka ada opsi lain untuk dapat mengubah font yang kamu inginkan.</p>
				<p>Di tahap awal, kalian akan membutuhkan waktu lebih lama agar dapat mengunduh font yang tersedia.</p>
				<p>Sehingga kalian perlu bersabar ketika mendownloadnya</p>
			</div>
		</div>

		<!-- artikel lainnya - START -->
		<div class="section post-related">
			<div class="section-heading">
				<div class="section-title">Artikel Lainnya</div>
				<div class="section-subtitle">Mungkin kamu juga suka artikel ini.</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>
				<div class="style style-ellipse"><img src="./assets/icons/var_ellipse.png" alt=""></div>

				<?php 
					$judul = ['Aplikasi Al Quran Terbaik', 'Aplikasi Kunci Gitar', 'Aplikasi Edit Lagu PC'];
					$img = ['4', '2', '3'];
					for($i=0; $i<3; $i++):
				?>
					<div class="col-lg-4">
						<div class="post">
							<a href="article-with-comment.php" class="post-img">
								<img src="./assets/images/post-<?= $img[$i] ?>.jpg" alt="">
							</a>
							<div class="post-box">
								<h2 class="post-title"><a href="article-with-comment.php"><?= $judul[$i] ?></a></h2>
								<div class="post-meta">
									<a class="post-ava" href="writer-page.php"><img src="./assets/images/ava-1.jpg" alt=""></a>
									<div class="author-info">
										<a href="writer-page.php" class="author-name">Anika Putri Utami</a>
										<a href="#" class="post-date">April 27, 2020</a>
									</div>
									<a href="category.php" class="post-cat">Aplikasi</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<!-- artikel lainnya - END -->

		<div class="page-inside">
			<!-- komentar - START -->
			<div class="comment">
				<!-- comment form - START -->
				<div class="comment-form__wrapper">
					<div class="comment-title">Tinggalkan Balasan</div>
					<div class="comment-form">
						<form action="">
							<div class="row">
								<div class="col-12 col-md-4">
									<input type="text" placeholder="Name">
								</div>
								<div class="col-12 col-md-4">
									<input type="text" placeholder="Email">
								</div>
								<div class="col-12 col-md-4">
									<input type="text" placeholder="Website">
								</div>
							</div>
							<textarea name="" id="" cols="30" rows="10" placeholder="Write a response ..."></textarea>

							<div class="text-right">
								<button class="btn" type="submit">Kirim</button>
							</div>
						</form>
					</div>
				</div>
				<!-- comment form - END -->
			</div>
			<!-- komentar - END -->
		</div>
	</div>
</div>

<?php include('./component-page/footer.php')?>