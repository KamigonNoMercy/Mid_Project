<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(5);
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone_num' => 'required', 
            'gender' => 'required',
        ]);
    
        $slug = Str::slug($request->name);
    
        Employee::create([
            'name' => $request->name,
            'slug' => $slug,
            'age' => $request->age,
            'address' => $request->address,
            'phone_num' => $request->phone_num,
            'gender' => $request->gender,
        ]);
    
        return redirect()->route('employee.index');
    }

    public function show($slug)
    {
        $employee = Employee::where('slug', $slug)->first();
    
        // Ensure the employee is found before attempting to display it
        if (!$employee) {
            abort(404); // or handle it in a way that makes sense for your application
        }

        return view('employee.show', compact('employee'));
    }

    public function edit($slug)
    {
        $employee = Employee::where('slug', $slug)->first();
        
        // Ensure the employee is found before attempting to edit it
        if (!$employee) {
            abort(404); // or handle it in a way that makes sense for your application
        }

        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $slug){
        $employee = Employee::where('slug', $slug)->first();
        $employee->update();

        return redirect()->route('employee.index');
    }

    public function delete($slug){
        $employee = Employee::where('slug', $slug)->first();
        $employee->delete();

        return redirect()->route('employee.index');
    }
}
