@extends('student.layouts.app')  
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> 
@section('contents')
     
    <!-- Right side column. Contains the navbar and content of the page -->

        <aside class="right-side">

            <!-- Content Header (Page header) -->

            <section class="content-header" >

                <h1 class="text-center">
                    Tests 
                </h1>
                <div class="rf-bar-time">
                <h1 id="demo" class="text-center">

                    Starting Timer

                </h1>
                </div>

           </section>

            <!-- Main content -->

            <section class="content" style="overflow-y:auto"> 

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

                               

                            <!-- <form role="form"> -->

                            

                                <div class="box-body">

                                    <div class="row">

                                        <div class="col-lg-8 col-lg-offset-2"> 

                                            <div class="form-group">
                                              <h1>Speaking practice test 1</h1>

<h1>In the Speaking test, you will have a discussion with a certified examiner. It will be interactive and as close to a real-life situation as a test can get.</h1>

<p>The Speaking test is 11-14 minutes long and is in three parts.</p>

<table border="0" cellpadding="1" cellspacing="1">
	<tbody>
		<tr>
			<td>
			<p>Part 1</p>
			</td>
			<td>
			<p>You will answer questions about yourself and your family.</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Part 2</p>
			</td>
			<td>
			<p>You will speak about a topic.</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Part 3</p>
			</td>
			<td>
			<p>You will have a longer discussion about the topic introduced in Part 2.</p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>The Speaking test is the same for both IELTS Academic and IELTS General Training tests.</p>

<h2>How to practise</h2>

<p>This practice material is designed for two people working together. Find a study partner to help you practise. This might be a teacher or a friend.&nbsp;</p>

<p>Take the three parts of this practice test one after another without a break to make your practice as realistic as possible.&nbsp;</p>

<p>Remember, you need to speak fluently, clearly and accurately. It is important to say as much as you can and to be spontaneous.&nbsp;Do not prepare answers in advance.&nbsp;</p>

<p>Record yourself if you can so that you can go back and check your performance.</p>

<h2>Review your Speaking test</h2>

<p>Listen to your recordings and discuss your test with your study partner. Think about how you spoke. Were you fluent? Did your speech sound natural? Were you able to express yourself clearly?</p>

<p>Use the audio recordings and transcripts in each section to gain an insight into the test format. Note that these are not model answers, so do not try to imitate them.</p>

<p>There are no &#39;answers&#39;. You and your study partner will need to assess how well you do.</p>	 
                                            </div>

                                         <div class="form-group">

                                            <label for="exampleInputEmail1">Record Here</label>
                                            <div id="controls">
									               <button id="recordButton">Record</button>
									               <button id="pauseButton" disabled>Pause</button>
									               <button id="stopButton" disabled>Stop</button>
									          </div>
									          <h3>Recordings</h3>
									          <ol id="recordingsList"></ol>    
                                                
                                         </div>  

                                        </div>

                                    </div>

                                </div><!-- /.box-body -->



                                <div class="box-footer text-center">

                                    <button type="submit" class="btn btn-primary">Save</button> 

                                </div>

                            <!-- </form>  -->

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
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script src="{{URL::TO('audio/js/app.js')}}"></script> 

<script type="text/javascript">
	var xhr=new XMLHttpRequest();
	xhr.open('GET','your url goes here');
	xhr.send();
</script>
@endsection

@endsection
 
