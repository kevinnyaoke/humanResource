@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card"> --}}
                <div class="card-header">Employee Salaries

                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('addemployee')}}">Add Employee</a></li>
                            <li class="active"><a href="#">View Employee</a></li>
                            <li><a href="{{route('adddepartment')}}">Add Department</a></li>
                            <li><a href="{{route('viewdepartment')}}">View Department</a></li>
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
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Title</th>
                                <th>Salary(Ksh)</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($salaryemployees as $salaryemployees)
                            <tr>
                                <td>{{$salaryemployees->id}}</td>
                                <td>{{$salaryemployees->firstname}}</td>
                                <td>{{$salaryemployees->lastname}}</td>
                                <td>{{$salaryemployees->title}}</td>
                                <td>{{$salaryemployees->amount}}</td>
        
                                <td><a class="btn btn-info" href="">Delete</a></td>
                                <td><a class="btn btn-info" href="">Edit</a></td>
                                
                            </tr>
                            @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection