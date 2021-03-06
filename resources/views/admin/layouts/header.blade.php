<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <title>Online Ielts Preperation</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="application-name" content="Egyankunja"/>
        <meta name="description" content="It is a E-learning Platform for all the students." />
        <meta name="Egyankunja-square70x70logo" content="../img/small.jpg"/>
        <meta name="Egyankunja-square150x150logo" content="../img/medium.jpg"/>
        <meta name="Egyankunja-wide310x150logo" content="../img/wide.jpg"/>
        <meta name="Egyankunja-square310x310logo" content="../img/large.jpg"/>
        <meta name="Egyankunja-TileColor" content="#0a68a8"/>
        
        <meta name="Egyankunja-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://www.egyankunja.com/read.xml&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://www.egyankunja.com/read.xml&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://www.egyankunja.com/read.xml&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://www.egyankunja.com/read.xml&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://www.egyankunja.com/read.xml&amp;id=5; cycle=1"/>


        <!-- ******************* for open graph protocal starts ********************** -->
            <meta property="og:title" content="Egyankunja" />
            <meta property="og:type" content="It is a E-learning Platform for all the students." />
            <meta property="og:url" content="http://www.egyankunja.com" />
            <meta property="og:image" content="../img/small.jpg" />
        <!-- ******************* for open graph protocal ends ********************** --> 

        <!-- ******************* for apple ios starts ********************** -->  
            <link rel="apple-touch-icon" href="../img/small.jpg"">
            <link rel="apple-touch-icon" sizes="152x152" href="../img/medium.jpg"> 
        <!-- ******************* for apple ios ends  ********************** -->



        
       <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{URL::asset('assets/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{URL::asset('assets/css/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{URL::asset('assets/css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="{{URL::asset('assets/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{URL::asset('assets/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{URL::asset('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{URL::asset('assets/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" /> 
        <!-- data tables style --> 
        <!-- <link href="{{URL::asset('assets/data-tables/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">  -->
        <!-- custom css style -->
        <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
          <!-- toastr notifications -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

       
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>


    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{url('/')}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <!-- Egyankunja -->
                <img src="" alt="main logo" class="img-responsive">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a> <div class="navbar-right">
                      <ul class="nav navbar-nav" >
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{Auth::User()->name}} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                 <li class="user-header bg-light-blue"><?php $image=Auth::user()->image;?>
                                    <img src="{{URL::asset('/assets/profile/'.$image)}}" class="img-circle" alt="User Image" />
                                    <p>
                                        {{Auth::User()->name}}
                                        <small>Admin</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{url('/student/profile/')}}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"" class="btn btn-default btn-flat">Sign Out</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right" id="app">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       
                        <!-- Notifications: style can be found in dropdown.less -->

                        <Snotification :Snotifications="Snotifications"></Snotification>

                       </ul>
                       </div>
                        <!-- User Account: style can be found in dropdown.less -->
                   
            </nav>
        </header>

<!--  *************************************** side header starts  ********************************** -->
 
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                     
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="{{url('/student')}}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="my-account.php">
                                <i class="fa fa-shopping-cart"></i> <span>My Account</span> <!-- <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li> 
                        <li>
                            <a href="{{route('test.index')}}">
                                <i class="fa fa-book"></i> <span>My Tests</span> <!-- <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li>
                        <li>
                            <a href="{{route('student.list')}}">
                                <i class="fa fa-book"></i> <span>Student List</span> <!-- <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li>
                        <!-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-btc"></i> <span>Batch Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Batch List</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Record Attendance</a></li> 
                            </ul>
                        </li> -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i> <span>Questions</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Speaking</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Listening</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Reading</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i> Wrihting</a></li> 
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-code-fork"></i> <span>My eProjects</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Manage Component</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Manage Project</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Project Request</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Evaluate Project</a></li> 
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tasks"></i> <span>My Task</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> List Of Task</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Evaluate Task</a></li>  
                            </ul>
                        </li>
                       <!--  <li>
                            <a href="assessment.php">
                                <i class="fa fa-edit"></i> <span>Assessment</span> 
                            </a>
                        </li>
                        <li>
                            <a href="assessment.php">
                                <i class="fa fa-archive"></i> <span>Resume Analyzer</span> 
                            </a>
                        </li> -->
                        <!-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-comments-o"></i> <span>Video Conference</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Ikonnect</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Zoom</a></li>  
                            </ul>
                        </li>  -->
                       <!--  <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text"></i> <span>Reports</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Consolidated Reoprt</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Attendance Reoprt</a></li>
                                <li><a href="#"><i class="fa fa-dot-circle-o"></i> Prescribed Course Reoprt</a></li>  
                            </ul>
                        </li> -->
                        <!-- <li>
                            <a href="assessment.php">
                                <i class="fa fa-keyboard-o"></i> <span>Feedback</span> 
                            </a>
                        </li> -->
                       
                         
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>