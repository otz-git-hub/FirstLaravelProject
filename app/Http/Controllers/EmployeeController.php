<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
{
    // Fetch all employees using Query Builder
    $employees = DB::table('employees')->get();

    return view('employees.index', compact('employees')); // Pass the data to the view
}

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'position' => 'required',
            'salary' => 'required|integer',
        ]);
    
        // Insert employee data using Query Builder
        DB::table('employees')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'salary' => $request->salary,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->back()->with('success', 'Employee added successfully!');
    }
    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'salary' => 'required|integer',
        ]);
    
        // Update employee record using Query Builder
        DB::table('employees')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'salary' => $request->salary,
            'updated_at' => now(),
        ]);
    
        return redirect()->back()->with('success', 'Employee updated successfully!');
    }
    public function destroy($id)
    {
        // Delete employee record using Query Builder
        DB::table('employees')->where('id', $id)->delete();
    
        return redirect()->back()->with('success', 'Employee deleted successfully!');
    }
            
}
