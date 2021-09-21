<?php

namespace App\Http\Controllers;

use App\Contract;
use App\emp_relatives;
use App\employee;
use App\evaluationType;
use App\insurance_grate;
use App\insurancetype;
use App\media;
use App\relatives_type;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = employee::all();
        $contract = Contract::all();
        $insurance_type = insurancetype::all();
        $evaluation_type = evaluationType::all();
        $insurance_grade = insurance_grate::all();

        return view('admin.employee.index', compact('employee', 'contract', 'insurance_type', 'evaluation_type', 'insurance_grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();
        $validate = $this->validate($request,[
            'name' => 'required',
            'Job_number' => 'required',
            'Job_title' => 'required',
            'salary' => 'required',
            'contract_id' => 'required',
            'insurance_type_id' => 'required',
            'evaluation_type_id' => 'required',
            'insurance_grade_id' => 'required',
            'family_members' => 'required',
            'wives_number' => 'required',
            'grandchildren' => 'required'
        ]);

        $employee = employee::create([
            'name' => $request->name,
            'Job_number' => $request->Job_number,
            'Job_title' => $request->Job_title,
            'salary' => $request->salary,
            'contract_id' => $request->contract_id,
            'insurance_type_id' => $request->insurance_type_id,
            'evaluation_type_id' => $request->evaluation_type_id,
            'insurance_grade_id' => $request->insurance_grade_id,
            'family_members' => $request->family_members,
            'wives_number' => $request->wives_number,
            'grandchildren' => $request->grandchildren
        ]);

        session()->flash('Add', 'Employee added successfuly');

        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = employee::where('id', $id)->first();
        $emp_relative = emp_relatives::where('emp_id', $id)->get();
        $relative_type = relatives_type::all();
        $media = media::where('column_id', $id)->where('model_name', 'like', '%employee%')->get();
        return view('admin.employee.emp_details', compact('employee', 'emp_relative', 'relative_type', 'media'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
