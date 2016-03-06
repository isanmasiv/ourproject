<!DOCTYPE Html>
<html>

	<head>
		<title>Blogger KW - Statistic > Visitor</title>
		<link rel="Stylesheet" href="Style.css">
		<link rel="Stylesheet" href="dropdowns.css">
		<link rel="Stylesheet" href="fontawesome/css/font-awesome.css">
		<script src="dropdown.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="author" content="Blogger KW Team">
	</head>
	
	<body>
		<div class="page-header">
			<div class="page-header-content">
				<a href="/ourproject/cms/posts.php" class="header-link"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="/ourproject/cms/createpost.php" class="header-link"><span class="fa fa-edit"></span> | Tulis Post</a>
			</div>
			<div class="page-header-brand">
				<a href="/ourproject/cms/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
			</div>
		</div>
		<br><br><br><br>
		<div class="page-blog-container">
			<div class="blog-status">
				<h3 class="blog-name-title"><a class="blog-link" href="#">Nama Blog</a> | Pengunjung</h3>
			</div>
			<div class="blog-name">
				<h3 class="blog-name-title"><a href="#" class="blog-link">My Blog</a></h3>
			</div>
		</div>
		<hr>
		
		<div class="page-content">
		<h3>Visitor</h3><hr>
		<div class="visitor-right">
			<h4 title="Pengunjung harian">Daily Visitor Counter</h4>
				<table class="visitor-right-table">
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">Hari ini</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">kemarin</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">Bulan ini</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">Tahun ini</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">Total keseluruhan</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
				</table>
		</div>
		
		<div class="visitor-left">
			<h4 title="Pengunjung berdasarkan postingan">Post Visitor Counter</h4>
				<table class="visitor-right-table">
					<tr class="visitor-right-table-row">
						<th class="visitor-right-table-header">Post Title</th>
						<td class="visitor-right-table-data">0 Visit</td>
					</tr>
				</table>
		</div>
		</div>
		
		<div class="navigation-left">
			<a class="nav-new-post-button" href="/ourproject/cms/">Dashboard</a>
			<div class="navigation-content">
				<a class="navigation-link" href="/ourproject/cms/"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				
				<div class="dropdown-post">
				<a class="navigation-link" href="javascript:void(0)" onclick="postClicked()"><span class="fa fa-file-text-o" id="nav-icon"></span>&nbsp;&nbsp; Post <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-post-content" id="post-content">
				<a href="/ourproject/cms/createpost.php">Tulis Baru</a>
				<a href="/ourproject/cms/posts.php">Semua Post</a>
				<a href="/ourproject/cms/published.php">Diterbitkan</a>
				<a href="/ourproject/cms/draft.php">Draft</a>
				</div>
				</div>
				
				<a class="navigation-link" href="/ourproject/cms/label.php"><span class="fa fa-bookmark" id="nav-icon"></span>&nbsp;&nbsp; Label</a>
				<a class="navigation-link" href="/ourproject/cms/users.php"><span class="fa fa-user" id="nav-icon"></span>&nbsp;&nbsp; User</a>
				
				<div class="dropdown-statistik">
				<a class="navigation-link" href="javascript:void(0)" onclick="statistikClicked()" style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-bar-chart" id="nav-icon"></span>&nbsp;&nbsp; Statistik <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-statistik-content" id="statistik-content">
				<a href="javascript:void(0)" style="background-color:rgba(0,0,0,0.1)">Pengunjung <span class="fa fa-dot-circle-o" id="current-page" title="Pantau pengunjung"></span></a>
				</div>
				</div>
				
				<div class="dropdown-comment">
				<a class="navigation-link" href="javascript:void(0)" onclick="commentClicked()"><span class="fa fa-comment" id="nav-icon"></span>&nbsp;&nbsp; Comment <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-comment-content" id="comment-content">
				<a href="/ourproject/cms/comments.php">List Comment</a>
				</div>
				</div>
				
				<div class="dropdown-setting">
				<a class="navigation-link" href="javascript:void(0)" onclick="settingClicked()"><span class="fa fa-cogs" id="nav-icon"></span>&nbsp;&nbsp; Setting <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-setting-content" id="setting-content">
				<a href="/ourproject/cms/general-settings.php">Setting Dasar</a>
				<a href="/ourproject/cms/profile-settings.php">Setting Profil</a>
				<a href="/ourproject/cms/pass-settings.php">Setting Password</a>
				</div>
				</div>
				
			</div>
		</div>
	</body>
</html>