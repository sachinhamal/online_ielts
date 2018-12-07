@extends('student.layouts.app')
@section('contents')
  <aside class="right-side">  

        <section class="content">
            <div class="row">

                <div class="col-lg-12">

                    <div class="box">

                        <div class="box-body">

                            <ol class="breadcrumb">

                                <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>

                                <li><a href="">Test</a></li>

                                <li class="active"><a href="">Test List</a> </li>

                            </ol>  

                        </div>

                    </div>

                </div>

            </div>

          <div>
              <<button><a href="{{route('test.take')}}">Take test</a></button>
          </div>            



            <div class="row"> 

                <div class="col-lg-12">   

                    <div class="box box-solid box-primary">

                        <div class="box-header">

                            <h3 class="box-title"><i class="fa fa-user fa-fw"></i>List Of Test Assigned</h3>

                            <div class="box-tools pull-right">

                                <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button> 

                            </div>

                        </div>

                        <div class="box-body"> 

                            <div class="row"> 

                                <div class="col-lg-12"> 

                                    <div class="table-responsive">

                                    <table id="example" class="table table-bordered table-striped">

                                        <thead>

                                            <tr>

                                                <th>S.N</th>

                                                <th>Test Name</th>

                                                <th>Stream</th>

                                                <th>Semester</th>

                                                <th>Year</th>

                                                <th>Audio</th> 

                                                <th>Action</th> 

                                            </tr>

                                        </thead>

                                        <tbody>
                                          <td>Test</td>
                                          <td>test</td>
                                          <td>test</td>
                                          <td>test</td>
                                          <td>test</td>
                                          <td><audio controls="controls"><source src="{{URL::TO('audio/voice_test/565Z.wav')}}" type="audio/x-wav" /></audio></td>
                                          <td>test</td>
                                        </tbody> 

                                    </table>
                             </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
@endsection


    
