<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>/asset/costum.css" rel="stylesheet" type="text/css">
    </head>
	<body>
 <?php include_once("./in/kepala.php"); ?>
        <div class="section">
            <div class="row">
                <div class="col-md-3">
               
			   
			   <?php include_once("./in/kirihtml.php"); ?>
			   
                </div>
				 
				
                <div class="col-md-7 well">
                     <?php foreach($content as $c){ ?>
 
 
  
            <div class="entry single-entry">
              
               
                <div class="entry-text">
                    <a href="#">
                        <h3 class="content-green-hover no-margin text-bold"><?php echo $c['judul_content']; ?></h3>
                    </a>
                 
					 <hr>
                    <p><?php echo $c['content']; ?></p>
                    
                </div>
            </div>
 
		 

           
		 
                </div>
					 
            
		 
   
 <?php } ?>

					 
			
					 
 
                <div class="col-md-2">
				   <div class="panel-body">
                       <div class="widget widget_recent_entries">
					   
							<div class="list-group">
							<?php foreach($recent_post as $r){ ?>
									<a href="<?php echo base_url(); ?>./artikel.php/tutorial-<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $r['judul_content']))).'-'.$r['kode_content']; ?>" class="list-group-item">
									<h4 class="list-group-item-heading"><?php echo $r['judul_content']; ?></h4>
									 
									</a>
									<?php } ?>
                  
							</div>
                    
					
                  
					
					
			 
				
				
                </div>
                </div>
                </div>
            </div>
        </div><footer class="section section-primary"> <div class="container"> <div class="row"> <div class="col-sm-6"> <h1>Footer header</h1> <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud</p></div><div class="col-sm-6"> <p class="text-info text-right"> <br><br></p><div class="row"> <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div><div class="row"> <div class="col-md-12 hidden-xs text-right"> <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a> <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> </div></div></div></div></div></footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bs_leftnavi.css">
        <script src="<?php echo base_url(); ?>/asset/js/bs_leftnavi.js"></script>
    

</body></html>