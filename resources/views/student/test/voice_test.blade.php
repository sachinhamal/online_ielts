@extends('student.layouts.app')   
@section('contents')
     <style>
        .table th, .table td {
            padding: 5px 0.75rem 5px 0.75rem !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
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

@endsection
@section('scripts')
 <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
 <script src="{{URL::TO('audio/js/app.js')}}"></script>  
@endsection  
