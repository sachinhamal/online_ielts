@extends('admin.layouts.app')
@section('content')
<aside class="right-side">  
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-body">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                                <li class="active">Student List</li>
                            </ol>  
                        </div>
                    </div>
                </div>
            </div>
             

            <div class="row"> 
                <div class="col-lg-12">   
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-user fa-fw"></i>Student List</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button> 
                            </div>
                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">  
                        <div class="box-body"> 
                            <div class="row"> 
                                <div class="col-lg-12"> 
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>User Name</th>
                                                <th>Email</th> 
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Educaction</th>  
                                                <th>Operations</th> 
                                            </tr>
                                        </thead>
                                        <tbody class="font-size14">
                                        @foreach($users as $adm)
                                            <tr class="item{{$adm->id}}">
                                                <td>{{$adm->name}}</td>
                                                <td>{{$adm->name}}</td>
                                                <td>{{$adm->email}}</td>
                                                <td>{{$adm->phone}}</td>
                                                <td>putalisadak,kathmandu</td>
                                                <td>Masters</td> 
                                                <td class="text-center pointer-a"> 
                                                    <a title="Edit" data-toggle="modal" data-id="{{$adm->id}}" data-name="{{$adm->name}}" data-email="{{$adm->email}}" data-role="{{$adm->role}}" id="btn-edit-list">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                   

                                                     

                                                    <a  title="Delete" data-toggle="modal"  class="delete-modal" data-id="{{$adm->id}}" data-name="{{$adm->name}}">
                                                        <i class="fa fa-times"></i> 
                                                    </a>                                                 

                                                   
                                                </td>              
                                            </tr>
                                            @endforeach
                                            

                                        </tbody> 
                                    </table>
                                    </div>
                                </div>
                            </div>   
                        </div> 
                    </div> 
                </div>
            </div>  
        </section><!-- /.content -->
    </aside>
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