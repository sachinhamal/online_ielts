@extends('student.layouts.app')
 @section('contents')
  <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header text-center"> 
                <div class="row"> 
	        		<div class="col-md-12">
	        			<h1>
			                Welcome to NEC online ielts test

			            </h1> 
	        			<ol class="breadcrumb">
			                <li><a href="{{url('/student')}}"><i class="fa fa-dashboard"></i> Home</a></li>
			                <li class="active"><a href="#">Dashboard</a></li>
			            </ol> 
	        		</div>
	        	</div>
                
                
                
                
                
                
            </section>
            
            

            <!-- Main content -->
            <section class="content">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    52
                                </h3>
                                <p>
                                    Free Tests
                                   
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                   
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    24+
                                </h3>
                                <p>
                                    Job Openings
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                      
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    Blogs
                                </h3>
                                <p>
                                    Resources
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->

                <!-- top row -->
                <div class="row">
                    <div class="col-xs-12 connectedSortable">
                        
                    </div><!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-6 connectedSortable">       
                        <!-- System Announcement -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="fa fa-bullhorn"></i>
                                <div class="box-title">System Announcements</div>                                     
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                	<div class="box-title">
                                    Welcome MR/MRs 
                                   	NEC online pratic test.
                                   	Please follow the following instruction before you proceed to test.
                                   	</div>
                                   	<h3><button><a href="{{route('proceed.test')}}">Proceed to test</a> </button> </h3>
                                </div>
                            </div>   
                        </div>

                    </section><!-- /.Left col -->

                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-6 connectedSortable">
                        <!-- Youtube video for how to use elab  -->
                       <div class="box box-primary">
                            <div class="box-header">
                                <i class="fa fa-bullhorn"></i>
                                <div class="box-title">How to Use eLabs - Watch Video Here</div>                                     
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="yt-div">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/Oj5E0U4QQVI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen> 
                                    </iframe></div></div>
                                </div>
                            </div>   
                        </div>  <!-- /.box -->  
                    </section><!-- right col -->
                </div><!-- /.row (main row) -->
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
 @endsection