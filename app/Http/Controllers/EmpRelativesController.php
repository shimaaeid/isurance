<?php

namespace App\Http\Controllers;

use App\emp_relatives;
use Illuminate\Http\Request;

class EmpRelativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $validate = $this->validate($request, [
            'name' => 'required',
            'relative_id' => 'required',
            'emp_id' => 'required'
        ]);

        $emp_relatives = emp_relatives::create([
            'name' => $request->name,
            'relative_id' => $request->relative_id,
            'emp_id' => $request->emp_id

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\emp_relatives  $emp_relatives
     * @return \Illuminate\Http\Response
     */
    public function show(emp_relatives $emp_relatives)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\emp_relatives  $emp_relatives
     * @return \Illuminate\Http\Response
     */
    public function edit(emp_relatives $emp_relatives)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\emp_relatives  $emp_relatives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emp_relatives $emp_relatives)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\emp_relatives  $emp_relatives
     * @return \Illuminate\Http\Response
     */
    public function destroy(emp_relatives $emp_relatives)
    {
        //
    }
}
