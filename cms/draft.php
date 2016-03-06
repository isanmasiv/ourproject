<!DOCTYPE Html>
<html>

	<head>
		<title>Blogger KW - Post > Draft</title>
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
				<a href="javascript:void(0)" class="header-link" style="border:1px solid #fff; box-shadow:0px 0px 5px #fff;"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="/ourproject/cms/createpost.php" class="header-link"><span class="fa fa-edit"></span> | Tulis Post</a>
			</div>
			<div class="page-header-brand">
				<a href="/ourproject/cms/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
			</div>
		</div>
		<br><br><br><br>
		<div class="page-blog-container">
			<div class="blog-status">
				<h3 class="blog-name-title"><a class="blog-link" href="#">Nama Blog</a> | Post Draft</h3>
			</div>
			<div class="blog-name">
				<h3 class="blog-name-title"><a href="#" class="blog-link">My Blog</a></h3>
			</div>
		</div>
		<hr>
		
		<div class="page-content">
		<h3>Draft</h3><hr>
		<h3 class="comment-page-content-title">Tabel Draft</h3>
		<form action="#" method="get" role="search">
			<input class="post-search" type="search" placeholder="Cari post">
		</form>
		Entri: <select class="comment-entries-view">
		<option>5</option>
		<option>10</option>
		<option>25</option>
		<option>100</option>
		</select> <br><hr>
		<table class="comment-table" border="0">
			<tr class="comment-table-row-top">
				<td class="comment-table-data"><input class="comment-table-checkbox" type="checkbox" /></td>
				<td class="comment-table-data">Judul Post</td>
				<td class="comment-table-data">Tanggal</td>
				<td class="comment-table-data">Status</td>
				<td class="comment-table-data">Penulis</td>
				<td class="comment-table-data" style="text-align:right;">Tindakan</td>
			</tr>
			
			<tr class="comment-table-row-body">
				<td class="comment-table-data-body"><input class="comment-table-checkbox" type="checkbox" /></td>
				<td class="comment-table-data-body"><a href="#" class="comment-essential">#Judul#</a></td>
				<td class="comment-table-data-body"><a href="#" class="comment-essential">#Tanggal#</a></td>
				<td class="comment-table-data-body"><label class="status-label-pending">#Status#</label></td>
				<td class="comment-table-data-body">#Penulis#</td>
				<td class="comment-table-data-body" style="text-align:right;"><a href="#" class="action-publish">Publish</a> <a href="#" class="action-delete">Hapus</a></td>
			</tr>
		</table>
		
		<div class="pager">
		<a class="pager-button" href="#">First</a> 
		<a class="pager-button" href="#">Previous</a>
		<label class="pager-button">1</label>
		<a class="pager-button" href="#">Next</a>
		<a class="pager-button" href="#">Last</a>
		</div>
		<div class="entries-view">
		<label class="entries-space">Menampilkan # - # dari # Entri<label>
		</div>
		</div>

		<div class="navigation-left">
			<a class="nav-new-post-button" href="/ourproject/cms/createpost.php">New Post</a>
			<div class="navigation-content">
				<a class="navigation-link" href="/ourproject/cms/"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				
				<div class="dropdown-post">
				<a class="navigation-link" href="javascript:void(0)" onclick="postClicked()" style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-file-text-o" id="nav-icon"></span>&nbsp;&nbsp; Post <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-post-content" id="post-content">
				<a href="/ourproject/cms/createpost.php">Tulis Baru</a>
				<a href="/ourproject/cms/posts.php">Semua Post</a>
				<a href="/ourproject/cms/published.php">Diterbitkan</a>
				<a href="/ourproject/cms/draft.php" style="background-color:rgba(0,0,0,0.1)">Draft <span class="fa fa-dot-circle-o" id="current-page" title="Post yang disimpan"></span></a>
				</div>
				</div>
				
				<a class="navigation-link" href="/ourproject/cms/label.php"><span class="fa fa-bookmark" id="nav-icon"></span>&nbsp;&nbsp; Label</a>
				<a class="navigation-link" href="/ourproject/cms/users.php"><span class="fa fa-user" id="nav-icon"></span>&nbsp;&nbsp; User</a>
				
				<div class="dropdown-statistik">
				<a class="navigation-link" href="javascript:void(0)" onclick="statistikClicked()"><span class="fa fa-bar-chart" id="nav-icon"></span>&nbsp;&nbsp; Statistik <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-statistik-content" id="statistik-content">
				<a href="/ourproject/cms/visitor.php">Pengunjung</a>
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