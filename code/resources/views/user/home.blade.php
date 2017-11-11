<?php
/**
 * Created by PhpStorm.
 * User: darxan
 * Date: 2017/10/25
 * Time: 10:17
 */
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Profile with tabs like facebook page - Bootdey.com</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="../js/jquery.min.js"></script>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <style type="text/css">
                body{margin-top:20px;
                    background:#eee;
                }

                .divider {
                    height: 20px;
                    display: block;
                }

                /* ========================================================================
                 * FORM MISC
                 * ======================================================================== */
                .input-group-addon {
                    -moz-border-radius: 0px;
                    -webkit-border-radius: 0px;
                    border-radius: 0px;
                    min-width: 39px;
                }
                .input-group-addon .ckbox, .input-group-addon .rdio {
                    position: absolute;
                    top: 4px;
                    left: 10px;
                }

                .input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
                    -moz-border-radius: 0px;
                    -webkit-border-radius: 0px;
                    border-radius: 0px;
                }

                .input-sm, .form-group-sm .form-control {
                    -moz-border-radius: 0px;
                    -webkit-border-radius: 0px;
                    border-radius: 0px;
                }

                .form-control {
                    -moz-border-radius: 0px;
                    -webkit-border-radius: 0px;
                    border-radius: 0px;
                    -moz-box-shadow: none;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                @media (max-width: 640px) {
                    .form-inner-all [class*="col-"]:last-child .form-control {
                        margin-top: 15px;
                    }
                }


                /* ========================================================================
                 * PROFILE
                 * ======================================================================== */
                .profile-cover {
                    width: 100%;
                }
                .profile-cover .cover {
                    position: relative;
                    border: 10px solid #FFF;
                }
                .profile-cover .cover .inner-cover {
                    overflow: hidden;
                    height: auto;
                }
                .profile-cover .cover .inner-cover img {
                    border: 1px solid transparent;
                    text-align: center;
                    width: 100%;
                }
                .profile-cover .cover .inner-cover .cover-menu-mobile {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                }
                .profile-cover .cover .inner-cover .cover-menu-mobile button i {
                    font-size: 17px;
                }
                .profile-cover .cover ul.cover-menu {
                    padding-left: 150px;
                    position: absolute;
                    overflow: hidden;
                    left: 1px;
                    float: left;
                    bottom: 0px;
                    width: 100%;
                    margin: 0px;
                    background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
                }
                .profile-cover .cover ul.cover-menu li {
                    display: block;
                    float: left;
                    margin-right: 0px;
                    padding: 0px 10px;
                    line-height: 40px;
                    height: 40px;
                    -moz-transition: all 0.3s;
                    -o-transition: all 0.3s;
                    -webkit-transition: all 0.3s;
                    transition: all 0.3s;
                }
                .profile-cover .cover ul.cover-menu li:hover {
                    background-color: rgba(0, 0, 0, 0.44);
                }
                .profile-cover .cover ul.cover-menu li.active {
                    background-color: rgba(0, 0, 0, 0.64);
                }
                .profile-cover .cover ul.cover-menu li a {
                    color: #FFF;
                    font-weight: bold;
                    display: block;
                    height: 40px;
                    line-height: 40px;
                    text-decoration: none;
                }
                .profile-cover .cover ul.cover-menu li a i {
                    font-size: 18px;
                }
                .profile-cover .profile-body {
                    margin: 0px auto 10px;
                    position: relative;
                }
                .profile-cover .profile-timeline {
                    padding: 15px;
                }
                .img-post{
                    width:30px;
                    height:30px;
                }
                .img-post2{
                    width:50px;
                    height:50px;
                }
            </style>
            <link href="../css/upload.css" rel="stylesheet">
            <script src="../js/upload.js"></script>
        </head>
        <body>

        <div class="container bootstrap snippets">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="panel rounded shadow">
                        <div class="panel-body">
                            <div class="inner-all">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <img data-no-retina="" class="img-circle img-responsive img-bordered-primary" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="John Doe">
                                    </li>
                                    <li class="text-center">
                                        <h4 class="text-capitalize">John Doe</h4>
                                        <p class="text-muted text-capitalize">web designer</p>
                                    </li>
                                    <li>
                                        <a href="" class="btn btn-success text-center btn-block">PRO Account</a>
                                    </li>
                                    <li><br></li>
                                    <li>
                                        <div class="btn-group-vertical btn-block">
                                            <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
                                            <a href="" class="btn btn-default"><i class="fa fa-sign-out pull-right"></i>Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.panel -->

                    <div class="panel panel-theme rounded shadow">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">Contact</h3>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body no-padding rounded">
                            <ul class="list-group no-margin">
                                <li class="list-group-item"><i class="fa fa-envelope mr-5"></i> support@bootdey.com</li>
                                <li class="list-group-item"><i class="fa fa-globe mr-5"></i> www.bootdey.com</li>
                                <li class="list-group-item"><i class="fa fa-phone mr-5"></i> +6281 903 xxx xxx</li>
                            </ul>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->

                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 tabs-wrapper">
                    <div class="profile-cover">
                        <div class="cover rounded shadow no-overflow">
                            <div class="inner-cover">
                                <!-- Start offcanvas btn group menu: This menu will take position at the top of profile cover (mobile only). -->
                                <div class="btn-group cover-menu-mobile hidden-lg hidden-md">
                                    <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right no-border nav nav-tabs" role="menu">
                                        <li class="active">
                                            <a href="#tab-moments" data-toggle="tab">
                                                <i class="fa fa-fw fa-clock-o"></i>
                                                <span>moments</span>
                                            </a>
                                        </li>
                                        <li><a href="#tab-recommend" data-toggle="tab"><i class="fa fa-fw fa-refresh"></i> <span>recommend</span></a></li>
                                        <li><a href="#tab-friends" data-toggle="tab"><i class="fa fa-fw fa-user"></i> <span>Friends</span></a></li>
                                        <li><a href="#tab-activity" data-toggle="tab"><i class="fa fa-fw fa-photo"></i> <span>Activities</span> <small></small></a></li>
                                        <li><a href="#tab-photo" data-toggle="tab"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small></small></a></li>
                                        <li><a href="#tab-album" data-toggle="tab"><i class="fa fa-fw fa-folder-open-o"></i> <span>Albums</span> <small></small></a></li>
                                    </ul>
                                </div>
                                <img  src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" class="img-responsive full-width" alt="cover" style="max-height:200px;">
                            </div>
                            <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
                                <li class="active">
                                    <a href="#tab-moments" data-toggle="tab">
                                        <i class="fa fa-fw fa-clock-o"></i>
                                        <span>moments</span>
                                    </a>
                                </li>
                                <li><a href="#tab-recommend" data-toggle="tab"><i class="fa fa-fw fa-refresh"></i> <span>recommend</span></a></li>
                                <li><a href="#tab-friends" data-toggle="tab"><i class="fa fa-fw fa-user"></i> <span>Friends</span></a></li>
                                <li><a href="#tab-activity" data-toggle="tab"><i class="fa fa-fw fa-photo"></i> <span>Activities</span> <small></small></a></li>
                                <li><a href="#tab-photo" data-toggle="tab"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small></small></a></li>
                                <li><a href="#tab-album" data-toggle="tab"><i class="fa fa-fw fa-folder-open-o"></i> <span>Albums</span> <small></small></a></li>

                            </ul>
                        </div><!-- /.cover -->
                    </div><!-- /.profile-cover -->
                    <div class="divider"></div>

                    <div class="tab-content tab-content-body">

                        <div class="row clearfix tab-pane fade  active in" id="tab-photo">
                            <br/>
                            <div class="col-md-6 " >
                                <div class="panel panel-success rounded shadow">
                                    <div class="panel-heading no-border">
                                        <div class="pull-left half">
                                            <div class="media">
                                                <div class="media-object pull-left">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="..." class="img-circle img-post">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading block mb-0 h4 text-white">John Doe</a>
                                                    <span class="text-white h6">on 8th June, 2014</span>
                                                </div>
                                            </div>
                                        </div><!-- /.pull-left -->
                                        <div class="pull-right">
                                            <a href="#" class="text-white h4"><i class="fa fa-heart"></i> 15.5K</a>
                                        </div><!-- /.pull-right -->
                                        <div class="clearfix"></div>
                                    </div><!-- /.panel-heading -->
                                    <div class="panel-body no-padding">
                                        <img  src="https://lorempixel.com/340/210/nature/4/" alt="..." class="img-responsive full-width">
                                        <div class="inner-all block">
                                            view all <a href="#">7 comments</a>
                                        </div><!-- /.inner-all -->
                                        <div class="line no-margin"></div><!-- /.line -->
                                        <div class="media inner-all no-margin">
                                            <div class="pull-left">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="img-post2">
                                            </div><!-- /.pull-left -->
                                            <div class="media-body">
                                                <a href="#" class="h4">John Doe</a>
                                                <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
                                                <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                        <div class="line no-margin"></div><!-- /.line -->
                                        <div class="media inner-all no-margin">
                                            <div class="pull-left">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="..." class="img-post2">
                                            </div><!-- /.pull-left -->
                                            <div class="media-body">
                                                <a href="#" class="h4">John Doe</a>
                                                <small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
                                                <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div><!-- /.panel-body -->
                                    <div class="panel-footer">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-group has-feedback no-margin">
                                                <input class="form-control" type="text" placeholder="Your comment here...">
                                                <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                            </div>
                                        </form>
                                    </div><!-- /.panel-footer -->
                                </div><!-- /.panel -->
                            </div>
                        </div>
                        <div class="row clearfix tab-pane fade" id="tab-recommend">
                            <br/>
                            recommend here
                        </div>
                        <div class="row clearfix tab-pane fade" id="tab-friends">
                            <br/>
                            <ul class="widget-users row">
                                <li class="col-md-6">
                                    <div class="img">
                                        <img class="img-thumbnail" src="https://lorempixel.com/400/400/people/1/" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Scarlett Johansson</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 5 minutes ago
                                        </div>
                                        <div class="type">
                                            <span class="label label-danger">Admin</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img class="img-thumbnail" src="https://lorempixel.com/400/400/people/2/" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img class="img-thumbnail" src="https://lorempixel.com/400/400/people/3/" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img class="img-thumbnail" src="https://lorempixel.com/400/400/people/4/" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Robert Downey Jr.</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: Thursday
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img  class="img-thumbnail" src="https://lorempixel.com/400/400/people/5/" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Emma Watson</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 1 week ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img  class="img-thumbnail" src="https://lorempixel.com/400/400/people/6/"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">George Clooney</a>
                                        </div>
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i> Last online: 1 month ago
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img  class="img-thumbnail" src="https://lorempixel.com/400/400/people/6/"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Mila Kunis</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                        <div class="type">
                                            <span class="label label-warning">Pending</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="img">
                                        <img  class="img-thumbnail" src="https://lorempixel.com/400/400/people/7/"  alt="">
                                    </div>
                                    <div class="details">
                                        <div class="name">
                                            <a href="#">Ryan Gossling</a>
                                        </div>
                                        <div class="time online">
                                            <i class="fa fa-check-circle"></i> Online
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <br>
                            <a href="#" class="btn btn-success pull-right">View all users</a>
                        </div>
                        <div class="row clearfix tab-pane fade" id="tab-activity">
                            <div class="panel rounded shadow">
                                <form method="get" action="../activity/post">
                                    <textarea class="form-control input-lg no-border" rows="1" placeholder="input activity title here..."></textarea>
                                    <input class="form-control input-lg no-border" type="datetime-local" placeholder="input activity time">
                                    <textarea class="form-control input-lg no-border" rows="2" placeholder="input activity description here..."></textarea>
                                </form>
                                <div class="panel-footer">
                                    <button class="btn btn-success pull-right mt-5">POST</button>
                                    <ul class="nav nav-pills">
                                        <li><a href="#" ><i class="fa fa-user"></i></a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                        <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                        <li><a href="#"><i class="fa fa-smile-o"></i></a></li>
                                    </ul><!-- /.nav nav-pills -->
                                </div><!-- /.panel-footer -->
                            </div><!-- /.panel -->
                        </div>
                        <div class="row clearfix tab-pane fade" id="tab-album">
                            <div class="panel rounded shadow">
                                <form method="get" action="../album/create">
                                    <input class="form-control input-lg no-border" name="title" rows="1" placeholder="input album title here...">
                                    <input class="form-control input-lg no-border" name="description" rows="2" placeholder="input album description here...">
                                    <div class="panel-footer">
                                        <input type="submit" class="btn btn-success pull-right mt-5">
                                        <ul class="nav nav-pills">
                                            <li><a href="#" ><i class="fa fa-user"></i></a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                            <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                            <li><a href="#"><i class="fa fa-smile-o"></i></a></li>
                                        </ul><!-- /.nav nav-pills -->
                                    </div><!-- /.panel-footer -->
                                </form>

                            </div><!-- /.panel -->
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">开始演示模态框</button>
                        </div>
                        <div class="row clearfix tab-pane fade" id="tab-moments">
                            moments here
                        </div>

                    </div>


                </div>
            </div>

            <div>
                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp">
                        </span>
                    </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <img id='img-upload'/>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>

        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">

        </script>
        </body>
        </html>
