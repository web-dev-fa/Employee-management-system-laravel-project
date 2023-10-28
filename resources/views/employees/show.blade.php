@extends('adminlte::page')

@section('title')
Show employee
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3 class="card-header">Show employee</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                    <h3>{{$employee->fullname}}</h3>
                   </div>
                   <hr>
                   <div class="mt-3 text-center font-weight-bold text-uppercase">
                    <a href="{{route('vacation.request',$employee->registration_number)}}" class="btn btn-outline-dark">Vacation Request</a>
                    <a href="{{route('certificate.request',$employee->registration_number)}}" class="btn btn-outline-danger">Work Certificate</a>

                   </div>
            </div>
               <div class="card-body">
                <div class="form-group mb-3">
                  <label for="registration_number">Registration number</label>
                  <input type="text" disabled class="form-control" name="registration_number" placeholder="Registration number" value="{{$employee->registration_number}}" maxlength="8">
                </div>
                <div class="form-group mb-3">
                    <label for="fullname">Full name</label>
                    <input type="text" disabled class="form-control" name="fullname" placeholder="Full name" value="{{$employee->fullname}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="deparetement">Department</label>
                    <input type="text" disabled class="form-control" name="deparetement" placeholder="Department" value="{{$employee->deparetement}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="hire_date">Hire date</label>
                    <input type="date" disabled class="form-control" name="hire date" placeholder="Hire date" value="{{$employee->hire_date}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="number" disabled class="form-control" name="phone" placeholder="Phone" value="{{$employee->phone}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" disabled class="form-control" name="address" placeholder="Address" value="{{$employee->address}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" disabled class="form-control" name="city" placeholder="City" value="{{$employee->city}}">
                  </div>
          
@endsection