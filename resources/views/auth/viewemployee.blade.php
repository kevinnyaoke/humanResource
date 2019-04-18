@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card"> -->
                <div class="card-header">Registered Employees

                    <div>
                        <ul class="btn-group btn-group-fa-align-justify">
                        
                            <li><a class="btn btn-info" href="{{route('home')}}">Home</a></li>
                            <li><a class="btn btn-info" href="{{route('addemployee')}}">Add Employee</a></li>
                            <li ><a class="btn btn-info" href="#">View Employee</a></li>
                            <li><a  class="btn btn-info"href="{{route('adddepartment')}}">Add Department</a></li>
                            <li><a  class="btn btn-info"href="{{route('viewdepartment')}}">View Department</a></li>
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
                    
    <div class="container">
        <h4>Search Employee</h4>
        <div class="form-group" pull-right>
            <input type="text" class="form-control search" placeholder="Search" id="myInput">
        </div>
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Gender</th>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @foreach($employees as $employees)
                            <tr>
                                <td>{{$employees->id}}</td>
                                <td>{{$employees->firstname}}</td>
                                <td>{{$employees->lastname}}</td>
                                <td>{{$employees->email}}</td>
                                <td>{{$employees->phone}}</td>
                                <td>{{$employees->gender}}</td>
                                <td>{{$employees->title}}</td>
                                <td><a class="btn btn-danger" href="{{route('delete',['id'=>$employees->id])}}">Delete</a></td>
                                <td><a class="btn btn-success" href="{{route('edit',['id'=>$employees->id])}}">Edit</a></td>
                                <td><a class="btn btn-success" href="{{route('salary',['id'=>$employees->id])}}">Asign salary</a></td>
    
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection