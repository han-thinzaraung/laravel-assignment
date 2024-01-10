<?php

namespace App\Http\Controllers;

use App\Models\Sstudent;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSstudentRequest;
use App\Http\Requests\UpdateSstudentRequest;

class SstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sstudents = Sstudent::all();
        // return $students;
        return view('sstudent.index',compact('sstudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sstudent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSstudentRequest $request)
    {
       $sstudent = new Sstudent();
       $sstudent->name = $request->name;
       $sstudent->roll_no = $request->roll_no;
       $sstudent->registration_no = $request->registration_no;
       $sstudent->email = $request->email;
       $sstudent->address = $request->address;
       $sstudent->save();
       return redirect()->route('sstudent.index' , compact('sstudent'));
    //   return $request;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sstudent $sstudent)
    {
        return view('sstudent.detail', compact('sstudent'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sstudent $sstudent)
    {
        return view('sstudent.edit',compact('sstudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSstudentRequest $request, Sstudent $sstudent)
    {
        $sstudent->name = $request->name;
        $sstudent->roll_no = $request->roll_no;
        $sstudent->registration_no = $request->registration_no;
        $sstudent->email = $request->email;
        $sstudent->address = $request->address;
        $sstudent->update();
        return redirect()->route('sstudent.index' , compact('sstudent'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sstudent $sstudent)
    {
        if($sstudent){
            $sstudent->delete();
        }
        return redirect()->back();
    }
}
