<!DOCTYPE Html>
<html>

	<head>
		<title>Blogger KW - Tulis Post</title>
		<link rel="Stylesheet" href="Style.css">
		<link rel="Stylesheet" href="fontawesome/css/font-awesome.css">
		<script src="dropdown.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="author" content="Blogger KW Team">
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="ckeditor/style.js"></script>
	</head>
	
	<body>
		<div class="page-header">
			<div class="page-header-content">
				<a href="/cms/posts.php" class="header-link"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link" target="_blank"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="javascript:void(0)" class="header-link" style="border:1px solid #fff; box-shadow:0px 0px 5px #fff;"><span class="fa fa-edit"></span> | Tulis Post</a>
			</div>
			<div class="page-header-brand">
				<a href="/cms/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
			</div>
		</div>
		<br><br><br><br>
		<div class="page-blog-container">
			<div class="blog-status">
				<h3 class="blog-name-title"><a class="blog-link" href="#">Nama Blog</a> | Post Baru</h3>
			</div>
			<div class="blog-name">
				<h3 class="blog-name-title"><a href="#" class="blog-link">My Blog</a></h3>
			</div>
		</div>
		<hr>
		
	<div class="page-content">
		<div class="texteditor">
			<input class="post-title-input" type="text" required="required" placeholder="Judul Post" />
			<br><br>
			<form class="statistik-form" action="#">
			<textarea name="article" class="ckeditor"></textarea>

			<br>
			<button class="post-button" type="submit">Publikasikan</button><button class="post-button" type="submit">Tampilan Hasil</button><button class="post-button" type="submit">Simpan</button>
			</form>
		</div>
	</div>
		
		<div class="navigation-left">
			<a class="nav-new-post-button" href="/cms/">Statistik</a>
			<div class="navigation-content">
				<a class="navigation-link" href="/cms/"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				<a class="navigation-link" href="/cms/posts.php"><span class="fa fa-file" id="nav-icon"></span>&nbsp;&nbsp; Postingan</a>

				<div class="dropdown-halaman">
				<a class="navigation-link" href="javascript:void(0)" onclick="halamanClicked()"><span class="fa fa-file-text-o" id="nav-icon"></span>&nbsp;&nbsp; Halaman</a>
				<div class="dropdown-halaman-content" id="hlmctnt">
				<a href="#">Lihat Halaman</a>
				<a href="#">Total Halaman</a>
				<a href="#">Total Pengunjung</a>
				</div>
				</div>
				
				<a class="navigation-link" href="#"><span class="fa fa-comment" id="nav-icon"></span>&nbsp;&nbsp; Komentar</a>
				<a class="navigation-link" href="#"><span class="fa fa-bar-chart" id="nav-icon"></span>&nbsp;&nbsp; Status</a>
				<a class="navigation-link" href="#"><span class="fa fa-diamond" id="nav-icon"></span>&nbsp;&nbsp; Pencapaian</a>
				<a class="navigation-link" href="#"><span class="fa fa-desktop" id="nav-icon"></span>&nbsp;&nbsp; Layout</a>
				<a class="navigation-link" href="#"><span class="fa fa-code" id="nav-icon"></span>&nbsp;&nbsp; Template</a>
				<a class="navigation-link" href="#"><span class="fa fa-cogs" id="nav-icon"></span>&nbsp;&nbsp; Pengaturan</a>
			</div>
		</div>
	</body>
</html>