@extends('student.layouts.app')  
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> 
@section('contents')
     
    <!-- Right side column. Contains the navbar and content of the page -->

        <aside class="right-side">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <h1 class="text-center">
                    Tests 
                </h1>
            
                <h1 id="demo" class="text-center">

                    Starting Timer

                </h1>


           </section>

            <!-- Main content -->

            <section class="content"> 

                <!-- Main row -->

                <div class="row">

                    <!-- Left col -->

                    <section class="col-lg-12 connectedSortable"> 

                        <!-- Box (with bar chart) -->

                        <div class="box box-primary" id="loading-example">

                            <div class="box-header with-border">

                                <!-- tools box -->

                                <div class="pull-right box-tools"> 

                                    <button class="btn btn-primary btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

                                    <!-- <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> -->

                                </div><!-- /. tools -->

                                <i class="fa fa-list"></i>



                                <h3 class="box-title">Part 1</h3>
                                
                            </div><!-- /.box-header -->

                               

                            <form role="form" action="" method="post" enctype='multipart/form-data'>

                            {{csrf_field()}}

                                <div class="box-body">

                                    <div class="row">

                                        <div class="col-lg-8 col-lg-offset-2"> 

                                            <div class="form-group">

                                                <label>WRITING TASK 1</label>

                                     <p>You should spend about&nbsp;<strong>20</strong>&nbsp;minutes on this task.</p>
                                    <p><strong>The graph below shows the number of enquiries received by the Tourist Information Office in one city over a six-month period in 2011.</strong></p>
                                   <p>Summarize the information by selecting and reporting the main features and make comparisons where relevant.</p>
                                   <p>You should write at least&nbsp;<strong>150</strong>&nbsp;words.</p>
                                   <p>You should write at least&nbsp;<strong>150</strong>&nbsp;words.</p>
                                   <p style="text-align: center; font-size: 15px;"><img style="border-width: 0px; border-image-width: initial; max-width: 500px; max-height: 300px; -webkit-text-stroke-width: 0px;" src="https://ieltsonlinetests.com/sites/default/files/2018-11/a1.jpg" alt="" /><br /><br /></p>  
                                            </div>

                                        <div class="form-group">

                                                <label for="exampleInputEmail1">Answer Here</label>

                                                <textarea id="textarea" class="ckeditor" name="unit_description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""> 

                                                </textarea>
                                            </div>  

                                        </div>

                                    </div>

                                </div><!-- /.box-body -->



                                <div class="box-footer text-center">

                                    <button type="submit" class="btn btn-primary">Save</button> 

                                </div>

                            </form> 

                        </div><!-- /.box -->        

                         

                    </section><!-- /.Left col -->

                    

                </div><!-- /.row (main row) -->

            </section><!-- /.content -->

        </aside><!-- /.right-side -->
@section('scripts')
<script>
      CKEDITOR.replace( 'textarea' );
</script>
<script>
    $( document ).ready(function() {
    console.log( "ready!" );

        if ( localStorage.getItem("a") === null) {
            var a = new Date().getTime()+1200000;
            localStorage.a = a;
            }else{
          // localStorage.clear();
          var a = localStorage.a;
        }
        var countDownDate = a;
        // alert(countDownDate);
    // Set the date we're counting down to
    //var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Time is up!";
    }
    }, 1000);

});
</script>
@endsection

@endsection
 
