<!DOCTYPE Html>
<html>

	<head>
		<title>Blogger KW - Post > Write Post</title>
		<link rel="Stylesheet" href="Style.css">
		<link rel="Stylesheet" href="dropdowns.css">
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
				<a href="/ourproject/cms/posts.php" class="header-link"><span class="fa fa-folder-o fa-1x"></span> | Lihat Post</a><a href="javascript:void(0)" class="header-link" target="_blank"><span class="fa fa-eye"></span> | Lihat Blog</a><a href="javascript:void(0)" class="header-link" style="border:1px solid #fff; box-shadow:0px 0px 5px #fff;"><span class="fa fa-edit"></span> | Tulis Post</a>
			</div>
			<div class="page-header-brand">
				<a href="/ourproject/cms/" class="header-brand"><span class="fa fa-github fa-spin fa-1x"></span>  Blogger KW</a>
			</div>
		</div>
		<br><br><br><br>
		<div class="page-blog-container">
			<div class="blog-status">
				<h3 class="blog-name-title"><a class="blog-link" href="#">Nama Blog</a> | Tulis Post</h3>
			</div>
			<div class="blog-name">
				<h3 class="blog-name-title"><a href="#" class="blog-link">My Blog</a></h3>
			</div>
		</div>
		<hr>
		
	<div class="page-content">
		<h3>Tulis Post</h3><hr><br>
		<form class="statistik-form" action="#">
			<div class="right-inputs-group">
				<label>Status:</label><br>
				<select class="input-select">
				<option>Publish</option>
				<option>Draft</option>
				</select><br><br>
				<label>Label:</label><br>
				<input name="label" class="post-title-input" type="text" required="required" placeholder="Beri Label" /><br><br>
				<label>Tag:</label><br>
				<input name="tag" class="post-title-input" type="text" required="required" placeholder="Beri Tag" /><br><br>
			</div>
			
			<div class="left-inputs-group">
				<label>Judul Post:</label><br>
				<input name="title" class="post-title-input" type="text" required="required" placeholder="Judul Post" /><br><br>
				<label>Header Post:</label><br>
				<input name="header" class="post-title-input" type="file" /><br><br>
				<label>Deskripsi:</label><br>
				<textarea name="description" rows="8" placeholder="Deskripsi untuk Google"></textarea><br><br>
			</div>
			
			<hr>
			<div class="texteditor">
			<br>
			<h3>Tulis Post</h3>
			<textarea name="article" class="ckeditor"></textarea>
			<br>
			<button class="post-button" type="submit">Publikasikan</button><button class="post-button" type="submit">Tampilan Hasil</button><button class="post-button" type="submit">Simpan</button>
		</div>
		</form>
	</div>
		
		<div class="navigation-left">
			<a class="nav-new-post-button" href="/ourproject/cms/">Dashboard</a>
			<div class="navigation-content">
				<a class="navigation-link" href="/ourproject/cms/"><span class="fa fa-home" id="nav-icon"></span>&nbsp;&nbsp; Dashboard</a>
				
				<div class="dropdown-post">
				<a class="navigation-link" href="javascript:void(0)" onclick="postClicked()" style="background-color:rgba(0,0,0,0.1)"><span class="fa fa-file-text-o" id="nav-icon"></span>&nbsp;&nbsp; Post <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-post-content" id="post-content">
				<a href="/ourproject/cms/createpost.php" style="background-color:rgba(0,0,0,0.1)">Tulis Baru <span class="fa fa-dot-circle-o" id="current-page" title="Buat post baru"></span></a>
				<a href="/ourproject/cms/posts.php">Semua Post</a>
				<a href="/ourproject/cms/published.php">Diterbitkan</a>
				<a href="/ourproject/cms/draft.php">Draft</a>
				</div>
				</div>
				
				<a class="navigation-link" href="/ourproject/cms/label.php"><span class="fa fa-bookmark" id="nav-icon"></span>&nbsp;&nbsp; Label</a>
				<a class="navigation-link" href="/ourproject/cms/users.php""><span class="fa fa-user" id="nav-icon"></span>&nbsp;&nbsp; User</a>
				
				<div class="dropdown-statistik">
				<a class="navigation-link" href="javascript:void(0)" onclick="statistikClicked()"><span class="fa fa-bar-chart" id="nav-icon"></span>&nbsp;&nbsp; Statistik <span class="fa fa-sort-desc" id="nav-dd"></span></a>
				<div class="dropdown-statistik-content" id="statistik-content">
				<a href="/ourproject/cms/visitor.php">Pengunjung</a>
				</div>
				</div>
				
				<div class="dropdown-comment">
				<a class="navigation-link" href="javascript:void(0)" onclick="commentClicked()"><span class="fa fa-comments" id="nav-icon"></span>&nbsp;&nbsp; Comment <span class="fa fa-sort-desc" id="nav-dd"></span></a>
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