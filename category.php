<?php include('./component-page/header.php')?>

<div class="page-content page-category">
	<div class="container">
		<div class="section">
			<div class="section-heading text-center">
				<div class="section-title">Aplikasi</div>
				<div class="section-subtitle">Puluhan daftar aplikasi android dan komputer yang bermanfaat untuk kehidupan sehari-hari</div>
			</div>

			<div class="row section-post">
				<?php 
					$judul = ['Aplikasi Note (Catatan)', 'Game Petualangan Android Offline', 'Aplikasi AutoCad Android', 'Aplikasi Keyboard Android', 'Aplikasi Pemutar Video Terbaik Android', 'Aplikasi Cetak Foto', 'Aplikasi Al Quran Terbaik', 'Aplikasi Kunci Gitar', 'Aplikasi Edit Lagu PC'];
					$img = ['4', '2', '3', '3', '6', '4', '6', '5', '2'];
					for($i=0; $i<9; $i++):
				?>
					<div class="col-md-6 col-lg-4">
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

		<!-- pagination - START -->
		<ul class="pagination">
			<li class="prev disabled"><a href="#"><?php include './assets/icons/ic_arrow-left.svg'; ?></a></li>
			<li class="active"><a href="#">1</a></li>
			<li class="numb"><a href="#">2</a></li>
			<li class="numb"><a href="#">3</a></li>
			<li class="numb"><a href="#">4</a></li>
			<li class="numb"><a href="#">5</a></li>
			<li><span>...</span></li>
			<li class="numb"><a href="#">19</a></li>
			<li class="next"><a href="#"><?php include './assets/icons/ic_arrow-right.svg'; ?></a></li>
		</ul>
		<!-- pagination - END -->
	</div>
</div>

<?php include('./component-page/footer.php')?>