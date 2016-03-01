<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="Muhammad Rafiqi Liputo">
    <!--[if gt IE 8]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link href="<?php echo base_url(); ?>asset/webadmin/css/stylesheets.css"
    rel="stylesheet" type="text/css">
    <!--[if lte IE 7]>
      <link href="<?php echo base_url(); ?>asset/webadmin/css/ie.css" rel="stylesheet"
      type="text/css" />
      <script type='text/javascript' src='<?php echo base_url(); ?>asset/webadmin/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/jquery-migrate-1.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jquery/globalize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/other/excanvas.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/other/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/cookies/jquery.cookies.2.2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jflot/jquery.flot.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jflot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jflot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/jflot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/sparklines/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/XRegExp.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shCore.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushXml.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushJScript.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins/shbrush/shBrushCss.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/charts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/webadmin/js/actions.js"></script>
    <link rel="stylesheet" href="..\..\..\asset\webadmin\css\stylesheets.css">
    <link rel="stylesheet" href="..\..\..\asset\webadmin\css\mystyles.css">
    <link rel="stylesheet" href="..\..\..\asset\webadmin\css\styling.css">
    <link rel="stylesheet" href="..\..\..\asset\webadmin\css\opera.css">
    <link rel="stylesheet" href="..\..\..\asset\webadmin\css\stylesheets.css">
  </head>
  
  <body>
    <div class="wrapper">
      <div class="sidebar">
        <div class="top">
          <div class="search">
            <div class="input-prepend">
              <span class="add-on orange">
                <span class="icon-search icon-white"></span>
              </span>
              <input type="text" placeholder="search...">
            </div>
          </div>
        </div>
        <div class="nContainer">
          <ul class="navigation">
            <li class="active">
              <a href="<?php echo base_url(); ?>index.php/webadmin/" class="blblue">Dashboard</a>
            </li>
            <li>
              <a href="#" class="blyellow">Post</a>
              <div class="open"></div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/newcontent">Tulis Baru</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/content">Semua Post</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/contentpublish">Diterbitkan</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/contentdraft">Draft</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/webadmin/labels" class="blgreen">Label</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/webadmin/users" class="blred">User</a>
            </li>
            <li>
              <a href="#" class="bldblue">Statistik</a>
              <div class="open"></div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/statistikpost">Post</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/statistikvisitor">Visitor</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#" class="blpurple">Comment</a>
              <div class="open"></div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/listcomment">List comment</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#" class="blorange">Setting</a>
              <div class="open"></div>
              <ul>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/settingdasar">Setting dasar</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/settingprofile">Setting profile anda</a>
                </li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/webadmin/settingpassword">Setting password anda</a>
                </li>
              </ul>
            </li>
          </ul>
          <a class="close">
                    <span class="ico-remove"></span>
                </a>
        </div>
        <div class="widget">
          <div class="datepicker"></div>
        </div>
      </div>
      <div class="body">
        <div class="content">
          <div class="row-fluid">
            <div class="span7">
              <div class="block">
                <div class="row-fluid">
                  <div class="span4">
                    <div class="stat">
                      <span class="cdblue">
                        <?php echo $page_view[0][ 'totalview']; ?>
                      </span>PAGE
                      <br>VIEWS</div>
                  </div>
                  <div class="span4">
                    <div class="stat">
                      <span class="cblue">
                        <?php echo $total_post; ?>
                      </span>TOTAL
                      <br>POST</div>
                  </div>
                  <div class="span4">
                    <div class="stat">
                      <span class="corange">
                        <?php echo $total_comment; ?>
                      </span>TOTAL
                      <br>KOMENTAR</div>
                  </div>
                </div>
              </div>
              <div class="block">
                <div class="head orange">
                  <h2>Latest Orders</h2>
                  <ul class="buttons">
                    <li>
                      <a href="#" onclick="source('table_main'); return false;"><div class="icon"><span class="ico-info"></span></div></a>
                    </li>
                    <li>
                      <a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a>
                    </li>
                    <li>
                      <a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a>
                    </li>
                  </ul>
                </div>
                <div class="data-fluid">
                  <table cellpadding="0" cellspacing="0" width="100%" class="table lcnp">
                    <thead>
                      <tr>
                        <th>
                          <input type="checkbox" class="checkall">
                        </th>
                        <th>Judul Content</th>
                        <th width="20%">Counter</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($post as $p){ ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="order[]" value="528">
                        </td>
                        <td>
                          <a href="#"><?php echo $p['judul_content']; ?></a>
                        </td>
                        <td>
                          <span class="label label-important">
                            <?php echo $p['counter']; ?>
                          </span>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="span5">
              <div class="block">
                <div class="head"></div>
                <div class="data-fluid"></div>
              </div>
              <div class="block">
                <div class="head dblue">
                  <h2>Pending Comment</h2>
                  <ul class="buttons">
                    <li>
                      <a href="#" onclick="source('messages'); return false;"><div class="icon"><span class="ico-info"></span></div></a>
                    </li>
                    <li>
                      <a href="#" class="ublock"><div class="icon"><span class="ico-undo"></span></div></a>
                    </li>
                    <li>
                      <a href="#" class="cblock"><div class="icon"><span class="ico-sort"></span></div></a>
                    </li>
                  </ul>
                </div>
                <div class="data dark npr npb">
                  <div class="messages scroll" style="height: 250px;">
                    <?php foreach($comment as $c){ ?>
                    <div class="item blue">
                      <div class="arrow"></div>
                      <div class="text">
                        <?php echo $c['pengirim']; ?>
                        <br>
                        <br> <?php echo $c['isi']; ?></div>
                      <div class="date">
                        <?php echo $c[ 'tanggal']; ?>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="toolbar dark"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
  </body>

</html>