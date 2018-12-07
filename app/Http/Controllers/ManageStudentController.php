<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ManageStudentController extends Controller
{
    public function index(){
    	$users=User::where('role','student')->orderBy('id','desc')->get();
    	return view('admin.student.list',compact('users'));
    }
}
