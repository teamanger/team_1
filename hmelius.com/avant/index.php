<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Avant</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">

    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

	 
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
            <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
	<![endif]-->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<link rel='stylesheet' type='text/css' href='assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/fullcalendar/fullcalendar.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/form-markdown/css/bootstrap-markdown.min.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' /> 

<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>

<body class="">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44426473-2', 'hmelius.com');
  ga('send', 'pageview');
</script>

    <div id="headerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messeges
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-midnightblue">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-orange">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Plugins
                        </div>
                    </a>
                </div>
                            
            </div>
        </div>
    </div>

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="pull-left" data-toggle="tooltip" data-placement="bottom" title="Toggle Left Sidebar"></a>
        <a id="rightmenu-trigger" class="pull-right" data-toggle="tooltip" data-placement="bottom" title="Toggle Right Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">John McCartney <i class="fa fa-caret-down"></i></span><img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
        		<ul class="dropdown-menu userinfo arrow">
        			<li class="username">
                        <a href="#">
        				    <div class="pull-left"><img class="userimg" src="assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
        				    <div class="pull-right"><h5>Howdy, John!</h5><small>Logged in as <span>john275</span></small></div>
                        </a>
        			</li>
        			<li class="userlinks">
        				<ul class="dropdown-menu">
        					<li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
        					<li><a href="#">Account <i class="pull-right fa fa-cog"></i></a></li>
        					<li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
        					<li class="divider"></li>
        					<li><a href="#" class="text-right">Sign Out</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
        	<li class="dropdown">
        		<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-envelope"></i><span class="badge">1</span></a>
        		<ul class="dropdown-menu messeges arrow">
        			<li>
        				<span>You have 1 new message(s)</span>
        				<span><a href="#">Mark all Read</a></span>
        			</li>
        			<li><a href="#" class="active">
        				<span class="time">6 mins</span>
        				<img src="assets/demo/avatar/doyle.png" alt="avatar" />
        				<div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
        			</a></li>
        			<li><a href="#">
        				<span class="time">12 mins</span>
        				<img src="assets/demo/avatar/paton.png" alt="avatar" />
        				<div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
        			</a></li>
        			<li><a href="#">
        				<span class="time">9 hrs</span>
        				<img src="assets/demo/avatar/corbett.png" alt="avatar" />
        				<div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
        			</a></li>
        			<li><a href="#">
        				<span class="time">2 days</span>
        				<img src="assets/demo/avatar/tennant.png" alt="avatar" />
        				<div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
        			</a></li>
        			<li><a  class="dd-viewall" href="#">View All Messages</a></li>
        		</ul>
        	</li>
        	<li class="dropdown">
        		<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-bell"></i><span class="badge">3</span></a>
        		<ul class="dropdown-menu notifications arrow">
        			<li>
        				<span>You have 3 new notification(s)</span>
        				<span><a href="#">Mark all Seen</a></span>
        			</li>
        			<li>
        				<a href="#" class="notification-user active">
        					<span class="time">4 mins</span>
        					<i class="fa fa-user"></i>
        					<span class="msg">New user Registered. </span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-danger active">
        					<span class="time">20 mins</span>
        					<i class="fa fa-bolt"></i>
        					<span class="msg">CPU at 92% on server#3! </span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-success active">
        					<span class="time">1 hr</span>
        					<i class="fa fa-check"></i> 
        					<span class="msg">Server#1 is live. </span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-warning">
        					<span class="time">2 hrs</span>
        					<i class="fa fa-exclamation-triangle"></i> 
        					<span class="msg">Database overloaded. </span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-order">
        					<span class="time">10 hrs</span>
        					<i class="fa fa-shopping-cart"></i> 
        					<span class="msg">New order received. </span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-failure">
        					<span class="time">12 hrs</span>
        					<i class="fa fa-times-circle"></i>
        					<span class="msg">Application error!</span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-fix">
        					<span class="time">12 hrs</span>
        					<i class="fa fa-wrench"></i>
        					<span class="msg">Installation Succeeded.</span>
        				</a>
        			</li>
        			<li>
        				<a href="#" class="notification-success">
        					<span class="time">18 hrs</span>
        					<i class="fa fa-check"></i>
        					<span class="msg">Account Created. </span>
        				</a>
        			</li>
        			<li><a href="#" class="dd-viewall">View All Notifications</a></li>
				</ul>
			</li>
            <li>
                <a href="#" id="headerbardropdown"><span><i class="fa fa-level-down"></i></span></a>
            </li>
            <li class="dropdown demodrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i></a>

                <ul class="dropdown-menu arrow dropdown-menu-form" id="demo-dropdown">
                    <li>
                        <label for="demo-header-variations" class="control-label">Header Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-header-variations">
                            <li><a class="color-black" href="javascript:;"  data-headertheme="header-black.css"></a></li>
                            <li><a class="color-dark" href="javascript:;"  data-headertheme="default.css"></a></li>
                            <li><a class="color-red" href="javascript:;" data-headertheme="header-red.css"></a></li>
                            <li><a class="color-blue" href="javascript:;" data-headertheme="header-blue.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="demo-color-variations" class="control-label">Sidebar Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-color-variations">
                            <li><a class="color-lite" href="javascript:;"  data-theme="default.css"></a></li>
                            <li><a class="color-steel" href="javascript:;" data-theme="sidebar-steel.css"></a></li>
                            <li><a class="color-lavender" href="javascript:;" data-theme="sidebar-lavender.css"></a></li>
                            <li><a class="color-green" href="javascript:;" data-theme="sidebar-green.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="fixedheader">Fixed Header</label>
                        <div id="fixedheader" style="margin-top:5px;"></div> 
                    </li>
                </ul>
            </li>
		</ul>
    </header>

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form>
                        <input type="text" class="search-query" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="layout-grid.php"><span>Grids</span></a>
                        <li><a href="layout-horizontal.php"><span>Horizontal Navigation</span></a>
                        <li><a href="layout-horizontal2.php"><span>Horizontal Navigation 2</span></a>
                        <li><a href="layout-fixed.php"><span>Fixed Boxed Layout</span></a>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-list-ol"></i> <span>UI Elements</span> <span class="badge badge-indigo">4</span></a>
                    <ul class='acc-menu'>
                        <li><a href="ui-typography.php">Typography</a></li>
                        <li><a href="ui-buttons.php">Buttons</a></li>
                        <li><a href="tables-basic.php">Tables</a></li>
                        <li><a href="form-layout.php">Forms</a></li>
                        <li><a href="ui-panels.php">Panels</a></li>
                        <li><a href="ui-images.php">Images</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-tasks"></i> <span>UI Componenets</span> <span class="badge badge-info">12</span></a>
                    <ul class="acc-menu">
                        <li><a href="ui-tiles.php">Tiles</a></li>
                        <li><a href="ui-modals.php">Modal Boxes</a></li>
                        <li><a href="ui-progressbars.php">Progress Bars</a></li>
						<li><a href="ui-paginations.php">Pagers &amp; Paginations</a></li>
						<li><a href="ui-breadcrumbs.php">Breadcrumbs</a></li>
						<li><a href="ui-labelsbadges.php">Labels &amp; Badges</a></li>
                        <li><a href="ui-alerts.php">Alerts &amp; Notificiations</a></li>
                        <li><a href="ui-sliders.php">Sliders &amp; Ranges</a></li>
                        <li><a href="ui-carousel.php">Carousel</a></li>
                        <li><a href="ui-nestable.php">Nestable Lists</a></li>
                        <li><a href="ui-wells.php">Wells</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Advanced Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="tables-data.php">Data Tables</a></li>
                        <li><a href="tables-responsive.php">Responsive Tables</a></li>
                        <li><a href="tables-editable.php">Editable Tables</a></li>
						<!-- <li><a href="#">Samples</a></li> Coming soon -->
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Advanced Forms</span><span class="badge badge-primary">5</span></a>
                    <ul class="acc-menu">
                        <li><a href="form-components.php">Components</a></li>
                        <li><a href="form-wizard.php">Wizards</a></li>
                        <li><a href="form-validation.php">Validation</a></li>
                        <li><a href="form-masks.php">Masks</a></li>
                        <li><a href="form-fileupload.php">Multiple File Uploads</a></li>
                        <li><a href="form-dropzone.php">Dropzone File Uploads</a></li>
                        <!-- <li><a href="#">Samples</a></li> Coming soon -->
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="acc-menu">
                        <li><a href="maps-google.php">Google Maps</a></li>
                        <li><a href="maps-vector.php">Vector Maps</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="acc-menu">
                        <li><a href="charts-flot.php">Extensible</a></li>
                        <li><a href="charts-svg.php">Interactive</a></li>
                        <li><a href="charts-canvas.php">Lightweight</a></li>
                        <li><a href="charts-inline.php">Inline</a></li>
                    </ul>
                </li>
                <li><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li><a href="gallery.php"><i class="fa fa-camera"></i> <span> Gallery</span> </a></li>
                <li><a href="javascript:;"><i class="fa fa-flag"></i> <span>Icons</span> <span class="badge badge-orange">2</span></a>
                    <ul class="acc-menu">
                        <li><a href="icons-fontawesome.php">Font Awesome</a></li>
                        <li><a href="icons-glyphicons.php">Glyphicons</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="javascript:;"><i class="fa fa-briefcase"></i> <span>Extras</span> <span class="badge badge-danger">1</span></a>
                    <ul class="acc-menu">
                        <li><a href="extras-search.php">Search Page</a></li>
                        <li><a href="extras-404.php">404 Page</a></li>
                        <li><a href="extras-500.php">500 Page</a></li>
                        <li><a href="extras-login.php">Login 1</a></li>
                        <li><a href="extras-login2.php">Login 2</a></li>
                        <li><a href="extras-blank.php">Blank Page</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-sitemap"></i> <span>Unlimited Level Menu</span></a>
                    <ul class="acc-menu">
                        <li><a href="javascript:;">Menu Item 1</a></li>
                        <li><a href="javascript:;">Menu Item 2</a>
                            <ul class="acc-menu">
                                <li><a href="javascript:;">Menu Item 2.1</a></li>
                                <li><a href="javascript:;">Menu Item 2.2</a>
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                        <li><a href="javascript:;">Menu Item 2.2.2</a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">And deeper yet!</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->
        <div id="page-rightbar">

            <div id="chatarea">
                <div class="chatuser">
                    <span class="pull-right">Jane Smith</span>
                    <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="chathistory">
                    <div class="chatmsg">
                        <p>Hey! How's it going?</p>
                        <span class="timestamp">1:20:42 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                        <span class="timestamp">1:20:46 PM</span>
                    </div>
                    <div class="chatmsg">
                        <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                        <span class="timestamp">1:20:54 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Alright, take care then.</p>
                        <span class="timestamp">1:21:01 PM</span>
                    </div>
                </div>
                <div class="chatinput">
                    <textarea name="" rows="2"></textarea>
                </div>
            </div>

            <div id="widgetarea">
                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="accsummary">
                        <div class="widget-block" style="background: #7ccc2e;">
                            <div class="pull-left">
                                <small>Current Balance</small>
                                <h5>$71,182</h5>
                            </div>
                            <div class="pull-right"><div id="currentbalance"></div></div>
                        </div>
                        <div class="widget-block" style="background: #595f69;">
                            <div class="pull-left">
                                <small>Account Type</small>
                                <h5>Business Plan A</h5>
                            </div>
                            <div class="pull-right">
                                <small class="text-right">Monthly</small>
                                <h5>$19<small>.99</small></h5>
                            </div>
                        </div>
                        <span class="more"><a href="#">Upgrade Account</a></span>
                    </div>
                </div>


                <div id="chatbar" class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="chatbody">
                        <ul class="">
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
                        </ul>
                        <span class="more"><a href="#">See all</a></span>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="taskbody">
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Backend Development</div>
                                <div class="progress-percentage"><span class="label label-info">Today</span> 25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Bug Fix</div>
                                <div class="progress-percentage"><span class="label label-primary">Tomorrow</span> 17%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Preparing Documentation</div>
                                <div class="progress-percentage">6%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">App Development</div>
                                <div class="progress-percentage">20%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <span class="more"><a href="ui-progressbars.php">View all Pending</a></span>
                    </div>
                </div>

 

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="storagespace">
                        <div class="clearfix" style="margin-bottom: 5px;">
                            <div class="progress-title pull-left">1.31 GB of 1.50 GB used</div>
                            <div class="progress-percentage pull-right">87.3%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                            <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                            <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="serverstatus">
                        <div class="clearfix" style="padding: 10px 24px;">
                            <div class="pull-left">
                                <div class="easypiechart" id="serverload" data-percent="67">
                                        <span class="percent"></span>
                                </div>
                                <label for="serverload">Load</label>
                            </div>
                            <div class="pull-right">
                                <div class="easypiechart" id="ramusage" data-percent="20.6">
                                    <span class="percent"></span>
                                </div>
                                <label for="ramusage">RAM: 422MB</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END RIGHTBAR -->
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="index.php">Dashboad</a></li>
            </ol>

            <h1>Dashboard</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <button class="btn btn-default" id="daterangepicker2">
                        <i class="fa fa-calendar-o"></i> 
                        <span class="hidden-xs hidden-sm">October 3, 2013 - November 2, 2013</span> <b class="caret"></b>
                    </button>
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="#">
                                <div class="tiles-heading">Profit</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">$</span>854</div>
                                    <small>+8.7% from last period</small>
                                </div>
                                <div class="tiles-footer">more info</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="#">
                                <div class="tiles-heading">Revenue</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><span class="text-top">$</span>22.7<span class="text-smallcaps">k</span></div>
                                    <small>-13.5% from last week</small>
                                </div>
                                <div class="tiles-footer">go to accounts</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-orange" href="#">
                                <div class="tiles-heading">Members</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">109</div>
                                    <small>new users registered</small>
                                </div>
                                <div class="tiles-footer">manage members</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="#">
                                <div class="tiles-heading">Orders</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="text-center">57</div>
                                    <small>new orders received</small>
                                </div>
                                <div class="tiles-footer">manage orders</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">User Report <small>(weekly)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">this week</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">previous week</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="site-statistics" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-inverse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Annual Sales <small>(by quarter)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">2012</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2011</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2010</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="budget-variance" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-alizarin" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Comments</div>
                            <div class="pull-right">+15.6%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-comments-o"></i></div>
                            <div class="pull-right">35</div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-orange" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Likes</div>
                            <div class="pull-right">-5.5%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="pull-right">318</div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-success" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Bugs Fixed</div>
                            <div class="pull-right">+14.9%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-check-square"></i></div>
                            <div class="pull-right">21</div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
                    <a class="info-tiles tiles-toyo" href="#">
                        <div class="tiles-heading">
                            <div class="pull-left">Downloads</div>
                            <div class="pull-right">-9.8%</div>
                        </div>
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-download"></i></div>
                            <div class="pull-right">1.73<span class="text-smallcaps">k</span></div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-orange">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Server Load <small>(%)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">Server #1</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">Server #2</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="server-load" style="height:125px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Site Statistics</h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" id="updatePieCharts" class="btn btn-default-alt btn-sm"><!--i class="fa fa-refresh"></i--> Refresh</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="easypiechart" id="newvisits" data-percent="65">
                                        <span class="percent"></span>
                                    </div>
                                    <label for="newvisits">New Visits</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <span class="easypiechart" id="bouncerate" data-percent="81">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="bouncerate">Bounce Rate</label>
                                    <hr class="visible-sm visible-xs">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <span class="easypiechart" id="clickrate" data-percent="42">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="clickrate">Click Rate</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                              <h4><i class="icon-highlight icon-highlight-toyo fa fa-user"></i> User Accounts</h4>
                              <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body collapse in">
                            <div class="table-responsive">
                                <table class="table" style="margin-bottom: 0px;">
                                    <thead>
                                        <tr>
                                            <th width="6%"><input type="checkbox" id="select-all"></th>
                                            <th width="22%">User ID</th>
                                            <th width="50%">Email Address</th>
                                            <th width="22%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="selects">
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>cranston</td>
                                            <td>cranstonb@gnail.com</td>
                                            <td><span class="label label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>aaron</td>
                                            <td>ppaul@lime.com</td>
                                            <td><span class="label label-grape">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>norris</td>
                                            <td>j.norris@gnail.com</td>
                                            <td><span class="label label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>gunner</td>
                                            <td>gunner@outluk.com</td>
                                            <td><span class="label label-danger">Blocked</span></td>
                                        </tr>
                                         <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>mrford</td>
                                            <td>fordm@gnail.com</td>
                                            <td><span class="label label-grape">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class=""></td>
                                            <td>yjason</td>
                                            <td>jasonr@gnail.com</td>
                                            <td><span class="label label-grape">Pending</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="active">
                                            <td colspan="4" class="text-left">
                                                <label for="action" style="margin-bottom:0">Action </label>
                                                <select name="action">
                                                    <option value="Edit">Edit</option>
                                                    <option value="Aprove">Aprove</option>
                                                    <option value="Move">Move</option>
                                                    <option value="Delete">Delete</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                              <h4><i class="icon-highlight fa fa-calendar"></i> Calendar</h4>
                              <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body collapse in">
                              <div id='calendar-drag'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                              <h4>
                                  <ul class="nav nav-tabs">
                                      <li class="active"><a href="#threads" data-toggle="tab">Threads</a></li>
                                      <li class=""><a href="#comments" data-toggle="tab">Comments</a></li>
                                      <li class=""><a href="#users" data-toggle="tab">Users</a></li>
                                  </ul>
                              </h4>
                              <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                              </div>
                        </div>
                        <div class="panel-body collapse in">
                            <div class="tab-content">
                                <div class="tab-pane active" id="threads">
                                    <ul class="panel-threads">
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">20 mins</span>
                                                <a href="#" class="title">Envato’s Most Wanted – $5,000 Reward for Music & Band Themes and Templates</a>
                                                <span class="thread">asked by <a href="#">Jim Gordon</a> in <a href="#">Section #3</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">2 hrs</span>
                                                <a href="#" class="title">How to create a corporate wordpress theme?</a>
                                                <span class="thread">asked by <a href="#">Simon Corbett</a> in <a href="#">Section #15</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">4 hrs</span>
                                                <a href="#" class="title">Which cart is growing in popularity - WOOCOMMERCE or OPENCART? And which one would you choose?</a>
                                                <span class="thread">asked by <a href="#">Jeff Dangerfield</a> in <a href="#">Section #9</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/doyle.png" alt="Doyle">
                                            <div class="content">
                                                <span class="time">13 hrs</span>
                                                <a href="#" class="title">Pros and Cons of Using Grids in Responsive Web Design</a>
                                                <span class="thread">asked by <a href="#">Alan Doyle</a> in <a href="#">Section #11</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jackson.png" alt="Jackson">
                                            <div class="content">
                                                <span class="time">19 hrs</span>
                                                <a href="#" class="title">Best Web & Graphic Design Proposal Software</a>
                                                <span class="thread">asked by <a href="#">Eric Jackson</a> in <a href="#">Section #18</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                </div>
                                <div class="tab-pane" id="comments">
                                    <ul class="panel-comments">
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="commented"><a href="#">Jim Gordon</a> commented on <a href="#">Article #121</a></span>
                                                Just wondering - can random users see our comments? If so, allow them to comment!
                                                <span class="actions"><a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-trash-o"></i> Trash</a> <a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-pencil-square"></i> Edit</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="commented"><a href="#">Simon Corbett</a> commented on <a href="#">Article #55</a></span>
                                                Not sure what changed but for the last few weeks a few of my regulars are having their comments held for moderation.
                                                <span class="actions"><a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-trash-o"></i> Trash</a> <a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-pencil-square"></i> Edit</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Corbett">
                                            <div class="content">
                                                <span class="commented"><a href="#">Polly Paton</a> commented on <a href="#">Article #12</a></span>
                                                I’m sure there is a tool for that. 
                                                <span class="actions"><a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-trash-o"></i> Trash</a> <a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-pencil-square"></i> Edit</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/watson.png" alt="Watson">
                                            <div class="content">
                                                <span class="commented"><a href="#">Annie Watson</a> commented on <a href="#">Article #223</a></span>
                                                We have enough problems with Spammers already without letting non members leave comments.
                                                <span class="actions"><a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-trash-o"></i> Trash</a> <a href="#" class="btn btn-default-alt btn-xs"><i class="fa fa-pencil-square"></i> Edit</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                </div>
                                <div class="tab-pane" id="users">
                                    <ul class="panel-users">
                                        <li>
                                            <img src="assets/demo/avatar/paton.png" alt="Paton">
                                            <div class="content">
                                                <span class="time">11 mins</span>
                                                <span class="desc"><a href="#">Polly Paton</a> followed <a href="#">John White</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/tennant.png" alt="Tennant">
                                            <div class="content">
                                                <span class="time">48 mins</span>
                                                <span class="desc"><a href="#">David Tennant</a> unfollowed <a href="#">Tony Doubleday</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/jobs.png" alt="Jobs">
                                            <div class="content">
                                                <span class="time">5 hrs</span>
                                                <span class="desc"><a href="#">Howard Jobs</a> commented on <a href="#">Selling PSD Template Rights!</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield">
                                            <div class="content">
                                                <span class="time">6 hrs</span>
                                                <span class="desc"><a href="#">Jeff Dangerfield</a> posted on <a href="#">Please help with Theme Design</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/aniss.png" alt="Aniss">
                                            <div class="content">
                                                <span class="time">22 hrs</span>
                                                <span class="desc"><a href="#">Jim Gordon</a> followed <a href="#">Polly Paton</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/demo/avatar/corbett.png" alt="Corbett">
                                            <div class="content">
                                                <span class="time">3 days</span>
                                                <span class="desc"><a href="#">Simon Corbett</a> followed <a href="#">Anna Johansson</a></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-default btn-sm pull-right">Show More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline">
                <li>AVANT &copy; 2013</li>
                <!--li class="pull-right"><a href="javascript:;" id="back-to-top">Top <i class="fa fa-arrow-up"></i></a></li-->
                <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top" style="margin-top: -1px; text-transform: uppercase;"><i class="fa fa-arrow-up"></i></button>
            </ul>
        </div>
    </footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<script type='text/javascript' src='assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='assets/js/enquire.js'></script> 
<script type='text/javascript' src='assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='assets/plugins/fullcalendar/fullcalendar.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-daterangepicker/daterangepicker.min.js'></script> 
<script type='text/javascript' src='assets/plugins/form-daterangepicker/moment.min.js'></script> 
<script type='text/javascript' src='assets/plugins/charts-flot/jquery.flot.min.js'></script> 
<script type='text/javascript' src='assets/plugins/charts-flot/jquery.flot.resize.min.js'></script> 
<script type='text/javascript' src='assets/plugins/charts-flot/jquery.flot.orderBars.min.js'></script> 
<script type='text/javascript' src='assets/demo/demo-index.js'></script> 
<script type='text/javascript' src='assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='assets/js/application.js'></script> 
<script type='text/javascript' src='assets/demo/demo.js'></script> 

</body>
</html>