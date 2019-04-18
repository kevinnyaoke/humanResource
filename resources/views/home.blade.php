@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card"> --}}
                <div class="card-header">
                    Admin Dashboard
                </div>


                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                {{-- <div class="card-body"> --}}
                    <div class="btn-group btn-group-justified">
                       <a class="btn btn-info"   href="{{route('addemployee')}}" class="list-group-item">ADD EMPLOYEE</a>
                        <a class="btn btn-info"  href="{{route('viewemployee')}}" class="list-group-item">VIEW EMPLOYEES</a>
                        <a class="btn btn-info"   href="{{route('adddepartment')}}" class="list-group-item">ADD DEPARTMENT</a>
                        <a class="btn btn-info"   href="{{route('viewdepartment')}}" class="list-group-item">VIEW DEPARTMENT</a>
                        <a class="btn btn-info"  href="{{route('viewsalary')}}" class="list-group-item">VIEW EMPLOYEE SALARIES</a>
                        <a class="btn btn-info"  href="{{route('asigndep')}}" class="list-group-item">ASIGN EMPLOYEE TO A DEPARTMENT</a>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection