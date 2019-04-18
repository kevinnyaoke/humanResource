@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <div class="card"> -->
                <div class="card-header">Admin Dashboard
                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info"  href="{{route('home')}}">Home</a></li>
                            <li><a class="btn btn-info"  href="{{route('addemployee')}}">Add Employee</a></li>
                            <li><a class="btn btn-info"  href="{{route('viewemployee')}}">View Employee</a></li>
                            <li><a class="btn btn-info"  href="{{route('adddepartment')}}">Add Department</a></li>
                            <li class="active"><a class="btn btn-info"  href="viewdepartment">View Department</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('submitdepartment')}}">
                        <h4>New Department</h4>
                        <hr>
                        @include('includes.message')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="department">Department Name:</label>
                            <input type="text" class="common-input mt-0" id="department" name="department">
                        </div>
                        
                        <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span
                                class="mr-10">Register</span><span class="lnr lnr-arrow-right"></span></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection