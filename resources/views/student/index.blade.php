@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Students</h3>
                    <a href="{{ route('student.create') }}" class="btn btn-success text-end"><span><i class="fas fa-plus me-2"></i></span>Add Student</a>
                </div>
                <div class="card-body">
                    @if (count($students) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Mark</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->age}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->total}}</td>
                                        <td><a href="{{ route('student.edit',$student->id) }}" class="btn btn-primary"><span><i class="fas fa-pen me-2"></i></span>Edit</a></td>
                                        <td>
                                            <form method="POST" action="{{route('student.delete',$student->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><span><i class="fas fa-trash me-2"></i></span>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <h3 class="text-danger text-center">Add Students</h3>
                    @endif
                </div>
                <div class="mx-auto">
                    {{$students->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection