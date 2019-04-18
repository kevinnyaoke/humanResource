@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- <div class="card"> -->
            <div class="card-header">Admin Dashboard

                <div>
                    <ul class="nav nav-pills nav-justified">
                        <li><a class="btn btn-info" href="{{route('home')}}">Home</a></li>
                        <li class="active"><a class="btn btn-info" href="{{route('viewemployee')}}">View Employee</a>
                        </li>
                        <li><a class="btn btn-info" href="{{route('adddepartment')}}">Add Department</a></li>
                        <li><a class="btn btn-info" href="{{route('viewdepartment')}}">View Department</a></li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="container">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('submitemployee')}}">
                        <h4>New Employee</h4>
                        <hr>
                        @include('includes.message')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" role="form">
                            <label for="firstname">First Name:</label>
                            <input type="text" class="common-input mt-0" id="firstname" name="firstname">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" class="common-input mt-0" id="lastname" name="lastname">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Email:</label>
                            <input type="email" class="common-input mt-0" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Phone:</label>
                            <input type="text" class="common-input mt-0" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="title">Job Title:</label>
                            <input type="text" class="common-input mt-0" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="" id="gender" name="gender">
                                <option>Select...</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <button type="submit" class="primary-btn hover"><span class="mr-10">Register</span></button>

                    </form>
                    <div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection