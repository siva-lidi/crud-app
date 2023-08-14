<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=student::paginate(10);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs=$request->validate([
            'name' => 'required|string',
            'age'=>'required|integer',
            'email'=>'required|email',
            'mobile'=>'required|integer',
            'address'=>'required',
            'mark1'=>'required|integer',
            'mark2'=>'required|integer',
            'mark3'=>'required|integer',
            'mark4'=>'required|integer',
            'mark5'=>'required|integer',
            'mark6'=>'required|integer'
        ]);
        $inputs['total']=collect(request(['mark1','mark2','mark3','mark4','mark5','mark6']))->sum();
        student::create($inputs);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=student::findOrFail($id);
        return view('student.edit' ,compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=student::findOrFail($id);
        $inputs=$request->validate([
            'name' => 'required|string',
            'age'=>'required|integer',
            'email'=>'required|email',
            'mobile'=>'required|integer',
            'address'=>'required',
            'mark1'=>'required|integer',
            'mark2'=>'required|integer',
            'mark3'=>'required|integer',
            'mark4'=>'required|integer',
            'mark5'=>'required|integer',
            'mark6'=>'required|integer'
        ]);
        $inputs['total']=collect(request(['mark1','mark2','mark3','mark4','mark5','mark6']))->sum();
        $user->update($inputs);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=student::findOrFail($id);
        $user->delete();
        return redirect()->route('home');
    }
}
