<?php include('./component-page/header.php')?>

<div class="page-content">
	<div class="container">
		<!-- hero - START -->
		<div class="post post-hero">
			<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>
			<div class="style style-ellipse"><img src="./assets/icons/var_ellipse.png" alt=""></div>

			<a href="./article-with-comment.php" class="post-img">
				<img src="./assets/images/post-6.jpg" alt="">
			</a>
			<div class="post-box">
				<div class="post-heading">
					<h2 class="post-title"><a href="article-with-comment.php">Cara Mengatasi Lupa Password Gmail Android</a></h2>
					<a href="category.php" class="post-cat">Aplikasi</a>
				</div>
				<div class="post-meta">
					<a class="post-ava" href="writer-page.php"><img src="./assets/images/ava-1.jpg" alt=""></a>
					<div class="author-info">
						<a href="writer-page.php" class="author-name">Anika Putri Utami</a>
						<a href="#" class="post-date">April 27, 2020</a>
					</div>
				</div>
			</div>
		</div>
		<!-- hero - END -->

		<!-- artikel terbaru - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">Artikel Terbaru</div>
				<div class="section-subtitle">Yuk cek artikel baru, jangan sampe kelewatan ya!</div>
			</div>

			<div class="post-slider row">
				<?php 
					$judul = ['','', 'Aplikasi Note (Catatan)', 'Cara Mengatasi Lupa Password Gmail Android', 'Cara Menghapus Akun Facebook', 'Aplikasi Note (Catatan)'];
					for($i=2; $i<6; $i++):
				?>
					<div class="col-lg-4">
						<div class="post">
							<a href="article-with-comment.php" class="post-img">
								<img src="./assets/images/post-<?= $i ?>.jpg" alt="">
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

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- artikel terbaru - END -->

		<!-- aplikasi - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">Aplikasi</div>
				<div class="section-subtitle">Puluhan daftar aplikasi android dan komputer yang bermanfaat untuk kehidupan sehari-hari</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>

				<?php 
					$judul = ['Aplikasi Al Quran Terbaik', 'Aplikasi Kunci Gitar', 'Aplikasi Edit Lagu PC'];
					$img = ['6', '2', '5'];
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

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- aplikasi - END -->

		<!-- mobile - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">Mobile</div>
				<div class="section-subtitle">Belajar tentang Android & iOS</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>

				<?php 
					$judul = ['Cara Mengembalikan SMS yang Terhapus', 'Penyebab HP Panas', 'Cara Upgrade HP 3G ke 4G'];
					$img = ['1', '3', '4'];
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
									<a href="category.php" class="post-cat">Mobile</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- mobile - END -->

		<!-- paket internet - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">Paket Internet</div>
				<div class="section-subtitle">Berbagai informasi pilihan mengenai paket internet murah berbagai provider seperti Telkomsel, XL, IM3, Tri</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>

				<?php 
					$judul = ['Cara Transfer Pulsa 3', 'Cara Menggunakan Kuota Videomax', 'Paket Internet Telkomsel 3G'];
					$img = ['3', '2', '5'];
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
									<a href="category.php" class="post-cat">Paket Internet</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- paket internet - END -->

		<!-- PC - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">PC</div>
				<div class="section-subtitle">Tutorial komputer (PC) untuk menyelesaikan masalah yang terjadi di komputer kamu. Ada juga tips dan trik nya</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>

				<?php 
					$judul = ['Your Windows License Will Expire Soon', 'Cara Membuat Background Pass Foto Biru', 'Cara Menghilangkan Virus di Flashdisk'];
					$img = ['4', '3', '2'];
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
									<a href="category.php" class="post-cat">PC</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- PC - END -->

		<!-- social media - START -->
		<div class="section">
			<div class="section-heading">
				<div class="section-title">Social Media</div>
				<div class="section-subtitle">Tips dan trik mengenai social media yang banyak orang belum ketahui</div>
			</div>

			<div class="row section-post">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>

				<?php 
					$judul = ['Cara Membuat Akun Facebook', 'Cara Mengembalikan Akun Facebook yang Diblokir', 'Cara Mengembalikan Chat WhatsApp yang Terhapus'];
					$img = ['6', '5', '4'];
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
									<a href="category.php" class="post-cat">Paket Internet</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- social media - END -->

		<!-- web - START -->
		<div class="section no-border">
			<div class="section-heading">
				<div class="section-title">Web</div>
				<div class="section-subtitle">Puluhan tutorial tentang web internet yang bisa langsung dipraktekan sekarang juga</div>
			</div>

			<div class="row section-postweb">
				<div class="style style-dots"><img src="./assets/icons/var_dots.png" alt=""></div>
				<div class="style style-ellipse"><img src="./assets/icons/var_ellipse.png" alt=""></div>

				<?php 
					$judul = ['Cara Berlangganan Netflix', 'Cara Download File di Google Drive', 'Cara Menghilangkan Password PDF'];
					$img = ['3', '5', '2'];
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
									<a href="category.php" class="post-cat">Web</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<div class="post-loadmore">
				<a href="category.php" class="btn">Lihat Semua</a>
			</div>
		</div>
		<!-- web - END -->
	</div>

	<div class="page-style"></div>
</div>

<?php include('./component-page/footer.php')?>