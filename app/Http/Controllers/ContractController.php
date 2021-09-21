<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contract = Contract::all();
        return view('admin.contract.index', compact('contract'));
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
        $validate = $this->validate($request, [
            'name' => 'required'
        ],[
            'name.required' => 'Contract Name is Required'
        ]);
        $contract = Contract::create([
            'name' => $request->name
        ]);

        session()->flash('Add', 'Contract Added Successfully');
        return redirect('/contract');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $this->validate($request, [
            'name' => 'required'
        ],[
            'name.required' => 'Contract Name is Required'
        ]);
        $contract = Contract::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        session()->flash('update', 'Contract Updated Successfully');
        return redirect('/contract');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Contract::find($request->id)->delete();
        session()->flash('delete','Contract Deleted Successfully');
        return redirect('/contract');
    }
}
