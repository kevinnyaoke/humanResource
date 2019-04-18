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
                        <li class="active"><a class="btn btn-info"  href="{{route('viewemployee')}}">View Employee</a></li>
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
                <form method="POST" action="{{route('submitdep')}}">
                    <h4>New Employee</h4>
                    <hr>
                    @include('includes.message')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group" role="form">
                        <label for="firstname">First Name:</label>
                        <input  type="text" class="common-input mt-0" id="firstname" name="firstname"
                            value="{{$employees->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input  type="text" class="common-input mt-0" id="lastname" name="lastname"
                            value="{{$employees->lastname}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Email:</label>
                        <input  type="email" class="common-input mt-0" id="email" name="email"
                            value="{{$employees->email}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone:</label>
                        <input  type="text" class="common-input mt-0" id="phone" name="phone"
                            value="{{$employees->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Job Title:</label>
                        <input  type="text" class="common-input mt-0" id="title" name="title"
                            value="{{$employees->title}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Gender:</label>
                        <input  type="text" class="common-input mt-0" id="sel1" name="gender"
                            value="{{$employees->gender}}">
                    </div>

                    <div class="form-group">
                        <label for="department">Department:</label>
                        <select type="text" class="" id="department" name="department">
                            <option>select..</option>
                            @foreach($departments as $departments)
                            <option>{{$departments->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="text" name="id" value="{{$employees->id}}" hidden>
                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span
                            class="mr-10">submit</span><span class="lnr lnr-arrow-right"></span></button>
                </form>
            </div>
        </div>


    </div>
</div>
</div>
</div>
@endsection