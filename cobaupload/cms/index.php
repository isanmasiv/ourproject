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
				<a href="posts.php" class="header-link"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="createpost.php" class="header-link"><span class="fa fa-edit"></span> | Tulis Post</a>
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
			<div class="updates">
				<h3 class="content-title"><span class="fa fa-circle-o-notch"></span> Perkembangan Blog</h3>
				<hr>
				<table class="content-table">
				
				<tr class="content-table-row">
				<th class="content-table-header" style="text-align:left;">Total Komentar</th>
				<td class="content-table-data">0</td>
				
				<tr class="content-table-row-style1">
				<th class="content-table-header" style="text-align:left;">Total Post</th>
				<td class="content-table-data">0</td>
				
				<tr class="content-table-row">
				<th class="content-table-header" style="text-align:left;">Total Halaman</th>
				<td class="content-table-data">0</td>
				
				<tr class="content-table-row-style1">
				<th class="content-table-header" style="text-align:left;">Total Pengikut</th>
				<td class="content-table-data">0</td>
				
				</tr>
				</table>
				<br>
				<h3 class="content-title">Panduan Blogger KW</h3><hr>
			</div>
			<div class="content-1">
				<h3 class="content-title"><span class="fa fa-bar-chart"></span> Statistik Dasar</h3>
				<hr>
				<table class="content-table">
				<tr class="content-table-row">
				<th class="content-table-header">Nama Blog</th>
				<th class="content-table-header">Pengunjung</th>
				<th class="content-table-header">Komentar</th>
				<th class="content-table-header">Pengikut</th>
				<th class="content-table-header">Total Post</th>
				</tr>
				<tr class="content-table-row-style1">
				<td class="content-table-data">Nama Blog</td>
				<td class="content-table-data">count</td>
				<td class="content-table-data">count</td>
				<td class="content-table-data">count</td>
				<td class="content-table-data">count</td>
				</tr>
				</table>
				<br>
				<h3 class="content-title"><span class="fa fa-user"></span> Visitors</h3>
				<table class="content-table-style1" border="0">
				
				<tr class="content-table-row">
				<td class="content-table-data">23 Februari</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				<tr class="content-table-row-style2">
				<td class="content-table-data">24 Februari</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				<tr class="content-table-row">
				<td class="content-table-data">25 Februari</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				<tr class="content-table-row-style2">
				<td class="content-table-data">26 Februari</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				<tr class="content-table-row">
				<td class="content-table-data">Sekarang</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				<tr class="content-table-row-style2">
				<td class="content-table-data">Total Visitor</td>
				<td class="content-table-data-result">count</td>
				</tr>
				
				</table>
				
				<div class="content-news"><br>
				<h3 class="content-title"><span class="fa fa-rss"></span> Berita Blogger KW</h3>
				<div class="news">
					<h4 class="content-title">Update Untuk Friend Connect</h4><hr>
					<p>Pada tahun 2011, Kami mengumumkan pencabutan fitur Google Friend Connect
					untuk seluruh situs non-Blogger KW
				</div>
				</div>
			</div>
			<br><br>
		</div>
		
		<div class="navigation-left">
			<a class="nav-new-post-button" href="/cms/createpost.php">New Post</a>
			<div class="navigation-content">
				<a class="navigation-link" href="javascript:void(0)"  style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
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