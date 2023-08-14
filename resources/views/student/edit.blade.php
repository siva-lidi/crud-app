@extends('layouts.app')
@section('content')

<div class="row my-5">
    <div class="col-md-12 col-lg-8 mx-auto">
        <form  method="POST" action="{{route('student.update',$student->id)}}" class="row">
        @csrf
        @method('PUT')
        <h3 class="text-primary text-center mb-3">Personal Details</h3>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="age">Age</label>
                <input type="number" name="age" id="dob" class="form-control" value="{{$student->age}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$student->email}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mobile">Mobile Number</label>
                <input type="numbae" name="mobile" id="mobile" class="form-control" value="{{$student->mobile}}">
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" style="height: 100px">{{$student->address}}</textarea>
            </div>
            <h3 class="text-primary text-center mb-3">Mark Details</h3>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark1">Mark 1</label>
                <input type="number" name="mark1" id="mark1" class="form-control" value="{{$student->mark1}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark2">Mark 2</label>
                <input type="number" name="mark2" id="mark2" class="form-control" value="{{$student->mark2}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark3">Mark 3</label>
                <input type="number" name="mark3" id="mark3" class="form-control" value="{{$student->mark3}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark4">Mark 4</label>
                <input type="number" name="mark4" id="mark4" class="form-control" value="{{$student->mark4}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark5">Mark 5</label>
                <input type="number" name="mark5" id="mark5" class="form-control" value="{{$student->mark5}}">
            </div>
            <div class="form-group mb-3 col-lg-6 col-md-6">
                <label for="mark6">Mark 6</label>
                <input type="number" name="mark6" id="mark6" class="form-control" value="{{$student->mark6}}">
            </div>
            <div class="form-group text-center mt-3">
                <button class="btn btn-primary px-5" type="submit">Update Student</button>
            </div>
        </form>
        
    </div>
</div>
@endsection