﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title>TaskTracker | Dashboard</title>

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/mouldifi-forms.css" rel="stylesheet">

<link href="css/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet">

<link href="css/plugins/select2/select2.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
    <script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

    <!-- Page Sidebar -->
    <div class="page-sidebar">
    
        <!-- Site header  -->
        <header class="site-header">
          <div class="site-logo">
            <h1>TaskTracker<?= $_SESSION['userID'] ?></h1></div>
          <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
          <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
        </header>
        <!-- /site header -->
        
        <!-- Main navigation -->
        <ul id="side-nav" class="main-menu navbar-collapse collapse">
            <li class="has-sub active "><a href="index.html"><i class="icon-gauge"></i><span class="title">Dashboard</span></a>
                
            </li>
        </ul>
        <!-- /main navigation -->       
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
        <!-- Main header -->
        <div class="main-header row">
          <div class="col-sm-6 col-xs-7">
          
            <!-- User info -->
            <ul class="user-info pull-left">          
              <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="images/man-3.jpg">John Henderson <span class="caret"></span></a>
              
                <!-- User action menu -->
                <ul class="dropdown-menu">
                  
                  <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
                  <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
                  <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
                  <li><a href="/logout"><i class="icon-logout"></i>Logout</a></li>
                </ul>
                <!-- /user action menu -->
                
              </li>
            </ul>
            <!-- /user info -->
            
          </div>
          
          <div class="col-sm-6 col-xs-5">
            <div class="pull-right">
                <!-- User alerts -->
                <ul class="user-info pull-left">
                
                  <!-- Notifications -->
                  <li class="notifications dropdown">
                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
                    <ul class="dropdown-menu pull-right">
                        <li class="first">
                            <div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
                        </li>
                        <li>
                            <ul class="dropdown-list">
                                <li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
                                <li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
                                <li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                                <li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
                            </ul>
                        </li>
                        <li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
                    </ul>
                  </li>
                  <!-- /notifications -->
                  
                  <!-- Messages -->
                  <li class="notifications dropdown">
                    <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
                    <ul class="dropdown-menu pull-right">
                        <li class="first">
                            <div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
                        </li>
                        <li>
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Domnic Brown</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>
                                        <span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="images/john-smith.png"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">John Smith</span>
                                            <span class="media-annotation pull-right">12:30</span>
                                        </a>
                                        <span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="images/stella-johnson.png"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Stella Johnson</span>
                                            <span class="media-annotation pull-right">2 days ago</span>
                                        </a>
                                        <span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="images/alex-dolgove.png"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Alex Dolgove</span>
                                            <span class="media-annotation pull-right">10:45</span>
                                        </a>
                                        <span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
                                    <div class="media-body">
                                        <a class="media-heading" href="#">
                                            <span class="text-semibold">Domnic Brown</span>
                                            <span class="media-annotation pull-right">4:00</span>
                                        </a>
                                        <span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
                    </ul>
                  </li>
                  <!-- /messages -->
                  
                </ul>
                <!-- /user alerts -->
                
            </div>
          </div>
        </div>
        <!-- /main header -->
        
        <!-- Main content -->
        <div class="main-content">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#newtask">+ New Task</button>
                <!--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Show me</button> -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel minimal panel-default">
                                <div class="panel-heading clearfix"> 
                                    <div class="panel-title">Tasks Completed</div> 
                                    <ul class="panel-tool-options"> 
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                            </ul>
                                         </li>
                                    </ul> 
                                </div> 
                                <!-- panel body --> 
                                <div class="panel-body">
                                    <div class="row col-with-divider">
                                        <div class="col-xs-6 text-center stack-order"> 
                                            <h1 class="no-margins">87</h1>
                                            <small>This week</small>
                                        </div>
                                        <div class="col-xs-6 text-center stack-order"> 
                                            <h1 class="no-margins">53</h1>
                                            <small>Last week</small>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel minimal panel-default">
                                <div class="panel-heading clearfix"> 
                                    <div class="panel-title">Last month tasks completed</div> 
                                    <ul class="panel-tool-options"> 
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                            </ul>
                                         </li>
                                    </ul>  
                                </div> 
                                <!-- panel body --> 
                                <div class="panel-body"> 
                                    <div class="stack-order">
                                        <h1 class="no-margins">$87,003</h1>
                                        <small>Raised from 89 orders.</small>
                                    </div>
                                    <div class="bar-chart-icon"></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel minimal panel-default">
                                <div class="panel-heading clearfix"> 
                                    <div class="panel-title">New</div> 
                                    <ul class="panel-tool-options"> 
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                            </ul>
                                         </li>
                                    </ul>  
                                </div> 
                                <!-- panel body --> 
                                <div class="panel-body">
                                    <div class="stack-order">
                                        <h1 class="no-margins">823</h1>
                                        <small>New tasks created this month</small>
                                    </div>
                                    <div class="bar-chart-icon"></div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel minimal panel-default">
                                <div class="panel-heading no-border clearfix"> 
                                    <ul class="panel-tool-options"> 
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                            </ul>
                                         </li>
                                    </ul>  
                                </div> 
                                <!-- panel body --> 
                                <div class="panel-body panel-content"> 
                                    <div class="stack-order text-center">
                                        <h1>7856</h1>
                                        <h4>Tasks Completed so far</h4>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Recent comments from customers</h2>
                                    <ul class="comments-list removeable-list">
                                        <li>
                                            <div class="comment-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
                                            <div class="comment-text">
                                                <p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
                                            </div>
                                            <div class="comment-footer">
                                                <button class="btn btn-sm btn-success">APPROVE</button>
                                                <button class="btn btn-sm btn-red">DELETE</button>
                                            </div>
                                            <a href="#/" class="remove"><img src="images/icon-close.png" alt="Remove" title="Remove"></a>
                                        </li>
                                        <li>
                                            <div class="comment-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
                                            <div class="comment-text">
                                                <p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
                                            </div>
                                            <div class="comment-footer">
                                                <button class="btn btn-sm btn-success">APPROVE</button>
                                                <button class="btn btn-sm btn-red">DELETE</button>
                                            </div>
                                            <a href="#/" class="remove"><img src="images/icon-close.png" alt="Remove" title="Remove"></a>
                                        </li>
                                        <li>
                                            <div class="comment-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
                                            <div class="comment-text">
                                                <p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
                                            </div>
                                            <div class="comment-footer">
                                                <button class="btn btn-sm btn-success">APPROVE</button>
                                                <button class="btn btn-sm btn-red">DELETE</button>
                                            </div>
                                            <a href="#/" class="remove"><img src="images/icon-close.png" alt="Remove" title="Remove"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading no-border clearfix"> 
                                    <h3 class="panel-title">VISIT STATS</h3>
                                    <ul class="panel-tool-options"> 
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                            </ul>
                                         </li>
                                    </ul> 
                                </div> 
                                <!-- panel body --> 
                                <div class="panel-body"> 
                                    <div class="canvas-chart has-doughnut-legend">
                                        <canvas id="doughnutChart" width="408" height="300"></canvas>
                                    </div>
                                    <div class="height-13"></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel-group">
                        <div class="panel panel-invert">
                            <div class="panel-heading no-border clearfix"> 
                                <h2 class="panel-title">Revenue</h2>
                                <ul class="panel-tool-options"> 
                                    <li><a href="#" id="Revenuelines"><i class="icon-chart-line icon-2x"></i></a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                            <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                            <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                        </ul>
                                     </li>
                                </ul> 
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div id="Revenue-lines" class="flot-chart-content"></div>
                                </div>
                                <div id="placeholder_overview" style="width:100%; height:60px;"></div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="panel-update-content">
                                    <div class="row-revenue clearfix">
                                        <div class="col-xs-6">
                                            <h5>Gross Revenue</h5>
                                            <h1>9,362.74</h1>
                                        </div>
                                        <div class="col-xs-6">
                                            <h5>Net Revenue</h5>
                                            <h1>6,734.89</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default no-border">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">Latest Activities</h2>
                            <ul class="panel-tool-options"> 
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                    </ul>
                                 </li>
                            </ul>
                        </div>   
                        <div class="panel-body">
                            <ul class="list-item">
                                <li>
                                    <div class="feed-element">
                                        <div class="feed-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
                                        <div class="feed-content">
                                            <p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
                                        </div>  
                                    </div>
                                </li>
                                <li>
                                    <div class="feed-element">
                                        <div class="feed-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
                                        <div class="feed-content">
                                            <p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
                                        </div>  
                                    </div>
                                </li>
                                <li>
                                    <div class="feed-element">
                                        <div class="feed-head"><a href="#/">Morrise</a> added 3 new photos to the gallery <a href="#/">Australia Trip</a></div>
                                        <div class="feed-content">
                                            <div class="media-inline">
                                                <img src="images/media-1.jpg" alt="Media" title="Media">
                                                <img src="images/media-2.jpg" alt="Media" title="Media">
                                                <img src="images/media-3.jpg" alt="Media" title="Media">
                                            </div>
                                        </div>  
                                    </div>
                                </li>
                                <li>
                                    <div class="feed-element">
                                        <div class="feed-head"><a href="#/">Stella Johnson</a> is now connected with <a href="#/">Tom Brown</a></div>
                                        <div class="feed-content">
                                            <div class="connected-users">
                                                <img class="pull-left img-circle avatar" src="images/stella-johnson.png" alt="">
                                                <i class="pull-left icon-shareable icon-2x"></i>
                                                <img class="pull-left img-circle avatar" src="images/man-3.jpg" alt="">
                                            </div>
                                        </div>  
                                    </div>
                                </li>
                                <li>
                                    <div class="feed-element">
                                        <div class="feed-head"><a href="#/">Domnic</a> is feeling <a href="#/">blessed</a></div>
                                        <div class="feed-content">
                                            <p>Today I’m blessed with a baby girl. Its not easy to express the feelings :)</p>
                                        </div>  
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-primary btn-block btn-2x">SHOW MORE</button>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="speed-analyzer">
                                <div class="speed-analyzer-text">
                                    <h4>Download Speed Analyzer</h4>
                                    <p>Speed test run on different anlayzers including google and YSlow.</p>
                                </div>
                                <div class="speed-score">
                                    <strong class="score">82</strong>
                                    <span class="uppercase">Google Score</span>
                                </div>
                                <div class="speed-score">
                                    <strong class="score">73</strong>
                                    <span class="uppercase">YSlow Score</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">TO-DOs for today</h2>
                            <ul class="panel-tool-options"> 
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                    </ul>
                                 </li>
                            </ul> 
                        </div> 
                        <!-- panel body --> 
                        <div class="panel-body">
                            <ul class="list-item todo-list"> 
                                <li> 
                                    <div class="checkbox checkbox-replace checkbox-primary"> 
                                        <input type="checkbox" id="task-1" /> <label for="task-1">Fresh look &amp; feel to repaint the website according to the new brand logo.</label> 
                                    </div> 
                                </li> 
                                <li> 
                                    <div class="checkbox checkbox-replace checkbox-primary"> 
                                        <input type="checkbox" id="task-2" checked /> <label for="task-2">Need some new responsive design for the wbesite.</label> 
                                    </div> 
                                </li> 
                                <li> 
                                    <div class="checkbox checkbox-replace checkbox-primary"> 
                                        <input type="checkbox" id="task-3" /> <label for="task-3">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
                                    </div> 
                                </li> 
                                <li> 
                                    <div class="checkbox checkbox-replace checkbox-primary"> 
                                        <input type="checkbox" id="task-4" /> <label for="task-4">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
                                    </div> 
                                </li> 
                                <li> 
                                    <div class="checkbox checkbox-replace checkbox-primary"> 
                                        <input type="checkbox" id="task-5" /> <label for="task-5">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
                                    </div> 
                                </li> 
                            </ul>
                            <div class="more">
                                <button class="btn btn-primary">Click More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">Recent Members</h2>
                            <ul class="panel-tool-options"> 
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                    </ul>
                                 </li>
                            </ul> 
                        </div> 
                        <!-- panel body --> 
                        <div class="panel-body">
                            <ul class="list-item member-list">
                                <li>
                                    <div class="user-avatar">
                                        <img title="" alt="" class="img-circle avatar" src="images/john-smith.png">
                                    </div>
                                    <div class="user-detail">
                                        <h5>John Smith</h5>
                                        <p>Joined 15 mins ago.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-avatar">
                                        <img title="" alt="" class="img-circle avatar" src="images/domnic-brown.png">
                                    </div>
                                    <div class="user-detail">
                                        <h5>Domnic Brown</h5>
                                        <p>Joined 2 days ago.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-avatar">
                                        <img title="" alt="" class="img-circle avatar" src="images/stella-johnson.png">
                                    </div>
                                    <div class="user-detail">
                                        <h5>Stella Johnson</h5>
                                        <p>Joined 1 day ago.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-avatar">
                                        <img title="" alt="" class="img-circle avatar" src="images/alex-dolgove.png">
                                    </div>
                                    <div class="user-detail">
                                        <h5>Alex Dolgove</h5>
                                        <p>Joined 5 days ago.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="more">
                                <button class="btn btn-primary">Click More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">New Messages</h2>
                            <ul class="panel-tool-options"> 
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                    </ul>
                                 </li>
                            </ul> 
                        </div> 
                        <!-- panel body --> 
                        <div class="panel-body">
                            <ul class="list-item message-list">
                                <li>
                                    <i class="icon-mail icon-2x"></i>
                                    <div class="message-body">
                                        <h5>Interested in buying your pro</h5>
                                        <p>Your product sounds interesting I would love to check this ne...</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon-mail icon-2x"></i>
                                    <div class="message-body">
                                        <h5>Interested in buying your pro</h5>
                                        <p>Your product sounds interesting I would love to check this ne...</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon-mail icon-2x"></i>
                                    <div class="message-body">
                                        <h5>Interested in buying your pro</h5>
                                        <p>Your product sounds interesting I would love to check this ne...</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon-mail icon-2x"></i>
                                    <div class="message-body">
                                        <h5>Interested in buying your pro</h5>
                                        <p>Your product sounds interesting I would love to check this ne...</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="more">
                                <button class="btn btn-primary">Click More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading no-border clearfix"> 
                            <h2 class="panel-title">Site Traffic</h2>
                            <ul class="panel-tool-options"> 
                                <li><a href="#" id="lines"><i class="icon-chart-line icon-2x"></i></a></li>
                                <li><a href="#" id="bars"><i class="icon-chart-bar icon-2x"></i></a></li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
                                    </ul>
                                 </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart float-chart-lg">
                                <div id="graph-lines" class="flot-chart-content"></div>
                                <div id="graph-bars" class="flot-chart-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer-main"> 
                &copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> 
            </footer>   
            <!-- /footer -->
        
      </div>
      <!-- /main content -->
      
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Create Task Modal-->
<div id="newtask" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3 class="panel-title">Basic Form</h3>
                <ul class="panel-tool-options"> 
                    <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                    <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                    <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="alert alert-dismissible hidden" id="create-task-alert" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <span id="create-task-message">&nbsp;</span>
                </div>
                <form id="create-task">
                    <div class="form-group">
                        <label for="name">Task Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Task Name">
                    </div>
                    <div class="form-group">
                        <label>Repeatable?</label>
                        <div class="clearfix">
                            <div class="radio radio-inline radio-replace">
                                <input class="repeatable" type="radio" name="repeatable" id="repeatYes" value="true">
                                <label for="repeatYes">Yes</label>
                            </div> 
                            <div class="radio radio-inline radio-replace">
                                <input class="repeatable" type="radio" name="repeatable" id="repeatNo" value="false">
                                <label for="repeatNo">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden" id="datepicker"> 
                        <label>Date Picker (popup)</label> 
                        <div id="date-popup" class="input-group date"> 
                            <input type="text" data-format="D, dd MM yyyy" class="form-control"> 
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                        </div>
                    </div>
                    <div class="hidden" id="frequencyOptions">
                        <div class="form-group">
                            <label>Frequency</label>
                            <div class="clearfix">
                                <div class="radio radio-inline radio-replace">
                                    <input type="radio" name="frequency" id="frequencyDaily" value="Daily">
                                    <label for="radioInput1">Daily</label>
                                </div> 
                                <div class="radio radio-inline radio-replace">
                                    <input type="radio" name="frequency" id="frequencyWeekly" value="Weekly">
                                    <label for="radioInput2">Weekly</label>
                                </div> 
                                <div class="radio radio-inline radio-replace">
                                    <input type="radio" name="frequency" id="frequencyMonthly" value="Monthly">
                                    <label for="radioInput3">Monthly</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="weeklyOptions">
                    <div class="form-group">
                        <label>Weekdays</label>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="sunday" value="Sunday">
                            <label for="sunday">Sunday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="monday" value="Monday">
                            <label for="monday">Monday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="tuesday" value="Tuesday">
                            <label for="tuesday">Tuesday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="wednesday" value="Wednesday">
                            <label for="wednesday">Wednesday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="thursday" value="Thursday">
                            <label for="thursday">Thursday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="friday" value="Friday">
                            <label for="friday">Friday</label>
                        </div>
                        <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="saturday" value="Saturday">
                            <label for="saturday">Saturday</label>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="monthdays">
                    <div class="form-group">
                        <label>Day of Month</label>
                        <div class="clearfix">    
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m1" value="1">
                                <label for="m1">1<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m2" value="2">
                                <label for="m2">2<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m3" value="3">
                                <label for="m3">3<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m4" value="4">
                                <label for="m4">4<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m5" value="5">
                                <label for="m5">5<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m6" value="6">
                                <label for="m6">6<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m7" value="7">
                                <label for="m7">7<span style="color:#1F2d43">0</span></label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m8" value="8">
                                <label for="m8">8<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m9" value="9">
                                <label for="m9">9<span style="color:#1F2d43">0</span></label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m10" value="10">
                                <label for="m10">10</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m11" value="11">
                                <label for="m11">11</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m12" value="12">
                                <label for="m12">12</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m13" value="13">
                                <label for="m13">13</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m14" value="14">
                                <label for="m14">14</label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m15" value="15">
                                <label for="m15">15</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m16" value="16">
                                <label for="m16">16</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m17" value="17">
                                <label for="m17">17</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m18" value="18">
                                <label for="m18">18</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m19" value="19">
                                <label for="m19">19</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m20" value="20">
                                <label for="m20">20</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m21" value="21">
                                <label for="m21">21</label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m22" value="22">
                                <label for="m22">22</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m23" value="23">
                                <label for="m23">23</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m24" value="24">
                                <label for="m24">24</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m25" value="25">
                                <label for="m25">25</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m26" value="26">
                                <label for="m26">26</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m27" value="27">
                                <label for="m27">27</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m28" value="28">
                                <label for="m28">28</label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m29" value="29">
                                <label for="m29">29</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m30" value="30">
                                <label for="m30">30</label>
                            </div>
                            <div class="checkbox checkbox-inline checkbox-replace">
                                <input type="checkbox" id="m31" value="31">
                                <label for="m31">31</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="daysbyweek"> 
                    <div class="form-group"> 
                        <label class="col-sm-3 control-label">First Week</label> 
                        <div class="col-sm-9"> 
                            <select name="selectMultiple" class="select2 form-control" data-placeholder="Select days" multiple> 
                                <option value="">Select days</option>
                                <option value="1sunday" >Sunday</option> 
                                <option value="1monday" >Monday</option> 
                                <option value="1tuesday" >Tuesday</option> 
                                <option value="1wednesday" >Wednesday</option> 
                                <option value="1thursday" >Thursday</option> 
                                <option value="1friday" >Friday</option> 
                                <option value="1saturday" >Saturday</option>
                            </select>
                        </div> 
                    </div>
                     <div class="form-group"> 
                        <label class="col-sm-3 control-label">Second Week</label> 
                        <div class="col-sm-9"> 
                            <select name="selectMultiple" class="select2 form-control" data-placeholder="Select days" multiple> 
                                <option value="">Select days</option>
                                <option value="2sunday" >Sunday</option> 
                                <option value="2monday" >Monday</option> 
                                <option value="2tuesday" >Tuesday</option> 
                                <option value="2wednesday" >Wednesday</option> 
                                <option value="2thursday" >Thursday</option> 
                                <option value="2friday" >Friday</option> 
                                <option value="2saturday" >Saturday</option>
                            </select>
                        </div> 
                    </div>
                     <div class="form-group"> 
                        <label class="col-sm-3 control-label">Third Week</label> 
                        <div class="col-sm-9"> 
                            <select name="selectMultiple" class="select2 form-control" data-placeholder="Select days" multiple> 
                                <option value="">Select days</option>
                                <option value="3sunday" >Sunday</option> 
                                <option value="3monday" >Monday</option> 
                                <option value="3tuesday" >Tuesday</option> 
                                <option value="3wednesday" >Wednesday</option> 
                                <option value="3thursday" >Thursday</option> 
                                <option value="3friday" >Friday</option> 
                                <option value="3saturday" >Saturday</option>
                            </select>
                        </div> 
                    </div>
                     <div class="form-group"> 
                        <label class="col-sm-3 control-label">Fourth Week</label> 
                        <div class="col-sm-9"> 
                            <select name="selectMultiple" class="select2 form-control" data-placeholder="Select days" multiple> 
                                <option value="">Select days</option>
                                <option value="4sunday" >Sunday</option> 
                                <option value="4monday" >Monday</option> 
                                <option value="4tuesday" >Tuesday</option> 
                                <option value="4wednesday" >Wednesday</option> 
                                <option value="4thursday" >Thursday</option> 
                                <option value="4friday" >Friday</option> 
                                <option value="4saturday" >Saturday</option>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
                    <div style="padding-top:10px;">
                    
                    <button type="submit" class="btn btn-white">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                </form>
            </div>
        </div>    
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--End Basic Modal-->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="js/plugins/flot/jquery.flot.min.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="js/functions.js"></script>
<!-- Dashboard JS-->
<script src="js/tasktracker/dashboard.js"></script>
<!--Bootstrap DatePicker-->
<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Select2-->

<script>
$('#date-popup').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            todayHighlight: true
        });
</script>

<script src="js/plugins/select2/select2.full.min.js"></script>
<script>
    $(".select2").select2();
    $(".select2-placeholer").select2({
        allowClear: true
    });
</script>

<!--ChartJs-->
<script src="js/plugins/chartjs/Chart.min.js"></script>
<script>
    $(document).ready(function () {
        var $checkbox = $('.todo-list .checkbox input[type=checkbox]');

        $checkbox.change(function () {
            if ($(this).is(':checked')) {
                $(this).parent().addClass('checked');
            } else {
                $(this).parent().removeClass('checked');
            }
        });

        $checkbox.each(function (index) {
            if ($(this).is(':checked')) {
                $(this).parent().addClass('checked');
            } else {
                $(this).parent().removeClass('checked');
            }
        });

        // charts
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        var previousPoint = null;
        $('#graph-bars, #graph-lines').bind('plothover', function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $('#flotTip').remove();
                    var x = item.datapoint[0],
                            y = item.datapoint[1];

                    var color = item.series.color;
                    var day = new Date(x).getDate();
                    var month = monthNames[new Date(x).getMonth()];
                    var year = new Date(x).getFullYear();
                    showTooltip(item.pageX,
                            item.pageY,
                            day + ' ' + month + ',' + year
                            + " : <strong>" + y +
                            " visitors</strong>");

                    /*content = item.series.label + ' = ' + item.datapoint[1];
                     showTooltip(item.pageX, item.pageY, content);
                     showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');*/

                }
            } else {
                $('#flotTip').remove();
                previousPoint = null;
            }
        });

        var graphData = [{
                // Visits
                data: [[1196463600000, 45], [1196550000000, 30], [1196636400000, 98], [1196722800000, 37], [1196809200000, 95], [1196895600000, 45], [1196982000000, 65],
                    [1197068400000, 120], [1197154800000, 90], [1197241200000, 65], [1197327600000, 50]],
                color: '#ef193c'
            }, {
                // Returning Visits
                data: [[1196463600000, 100], [1196550000000, 170], [1196636400000, 260], [1196722800000, 127], [1196809200000, 240], [1196895600000, 180], [1196982000000, 160],
                    [1197068400000, 210], [1197154800000, 270], [1197241200000, 120], [1197327600000, 85]],
                color: '#2196d4',
            }
        ];


        // Lines
        $.plot($('#graph-lines'), graphData, {
            series: {
                points: {
                    show: true,
                    radius: 3.5
                },
                lines: {
                    show: true,
                    fill: true,
                },
                shadowSize: 0
            },
            grid: {
                color: '#646464',
                borderColor: 'transparent',
                borderWidth: 20,
                hoverable: true
            },
            xaxis: {
                mode: "time",
                tickColor: 'transparent',
                tickDecimals: 2
            },
            yaxis: {
                tickSize: 100
            }
        });

        // Bars
        $.plot($('#graph-bars'), graphData, {
            series: {
                points: {
                    show: true,
                    radius: 3.5,
                },
                lines: {
                    show: true,
                    fill: false
                },
                bars: {
                    show: false,
                    lineWidth: 5,
                    align: 'center'
                },
                shadowSize: 0,
                hoverable: true
            },
            grid: {
                color: '#646464',
                borderColor: 'transparent',
                borderWidth: 20,
                hoverable: true
            },
            xaxis: {
                mode: "time",
                tickColor: 'transparent',
                tickDecimals: 2
            },
            yaxis: {
                tickSize: 100
            }
        });

        var $graphBar = $('#graph-bars'), $graphLine = $('#graph-lines'), $linkLine = $('#lines'), $linkBar = $('#bars');
        $graphBar.hide();
        $linkLine.on('click', function (e) {
            e.preventDefault();

            $linkBar.removeClass('active');
            $graphBar.fadeOut(function () {
                $(this).addClass('active');
                $graphLine.fadeIn();
            });
        });
        $linkBar.on('click', function (e) {
            e.preventDefault();

            $linkLine.removeClass('active');
            $graphLine.fadeOut(function () {
                $(this).addClass('active');
                $graphBar.fadeIn();
            });
        });

        var revenueData = [{
                // Visits
                data: [[1475280000000, 400.05], [1475366400000, 1600.32], [1475452800000, 900.35], [1475539200000, 2100.31], [1475625600000, 1800.55], [1475712000000, 900.42], [1475798400000, 2885.01], [1475884800000, 1870.97], [1475971200000, 2145.14], [1476057600000, 1130.14], [1476144000000, 1490.02], [1476230400000, 740.74], [1476316800000, 1280.88], [1476403200000, 1157.71], [1476489600000, 599.71], [1476576000000, 2159.89], [1476662400000, 1557.81], [1476748800000, 959.06], [1476835200000, 158.00], [1476921600000, 757.99], [1477008000000, 800], [1477094400000, 950.25], [1477180800000, 1289.22], [1477267200000, 400.52], [1477353600000, 2425], [1477440000000, 1300.35], [1477526400000, 1600.20], [1477612800000, 890.65], [1477699200000, 2165.29], [1477785600000, 1566.22], [1477872000000, 2064.33]],
                //data: [[6, 400], [7, 1600], [8, 900], [9, 2100], [10, 1200], [12, 1800]],
                //data: [[1167692400000, 1600.05], [1167778800000, 5800.32], [1167865200000, 570.35], [1167951600000, 5600.31], [1168210800000, 1155.55], [1168297200000, 2255.64], [1168383600000, 5334.02], [1168470000000, 1151.88], [1168556400000, 3352.99], [1168815600000, 2652.99], [1168902000000, 3251.21], [1168988400000, 4152.24], [1169074800000, 4450.48], [1169161200000, 7751.99], [1169420400000, 5851.13], [1169506800000, 1555.04], [1169593200000, 55.37], [1169679600000, 54.23], [1169766000000, 55.42], [1170025200000, 54.01], [1170111600000, 56.97], [1170198000000, 58.14], [1170284400000, 58.14], [1170370800000, 59.02], [1170630000000, 58.74], [1170716400000, 58.88], [1170802800000, 57.71], [1170889200000, 59.71], [1170975600000, 59.89], [1171234800000, 57.81], [1171321200000, 59.06], [1171407600000, 58.00], [1171494000000, 57.99], [1171580400000, 59.39], [1171839600000, 59.39], [1171926000000, 58.07], [1172012400000, 60.07], [1172098800000, 61.14], [1172444400000, 61.39], [1172530800000, 61.46], [1172617200000, 61.79], [1172703600000, 62.00], [1172790000000, 60.07], [1173135600000, 60.69], [1173222000000, 61.82], [1173308400000, 60.05], [1173654000000, 58.91], [1173740400000, 57.93], [1173826800000, 58.16], [1173913200000, 57.55], [1173999600000, 57.11], [1174258800000, 56.59], [1174345200000, 59.61], [1174518000000, 61.69], [1174604400000, 62.28], [1174860000000, 62.91], [1174946400000, 62.93], [1175032800000, 64.03], [1175119200000, 66.03], [1175205600000, 65.87], [1175464800000, 64.64], [1175637600000, 64.38], [1175724000000, 64.28], [1175810400000, 64.28], [1176069600000, 61.51], [1176156000000, 61.89], [1176242400000, 62.01], [1176328800000, 63.85], [1176415200000, 63.63], [1176674400000, 63.61], [1176760800000, 63.10], [1176847200000, 63.13], [1176933600000, 61.83], [1177020000000, 63.38], [1177279200000, 64.58], [1177452000000, 65.84], [1177538400000, 65.06], [1177624800000, 66.46], [1177884000000, 64.40], [1178056800000, 63.68], [1178143200000, 63.19], [1178229600000, 61.93], [1178488800000, 61.47], [1178575200000, 61.55], [1178748000000, 61.81], [1178834400000, 62.37], [1179093600000, 62.46], [1179180000000, 63.17], [1179266400000, 62.55], [1179352800000, 64.94], [1179698400000, 66.27], [1179784800000, 65.50], [1179871200000, 65.77], [1179957600000, 64.18], [1180044000000, 65.20], [1180389600000, 63.15], [1180476000000, 63.49], [1180562400000, 65.08], [1180908000000, 66.30], [1180994400000, 65.96], [1181167200000, 66.93], [1181253600000, 65.98], [1181599200000, 65.35], [1181685600000, 66.26], [1181858400000, 68.00], [1182117600000, 69.09], [1182204000000, 69.10]],
                color: '#fff',
                label: 'Revenue($)',
                dashes: {show: true}
            }
        ];

        $('#placeholder_overview, #Revenue-lines').bind('plothover', function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $('#flotTip').remove();
                    var x = item.datapoint[0],
                            y = item.datapoint[1];
                    //showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');

                    var color = item.series.color;
                    var day = new Date(x).getDate();
                    var month = monthNames[new Date(x).getMonth()];
                    var year = new Date(x).getFullYear();
                    showTooltip(item.pageX,
                            item.pageY,
                            day + ' ' + month + ',' + year
                            + " : <strong>" + y +
                            "($)</strong>");
                }
            } else {
                $('#flotTip').remove();
                previousPoint = null;
            }
        });

        var options = {
            series: {
                points: {
                    show: true,
                    radius: 3.5,
                    fillColor: "rgba(0,0,0,0.35)",
                },
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true
                },
                bars: {
                    show: false,
                    lineWidth: 2
                },
                shadowSize: 10,
                //highlightColor: '#fff',
                hoverable: true,
                clickable: true,
            },
            grid: {
                color: '#646464',
                borderColor: 'transparent',
                borderWidth: 20,
                hoverable: true,
                tickColor: "rgba(255,255,255,0.05)",
                markingsColor: "rgba(255,255,255,0.05)",
                markingsLineWidth: 5,
                /*backgroundColor: {
                    colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
                }*/
            },
            legend: {
                show: true
            },
            xaxis: {
                mode: 'time',
                font: {
                    weight: "bold"
                },
                color: "#D6D8DB",
                tickColor: 'transparent',
                tickDecimals: 2
            },
            selection: {
                mode: "x"
            },
            yaxis: {
                font: {
                    weight: "bold"
                },
                color: "#D6D8DB",
                tickSize: 500
            }
        };

        // Lines
        var plot = $.plot($('#Revenue-lines'), revenueData, options);

        // Bars
        var overview = $.plot($("#placeholder_overview"), revenueData, {
            colors: ["#edc240", "#5eb95e"],
            series: {
                bars: {
                    show: true,
                    lineWidth: 5,
                    fillColor: "#5eb95e"
                },
                shadowSize: 2,
                grow: {
                    active: false
                }
            },
            legend: {
                show: false
            },
            xaxis: {
                ticks: [],
                mode: "time"
            },
            yaxis: {
                ticks: [],
                min: 0,
                autoscaleMargin: 0.1
            },
            selection: {
                mode: "x"
            },
            grid: {
                color: "#D6D8DB",
                borderColor: 'transparent',
                markingsColor: "rgba(255,255,255,0.05)",
                /*backgroundColor: {
                    colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
                }*/
            }
        });

        $("#Revenue-lines").bind("plotselected", function (event, ranges) {
            // do the zooming
            plot = $.plot($("#Revenue-lines"), revenueData,
                    $.extend(true, {}, options, {
                        xaxis: {
                            min: ranges.xaxis.from,
                            max: ranges.xaxis.to
                        }
                    }));

            // don't fire event on the overview to prevent eternal loop
            overview.setSelection(ranges, true);
        });

        $("#placeholder_overview").bind("plotselected", function (event, ranges) {
            plot.setSelection(ranges);
        });

        $("#Revenuelines").click(function (event) {
            event.preventDefault();
            overview.clearSelection();
            $.plot($("#Revenue-lines"), revenueData, options);
        });

        // pie graph
        var doughnutData = [
            {
                value: 5742,
                color: "#22b66f",
                highlight: "#12a65f",
                label: "Only Visited"
            },
            {
                value: 2496,
                color: "#f3c111",
                highlight: "#e7b505",
                label: "Purchased"
            },
            {
                value: 1762,
                color: "#ef193c",
                highlight: "#e81235",
                label: "Bounced"
            }
        ];

        var doughnutOptions = {
            segmentShowStroke: true,
            segmentStrokeColor: "transparent",
            segmentStrokeWidth: 0,
            percentageInnerCutout: 60, // This is 0 for Pie charts
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
            responsive: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };

        var canvas = document.getElementById("doughnutChart");
        var helpers = Chart.helpers;
        //var ctx = document.getElementById("doughnutChart").getContext("2d");
        var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
        var legendHolder = document.createElement('div');
        legendHolder.innerHTML = moduleDoughnut.generateLegend();
        helpers.each(legendHolder.firstChild.childNodes, function (legendNode, index) {
            helpers.addEvent(legendNode, 'mouseover', function () {
                var activeSegment = moduleDoughnut.segments[index];
                activeSegment.save();
                activeSegment.fillColor = activeSegment.highlightColor;
                moduleDoughnut.showTooltip([activeSegment]);
                activeSegment.restore();
            });
        });
        helpers.addEvent(legendHolder.firstChild, 'mouseout', function () {
            moduleDoughnut.draw();
        });
        canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
    });
</script>
</body>
</html>
