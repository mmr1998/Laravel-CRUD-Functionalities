<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class studentController extends Controller
{
    public function index(){
      $students = Students::paginate(2);
      return view('welcome', compact('students'));
    }

    public function add(){
      return view('create');
    }
    public function store(Request $request){
      $this->validate($request,[
        'firstname' => 'required',
        'lastname' => 'required',
        'studentid' => 'required',
        'phnno' => 'required',
        'mail' => 'required'
      ]);
      $student = new Students;
        $student->Student_id = $request->studentid;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->phone = $request->phnno;
        $student->email = $request->mail;
        $student->save();
        return redirect(route('home'))->with('sucessmsg','Data Inserted Sucessfully!');
    }
    public function edit($id){
      $student = Students::find($id);
      return view('edit', compact('student'));
    }
    public function update(Request $request, $id){
      $this->validate($request,[
        'firstname' => 'required',
        'lastname' => 'required',
        'studentid' => 'required',
        'phnno' => 'required',
        'mail' => 'required'
      ]);
      $student =  Students::find($id);
        $student->Student_id = $request->studentid;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->phone = $request->phnno;
        $student->email = $request->mail;
        $student->save();
        return redirect(route('home'))->with('sucessmsg','Data Updated Sucessfully!');
    }
    public function delete($id){
      Students::find($id)->delete();
      return redirect(route('home'))->with('sucessmsg','Data Removed Sucessfully!');
    }
}
