<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <link rel="shortcut icon" href="./assets/images/logo.png"/> -->
	<title>Berakal HTML</title>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/main.min.css">
</head>

<body>
	<div class="page-wrapper">
		<!-- ./START - Header -->
		<header class="header">
			<div class="header-main">
				<div class="container">
					<div class="header-wrapper">
						<div class="header-toggle"><img src="./assets/icons/header-toggle.png" alt=""></div>
						<div class="header-logo"><a href="./"><img src="./assets/images/logo-berakal.png" alt=""></a></div>

						<div class="header-inside">
							<!-- menu - START -->
							<div class="header-menu">
								<ul class="main-menu">
									<li class="megamenu">
										<a href="#" class="megamenu-link"><span>Kategori</span><?php include './assets/icons/ic_angle-down.svg'; ?></a>
										<div class="megamenu-wrapper">
											<ul class="container megamenu-container">
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-1.jpg" alt="">
														<span class="megamenu-title">Aplikasi</span>
														<span class="megamenu-desc">Puluhan daftar aplikasi android dan komputer yang bermanfaat untuk kehidupan sehari-hari</span>
													</a>
												</li>
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-2.jpg" alt="">
														<span class="megamenu-title">Mobile</span>
														<span class="megamenu-desc">Belajar tentang Android & iOS</span>
													</a>
												</li>
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-3.jpg" alt="">
														<span class="megamenu-title">Paket Internet</span>
														<span class="megamenu-desc">Berbagai informasi pilihan mengenai paket internet murah berbagai provider seperti Telkomsel, XL, IM3, Tri</span>
													</a>
												</li>
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-4.jpg" alt="">
														<span class="megamenu-title">PC</span>
														<span class="megamenu-desc">Tutorial komputer (PC) untuk menyelesaikan masalah yang terjadi di komputer kamu. Ada juga tips dan trik nya.</span>
													</a>
												</li>
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-5.jpg" alt="">
														<span class="megamenu-title">Social Media</span>
														<span class="megamenu-desc">Tips dan trik mengenai social media yang banyak orang belum ketahui</span>
													</a>
												</li>
												<li>
													<a class="megamenu-col" href="category.php">
														<img src="./assets/images/menu-6.jpg" alt="">
														<span class="megamenu-title">Web</span>
														<span class="megamenu-desc">Puluhan tutorial tentang web internet yang bisa langsung dipraktekan sekarang juga</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<!-- menu - START -->

							<!-- search - START -->
							<form action="search-result.php" class="search">
								<img src="./assets/icons/ic_search.png" alt="">
								<input type="search" placeholder="Search">
							</form>
							<!-- search - END -->

							<!-- socmed - START -->
							<ul class="socmed-links">
								<li><a href="#"><img src="./assets/icons/ic_twitter.svg" alt=""/></a></li>
								<li><a href="#"><img src="./assets/icons/ic_facebook.svg" alt=""/></a></li>
								<li><a href="#"><img src="./assets/icons/ic_linkedin.svg" alt=""/></a></li>
								<li><a href="#"><img src="./assets/icons/ic_youtube.svg" alt=""/></a></li>
								<li><a href="#"><img src="./assets/icons/ic_telegram.svg" alt=""/></a></li>
							</ul>
							<!-- socmed - END -->
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- ./END - Header -->