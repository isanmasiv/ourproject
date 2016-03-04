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
				<a href="/ourproject/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
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
		<div class="visitor-content-title">
		<h2 class="visitor-content-title-h2">View Days</h2>
		<hr>
		
		<div class="visitor-stats-box">
		<table class="visitor-table" cellpadding="1" border="1">
		
		<tr class="visitor-table-row">
		<td class="visitor-table-head">Hari ini</td>
		<td class="visitor-table-data">0</td>
		</tr>
		
		<tr class="visitor-table-row">
		<td class="visitor-table-head">Kemarin</td>
		<td class="visitor-table-data">0</td>
		</tr>
		
		<tr class="visitor-table-row">
		<td class="visitor-table-head">Bulan ini</td>
		<td class="visitor-table-data">0</td>
		</tr>
		
		<tr class="visitor-table-row">
		<td class="visitor-table-head">Tahun ini</td>
		<td class="visitor-table-data">0</td>
		</tr>
		
		<tr class="visitor-table-row">
		<td class="visitor-table-head">Sepanjang waktu</td>
		<td class="visitor-table-data">0</td>
		</tr>
		</table>
		
		</div>
		</div>
		</div>
		
		<div class="navigation-left">
			<a class="nav-new-post-button" href="/ourproject/cms/createpost.php">New Post</a>
			<div class="navigation-content">
				<a class="navigation-link" href="javascript:void(0)"  style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				<a class="navigation-link" href="/ourproject/cms/posts.php"><span class="fa fa-file" id="nav-icon"></span>&nbsp;&nbsp; Post</a>
				<a class="navigation-link" href="/ourproject/cms/posts.php"><span class="fa fa-bookmark-o" id="nav-icon"></span>&nbsp;&nbsp; Label</a>
				<a class="navigation-link" href="/ourproject/cms/posts.php"><span class="fa fa-user" id="nav-icon"></span>&nbsp;&nbsp; User</a>
				
				<div class="dropdown-statistik">
				<a class="navigation-link" href="javascript:void(0)" onclick="halamanClicked()"><span class="fa fa-file-text-o" id="nav-icon"></span>&nbsp;&nbsp; Statistik</a>
				<div class="dropdown-statistik-content" id="hlmctnt">
				<a href="#">Visitor</a>
				</div>
				</div>
				
				<a class="navigation-link" href="/ourproject/cms/posts.php"><span class="fa fa-comment" id="nav-icon"></span>&nbsp;&nbsp; Comment</a>
				<a class="navigation-link" href="#"><span class="fa fa-cogs" id="nav-icon"></span>&nbsp;&nbsp; Setting</a>
			</div>
		</div>
	</body>
</html>