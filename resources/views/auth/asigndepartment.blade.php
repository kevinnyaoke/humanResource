@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card"> -->
                <div class="card-header">Admin Dashboard

                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info"  href="{{route('home')}}">Home</a></li>
                            <li><a class="btn btn-info"  href="{{route('addemployee')}}">Add Employee</a></li>
                            <li class="active"><a class="btn btn-info"  href="#">View Employee</a></li>
                            <li><a class="btn btn-info"  href="{{route('adddepartment')}}">Add Department</a></li>
                            <li><a class="btn btn-info"  href="{{route('viewdepartment')}}">View Department</a></li>
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
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($employees as $employees)
                            <tr>
                                <td>{{$employees->id}}</td>
                                <td>{{$employees->firstname}}</td>
                                <td>{{$employees->lastname}}</td>
                                <td>{{$employees->title}}</td>
                                <td><a class="btn btn-info" href="{{route('department',['id'=>$employees->id])}}">Add to Department</a></td>
                
                            </tr>
                            @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection