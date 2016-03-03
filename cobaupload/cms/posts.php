<!DOCTYPE Html>
<html>

	<head>
		<title>Blogger KW - Overview</title>
		<link rel="Stylesheet" href="Style.css">
		<link rel="Stylesheet" href="fontawesome/css/font-awesome.css">
		<script src="dropdown.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="author" content="Blogger KW Team">
	</head>
	
	<body>
		<div class="page-header">
			<div class="page-header-content">
				<a href="viewpost.php" class="header-link" style="border:1px solid #fff; box-shadow:0px 0px 5px #fff;"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="createpost.php" class="header-link"><span class="fa fa-edit"></span> | Tulis Post</a>
			</div>
			<div class="page-header-brand">
				<a href="/cms/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
			</div>
		</div>
		<br><br><br><br>
		<div class="page-blog-container">
			<div class="blog-status">
				<h3 class="blog-name-title"><a class="blog-link" href="#">Nama Blog</a> | Statistik</h3>
			</div>
			<div class="blog-name">
				<h3 class="blog-name-title"><a href="#" class="blog-link">My Blog</a></h3>
			</div>
		</div>
		<hr>
		
		<div class="page-content">
		
			<div class="right-counter">
				<a class="chev-left" href="#"><span class="fa fa-chevron-circle-left"> </span> Sebelumnya</a><label class="paging-label">1</label><a class="chev-left" href="#">Selanjutnya <span class="fa fa-chevron-circle-right"></span></a>
			</div>
			
			<div class="operations">
		
				<div class="dropdown">
				<a href="javascript:void(0)" onclick="clickFunction()" class="dropdown-label" title="Berikan label"> Label &nbsp;&nbsp;<span class="fa fa-arrow-circle-right"></span></a><a class="dropdown-content" href="#" id="dropdown-link">Label Baru...</a>
				</div>
				
				<div class="op-contents">
				<input class="op-links" type="checkbox" name="checkall" title="Cek semua" /></input>&nbsp;&nbsp;<a href="publishpost.php" class="op-links">Publikasikan</a><a href="senttodraft.php" class="op-links">Tampung Ke Draft</a><a href="deletepost.php" class="op-links" title="Hapus post yang dicek">&nbsp;&nbsp;<span class="fa fa-trash-o"></span></a>
				</div>
				
			</div>
			<div class="post-display">
			<hr>
			
				<div class="post-order">
				
					<div class="post-comment">
						<b class="post-link">28/2/2016</b>
					</div>	
			
					<div class="post-owner">
						<b class="post-link" title="Total komentar"> 0 &nbsp;<span class="fa fa-comment" title="Total komentar"></span></b>
					</div>
					
					<div class="post-comment">
						<b class="post-link" title="Total pembaca"> 0 &nbsp;<span class="fa fa-eye" title="Total pembaca"></span></b>
					</div>
					
					<div class="post-viewer">
						<a href="#" class="post-link">Owner Name</a>
					</div>
				
					<div class="post-title">
						<input type="checkbox"> &nbsp; <a class="post-title-link" href="#">(Judul Post)</a>
					</div>

					<div class="post-options">
						<a class="option" href="#">Edit</a><a class="option" href="#">Lihat</a><a class="option" href="#">Hapus</a>
					</div>
					
				</div>
				
			<hr>
			</div>

		</div>

		<div class="navigation-left">
			<a class="nav-new-post-button" href="/cms/createpost.php">New Post</a>
			<div class="navigation-content">
				<a class="navigation-link" href="/cms/"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				<a class="navigation-link" href="/cms/posts.php" style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-file" id="nav-icon"></span>&nbsp;&nbsp; Postingan</a>

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