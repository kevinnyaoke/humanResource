@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <div class="card"> -->
                <div class="card-header">Registered Departments
                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info"  href="{{route('home')}}">Home</a></li>
                            <li><a class="btn btn-info"  href="{{route('addemployee')}}">Add Employee</a></li>
                            <li><a class="btn btn-info"  href="{{route('viewemployee')}}">View Employee</a></li>
                            <li><a class="btn btn-info"  href="{{route('adddepartment')}}">Add Department</a></li>
                            <li class="active"><a  class="btn btn-info" href="{{route('viewdepartment')}}">View Department</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @include('includes.message')
                    <table class="table table-hover" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($departments as $departments)
                            <tr>
                                <td>{{$departments->id}}</td>
                                <td>{{$departments->name}}</td>
                             
                                <td><a class="btn btn-danger" href="{{route('deletedep',['id'=>$departments->id])}}">Delete</a></td>
                                <td><a class="btn btn-success" href="{{route('editdep',['id'=>$departments->id])}}">Edit</a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection