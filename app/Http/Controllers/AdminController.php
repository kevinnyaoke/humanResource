<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Salaryemployee;
use App\Departmentemployee;

class AdminController extends Controller
{
    public function submitemployee(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'title'=>'required',
        ]);
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $title=$request->input('title');

        Employee::create([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender,
            'title'=>$title,
            ]);
            return redirect()->back()->with('success','new employee added successfully');
    }

    public function viewemployee(){
        $employees=Employee::all();
        return view('auth.viewemployee',compact('employees'));
    }

    public function adddepartment(){
        return view('auth.adddepartment');
    }

    public function submitdepartment(Request $request){
        $request->validate([
            'department'=>'required',
        ]);
        $department=$request->input('department');
        Department::create([
            'name'=>$department,
        ]);
        return redirect()->back()->with('success','New department added successfully');
    }

    public function viewdepartment(){
        $departments=Department::all();
        return view('auth.viewdepartment',compact('departments'));
    }

    public function delete($id){
        $employees=Employee::find($id);
        $employees->delete();
        return redirect()->back()->with('success','Member deleted successfully');
    }

    public function edit(int $id){
        $employees=Employee::find($id);
        return view('auth.editemployee')->with('employees',$employees);
    }

    public function update(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'title'=>'required',
        ]);
        $id=$request->input('id');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $title=$request->input('title');
    
        $employees=Employee::find($id);
            if(!$employees){
                return redirect()->back()->with('error','no such employee in the system');
            }
            
        $employees->firstname=$firstname;
        $employees->lastname=$lastname;
        $employees->email=$email;
        $employees->phone=$phone;
        $employees->gender=$gender;
        $employees->title=$title;
        $employees->update();
        return redirect()->back()->with('success','Employee has been updated successfully');

        
    }

    public function salary($id){
        $employee=Employee::find($id);
        return view('auth.employeesalary')->with('employee',$employee);
    }

    public function deletedep($id){
        $departments=Department::find($id);
        $departments->delete();
        return redirect()->back()->with('success','Department deleted successfully');
    }
    public function asignsalary(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'title'=>'required',
            'salary'=>'required',
        ]);
        $id=$request->input('id');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $title=$request->input('title');
        $salary=$request->input('salary');

        Salaryemployee::create([
            'id'=>$id,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender,
            'title'=>$title,
            'amount'=>$salary,

        ]);
        return redirect()->back()   ->with('success','Salary assigned  successfully');
    }

    public function viewsalary(){
        $salaryemployees=Salaryemployee::all();
        return view('auth.viewsalary',compact('salaryemployees'));

    }

    public function editdep($id){
        $departments=Department::find($id);
        return view('auth.editdepartment')->with('departments',$departments);
    }

    public function updatedep(Request $request){
        $request->validate([
         
            'name'=>'required',
        ]);

        $id=$request->input('id');
        $name=$request->input('name');

        $departments=Department::find($id);
        if(!$departments){
            return redirect()->back()->with('error','cannot update');
        }
        $departments->id=$id;
        $departments->name=$name;
        $departments->update();
        return redirect()->back()->with('success','New Department updated successfully');        
    
    }

    public function asigndep(){
        $employees=Employee::all();
        return view('auth.asigndepartment',compact('employees'));
    }

    public function department($id){
        $employees=Employee::find($id);
        $departments=Department::all();
        return view('auth.todepartment',['employees'=>$employees,'departments'=>$departments]);
    }

    public function submitdep(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'title'=>'required',
            'department'=>'required',
        ]);
        $id=$request->input('id');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $title=$request->input('title');
        $department=$request->input('department');

        Departmentemployee::create([
            'id'=>$id,
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender,
            'title'=>$title,
            'department'=>$department,

        ]);
        return redirect()->back()->with('success','Employee assigned to the department successfully');
    }
  
}