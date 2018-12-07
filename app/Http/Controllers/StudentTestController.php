<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
class StudentTestController extends Controller
{
    public function index(){
        
    	return view('student.test.index');
    }

    public function take_test(){
    	return view('student.test.take_test');
    }
    public function ajax(){
        return 'sachin';
    }
    public function post_test(Request $request){
        print_r($_FILES); //this will print out the received name, temp name, type, size, etc.
        
         if ($request->hasFile('audio_data')) {
                $file=$request->audio_data;
                $audio_name =  $file->getClientOriginalExtension().'.wav';
                $location = public_path('/audio/voice_test/');
                
                $file->move($location,$audio_name);
        }return 'success';
        
   }

   public function proceed_test(){
    return view('student.test.take_test');
   }

   public function speaking(){
    return view('student.test.speaking');
   }
}