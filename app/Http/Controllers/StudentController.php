<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $data = $request->all();
        Student::create($data);
        echo"success create students";
    }
    public function get_all_students(){
        
        $students = Student::all();
       
        
        return view('students.index', compact('students'));
    }
    public function edit($id){
        // Tìm đến đối tượng muốn update
        $students = Student::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('students.edit', compact('students'));
    }

    public function update(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $students = Student::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        

        // Update user
        
        Student::where('id',$id)->update([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'date' => $request->date,
        ]);
        echo"success update Student";
    }

}
