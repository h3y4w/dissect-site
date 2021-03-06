<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dissect</title>

    <!-- Stylesheets -->
    <link href="http://d1vbiehtemnmu1.cloudfront.net/fonts/font-awesome.min.css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/photon.min.css">
    <link rel="stylesheet" href="http://d1vbiehtemnmu1.cloudfront.net/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://d1vbiehtemnmu1.cloudfront.net/css/bootstrap.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://d1vbiehtemnmu1.cloudfront.net/js/bootstrap.min.js"></script>

    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="js/menu.js"></script>
    <script src="js.js" ></script>
  </head>
  <body>
    <div class="window">

      <!-- .toolbar-header sits at the top of your app -->
      <header class="toolbar toolbar-header">
        <h1 class="title">Dissect</h1>
      </header>

      <!-- Your app's content goes inside .window-content -->
      <div class="window-content">
        <div id="overlay"></div>
        <div class="pane-group">
          <div class="pane pane-sm sidebar">
            <nav class="nav-group">
              <h5 class="nav-group-title">Your drive</h5>
              <a href="index.html"><div id="stack"><span class="icon icon-menu"></span></div></a>
              <a href="index_grid.html"><div id="thumb"><span class="icon icon-layout"></span></div></a>


              <a href="upload">
              <span class="nav-group-item">
              <span class="icon icon-upload-cloud"></span>
                Upload
              </span></a>


              <a href="profile">
              <span class="nav-group-item">
              <span class="icon icon-user"></span>
                User
              </span></a>


              <a href="/">
              <span class="nav-group-item active">
                <span class="icon icon-home"></span>
                Drive
              </span></a>


              <a href="shared">
              <span class="nav-group-item">
                <span class="icon icon-share"></span>
                Shared
              </span></a>


              <a href="favorites">
              <span class="nav-group-item">
                <span class="icon icon-star"></span>
                Favorites
              </span></a>


              <a href="trash">
              <span class="nav-group-item">
                <span class="icon icon-trash"></span>
                Trash
              </span></a>


              <a href="settings.html">
              <span class="nav-group-item">
                <span class="icon icon-dot-3"></span>
                Settings
              </span></a>


              <a href="upgrade.html">
              <span class="nav-group-item">
                <span class="icon icon-database"></span>
                Upgrade
              </span></a>


            </nav>

          </div>

          <div class="pane row">
                            <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <title>Title</title>
                <meta name="viewport" content="width=device-width" />
                <link rel="stylesheet" href="css/style.min.css" />
                <style>
                html, body { background:#ebebeb; font-size:10px; font-family:Verdana; margin:0; padding:0; }
                #container { min-width:320px; margin:0px auto 0 auto; background:white; border-radius:0px; padding:0px; overflow:hidden; }
                #tree { float:left; min-width:319px; border-right:1px solid silver; overflow:auto; padding:0px 0; }
                #data { margin-left:320px; }
                #data textarea { margin:0; padding:0; height:100%; width:100%; border:0; background:white; display:block; line-height:18px; resize:none; }
                #data, #code { font: normal normal normal 12px/18px 'Consolas', monospace !important; }

                #tree .folder { background:url('./file_sprite.png') right bottom no-repeat; }
                #tree .file { background:url('./file_sprite.png') 0 0 no-repeat; }
                #tree .file-pdf { background-position: -32px 0 }
                #tree .file-as { background-position: -36px 0 }
                #tree .file-c { background-position: -72px -0px }
                #tree .file-iso { background-position: -108px -0px }
                #tree .file-htm, #tree .file-html, #tree .file-xml, #tree .file-xsl { background-position: -126px -0px }
                #tree .file-cf { background-position: -162px -0px }
                #tree .file-cpp { background-position: -216px -0px }
                #tree .file-cs { background-position: -236px -0px }
                #tree .file-sql { background-position: -272px -0px }
                #tree .file-xls, #tree .file-xlsx { background-position: -362px -0px }
                #tree .file-h { background-position: -488px -0px }
                #tree .file-crt, #tree .file-pem, #tree .file-cer { background-position: -452px -18px }
                #tree .file-php { background-position: -108px -18px }
                #tree .file-jpg, #tree .file-jpeg, #tree .file-png, #tree .file-gif, #tree .file-bmp { background-position: -126px -18px }
                #tree .file-ppt, #tree .file-pptx { background-position: -144px -18px }
                #tree .file-rb { background-position: -180px -18px }
                #tree .file-text, #tree .file-txt, #tree .file-md, #tree .file-log, #tree .file-htaccess { background-position: -254px -18px }
                #tree .file-doc, #tree .file-docx { background-position: -362px -18px }
                #tree .file-zip, #tree .file-gz, #tree .file-tar, #tree .file-rar { background-position: -416px -18px }
                #tree .file-js { background-position: -434px -18px }
                #tree .file-css { background-position: -144px -0px }
                #tree .file-fla { background-position: -398px -0px }
                </style>
                <div id="container" role="main">
                  <div id="tree">
                    <form id="s">
                      <input type="search" id="q" />
                      <button type="submit">Search</button>
                    </form>
                  </div>
                  <div id="data">
                    <div class="content code" style="display:none;"><textarea id="code" readonly="readonly"></textarea></div>
                    <div class="content folder" style="display:none;"></div>
                    <div class="content image" style="display:none; position:relative;"><img src="" alt="" style="display:block; position:absolute; left:50%; top:50%; padding:0; max-height:90%; max-width:90%;" /></div>
                    <div class="content default" style="text-align:center;">Select a file from the tree.</div>
                  </div>
=======
<?php include "header.php"; ?>
<html  manifest="video.appcache">
<?php include "nav.php"; ?>



<!-- Header Carousel =

    <header id="carousel-example-generic" class="carousel slide" data-ride="carousel">
// Indicators
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
</ol>

// Wrapper for slides
<div class="carousel-inner" role="listbox">
<div class="item active">
  <img src="http://placehold.it/1920x1080" alt="...">
  <div class="carousel-caption">

  </div>
</div>
<div class="item">
  <img src="http://placehold.it/1920x1080" alt="...">
  <div class="carousel-caption">
  </div>
</div>

</div>
</header>
-->




<!-- Modal Log in -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Log in</h4>
            </div>
            <div class="modal-body">
                <form method="get">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Sign up</button>
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal sign up -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Sign up</h4>
            </div>
            <div class="modal-body">
                <form method="get">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Log in</button>
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container-fluid">

    <!-- Marketing Icons Section -->
    <section id="features">
        <div class="row">
            <h2 class="page-header text-center">FEATURES</h2>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-circle" src="../img/fade.JPG">
            </div>
        </div>
        <a href="features.php" class="btn btnn btn-default hvr-sweep-to-right">Read more</a>


    </section>
    <!-- /#features -->

    <!-- Portfolio Section -->
    <section id="price">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">PRICES</h2>
            </div>
        </div>

        <div class="row pricecar">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="prices">
                        <span class="glyphicon glyphicon-user"></span>
                        <h3>Starter</h3>
                        <ul>
                            <li>500GB Cloud Storage</li>
                            <li>3 mailing account</li>
                            <li>2% discount on reference</li>
                        </ul>
                        <a href="#" class="btn btnn btn-default">Buy</a>
                    </div>

>>>>>>> 3f9d42744ff0530b7cafbf9987485c287ac24028
                </div>

                <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
                <script>
                var d = [
                    { "id" : "1", "parent" : "#", "text" : "Photos", 'rel':'folder' },
                    { 'id': '2', 'parent': '#', 'text': 'Videos'},
                    { "id" : "3", "parent" : "1", "text" : "Golden_Gate_bridge.jpg"},
                    { "id" : "6", "parent" : "1", "text" : "Golden_Gate_bridge.txt"},
                    { "id" : "4", "parent" : "2", "text" : "test.mov", 'rel': 'file' },
                    {'id': '5', 'parent': '2', 'text': 'xxx.mov'}
                  ]

            $(function () {
                  $(window).resize(function () {
                    var h = Math.max($(window).height() - 0, 420);
                    $('#container, #data, #tree, #data .content').height(h).filter('.default').css('lineHeight', h + 'px');
                  }).resize();

                  $('#tree')
                    .jstree({
                      'core' : {
                        'data' : d,
                        'check_callback' : function(o, n, p, i, m) {
                          if(m && m.dnd && m.pos !== 'i') { return false; }
                          if(o === "move_node" || o === "copy_node") {
                            if(this.get_node(n).parent === this.get_node(p).id) { return false; }
                          }
                          return true;
                        },
                        'force_text' : true,
                        'themes' : {
                          'responsive' : false,
                          'variant' : 'large',
                          'stripes' : true
                        }
                      },
                      'sort' : function(a, b) {
                        return this.get_type(a) === this.get_type(b) ? (this.get_text(a) > this.get_text(b) ? 1 : -1) : (this.get_type(a) >= this.get_type(b) ? 1 : -1);
                      },
                      'contextmenu' : {
                        'items' : function(node) {
                          var tmp = $.jstree.defaults.contextmenu.items();
                          delete tmp.create.action;
                          tmp.create.label = "New";
                          tmp.create.submenu = {
                            "create_folder" : {
                              "separator_after"	: true,
                              "label"				: "Folder",
                              "action"			: function (data) {
                                var inst = $.jstree.reference(data.reference),
                                  obj = inst.get_node(data.reference);
                                inst.create_node(obj, { type : "default" }, "last", function (new_node) {
                                  setTimeout(function () { inst.edit(new_node); },0);
                                });
                              }
                            },
                            "create_file" : {
                              "label"				: "File",
                              "action"			: function (data) {
                                var inst = $.jstree.reference(data.reference),
                                  obj = inst.get_node(data.reference);
                                inst.create_node(obj, { type : "file" }, "last", function (new_node) {
                                  setTimeout(function () { inst.edit(new_node); },0);
                                });
                              }
                            }
                          };
                          if(this.get_type(node) === "file") {
                            delete tmp.create;
                          }
                          return tmp;
                        }
                      },
                      'types' : {
                        'default' : { 'icon' : 'folder' },
                        'file' : { 'valid_children' : [], 'icon' : 'file' }
                      },
                      'unique' : {
                        'duplicate' : function (name, counter) {
                          return name + ' ' + counter;
                        }
                      },
                      'plugins' : ['state','dnd','sort','types','contextmenu','unique']
                    })
                    .on('delete_node.jstree', function (e, data) {
                      $.get('?operation=delete_node', { 'id' : data.node.id })
                        .fail(function () {
                          data.instance.refresh();
                        });
                    })
                    .on('create_node.jstree', function (e, data) {
                      $.get('?operation=create_node', { 'type' : data.node.type, 'id' : data.node.parent, 'text' : data.node.text })
                        .done(function (d) {
                          data.instance.set_id(data.node, d.id);
                        })
                        .fail(function () {
                          data.instance.refresh();
                        });
                    })
                    .on('rename_node.jstree', function (e, data) {
                      $.get('?operation=rename_node', { 'id' : data.node.id, 'text' : data.text })
                        .done(function (d) {
                          data.instance.set_id(data.node, d.id);
                        })
                        .fail(function () {
                          data.instance.refresh();
                        });
                    })
                    .on('move_node.jstree', function (e, data) {
                      $.get('?operation=move_node', { 'id' : data.node.id, 'parent' : data.parent })
                        .done(function (d) {
                          //data.instance.load_node(data.parent);
                          data.instance.refresh();
                        })
                        .fail(function () {
                          data.instance.refresh();
                        });
                    })
                    .on('copy_node.jstree', function (e, data) {
                      $.get('?operation=copy_node', { 'id' : data.original.id, 'parent' : data.parent })
                        .done(function (d) {
                          //data.instance.load_node(data.parent);
                          data.instance.refresh();
                        })
                        .fail(function () {
                          data.instance.refresh();
                        });
                    })
                    .on('changed.jstree', function (e, data) {
                      if(data && data.selected && data.selected.length) {
                        $.get('?operation=get_content&id=' + data.selected.join(':'), function (d) {
                          if(d && typeof d.type !== 'undefined') {
                            $('#data .content').hide();
                            switch(d.type) {
                              case 'text':
                              case 'txt':
                              case 'md':
                              case 'htaccess':
                              case 'log':
                              case 'sql':
                              case 'php':
                              case 'js':
                              case 'json':
                              case 'css':
                              case 'html':
                                $('#data .code').show();
                                $('#code').val(d.content);
                                break;
                              case 'png':
                              case 'jpg':
                              case 'jpeg':
                              case 'bmp':
                              case 'gif':
                                $('#data .image img').one('load', function () { $(this).css({'marginTop':'-' + $(this).height()/2 + 'px','marginLeft':'-' + $(this).width()/2 + 'px'}); }).attr('src',d.content);
                                $('#data .image').show();
                                break;
                              default:
                                $('#data .default').html(d.content).show();
                                break;
                            }
                          }
                        });
                      }
                      else {
                        $('#data .content').hide();
                        $('#data .default').html('Select a file from the tree.').show();
                      }
                    });
                });
                $("#s").submit(function(e) {
                  e.preventDefault();
                  $("#container").jstree(true).search($("#q").val());
                });
                </script>

          </div>



<<<<<<< HEAD
=======
                </div>
            </div>

            <div id="bg">
                <video id="img pricebg" width="100%" autoplay loop>
                    <source src="../img/boat.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
>>>>>>> 3f9d42744ff0530b7cafbf9987485c287ac24028


        </div>
      </div>
  </body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
