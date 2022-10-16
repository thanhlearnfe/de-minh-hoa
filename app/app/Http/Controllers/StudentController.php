<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

class StudentController extends Controller
{
  
    public function get_all_student()
    {
        $all_data['students'] = DB::select('select * from students');
        // dd($all_data);
        return view('student_manage',$all_data);
    }
    public function get_student_by_id()
    {
        $id = $_GET['id'];
        $data['student'] = DB::select('select * from students where id=?',[$id]);

        return view('student_edit',$data);
    }
    public function student_update(){

        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        // print_r($birthday);
        // die();
        DB::update('update students set fullname=?,birthday=?,address=? where id=?',[$fullname,$birthday,$address,$id]);
        return redirect('student/show');
    }
    public function delete()
    {
        $id = $_GET['id'];
        DB::delete('delete from students where id=?',[$id]);
        return redirect('student/show');
    }
    public function create()
    {
        // $student = new Student();
        // $student->fullname='Phan Xuan Thanh';
        // $student->birthday='03/10/2002';
        // $student->address='Hoang Mai,Nghe An';
        // $student->save();
        $fullname = $_POST['fullname'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        DB::insert('insert into students (fullname, birthday,address) values (?, ?,?)', [$fullname,$birthday,$address]);
        return redirect('student/show');
    }
    
}
