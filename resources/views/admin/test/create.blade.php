@extends('admin.layouts.app')
 @section('content')
  <aside class="right-side"> 
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-bullhorn fa-fw"></i>Quick Links</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button> 
                                </div>
                            </div>
                       

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-body">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                                    <li><a href="#">Test Management</a></li>
                                    <li class="active">Create Test</li>
                                </ol> 
                            </div>
                        </div>
                    </div>
                </div>
                 
                    @if(Session::has('message'))
			                      <div class="alert alert-success">
			                        <ul>
			                               {{Session::get('message')}}
			                        </ul>
			                       </div>

			         @endif
			                
			         @if (count($errors) > 0)
			                        <div class="alert alert-danger">
			                        <ul>
			                                @foreach ($errors->all() as $error)
			                                    <li>{{ $error }}</li>
			                                @endforeach
			                            </ul>
			                        </div>

                   @endif
                <div class="row"> 
                    <div class="col-lg-12">   
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-cogs fa-fw"></i>Add Test</h3>
                            </div>
                             <form method="post"   action="" id="add_stud">
                                            {{csrf_field()}}
                               <div class="box-body"> 
                                <div class="row">
                                    <div class="col-lg-12 select-pad-bot">
 
                                        <div class="stream form-group ">
                                            <label for="">Title</label>
                                            <div class="input-group" >
                                                <input type="text" name="test_name">
                                               <p class="errorStream text-center alert alert-danger"  hidden></p>
                                            </div>
                                        </div>  
                                    </div> 

                                     <div class="col-lg-12 select-pad-bot">
 
                                        <div class="stream form-group ">
                                            <label for="">Test Category</label>
                                            <div class="input-group" >
                                                <select>
                                                	<option>Academic</option>
                                                	<option>General</option>
                                                </select>
                                               <p class="errorStream text-center alert alert-danger"  hidden></p>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>

                                 <div class="col-lg-12 select-pad-bot">
 
                                        <div class="stream form-group ">
                                            <label for="">Upload audio</label>
                                            <div class="input-group" >
                                              <input type="file" name="speaking_audio">
                                               <p class="errorStream text-center alert alert-danger"  hidden></p>
                                            </div>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            </div> 
                        </form>
                        </div> 
                    </div>
                </div>  
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
@endsection
@section('scripts')
    <script>
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
    </script>

 @endsection