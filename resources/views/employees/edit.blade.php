@extends('adminlte::page')

@section('title')
Update an employee
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3 class="card-header">Update employee</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                    <h3>Update Employee</h3>
                   </div>
            </div>
               <div class="card-body">
                <form action="{{route('employees.update',$employee->registration_number)}}" class="mt-3" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                  <label for="registration_number">Registration number</label>
                  <input type="text" class="form-control" name="registration_number" placeholder="Registration number" value="{{old('registration_number',$employee->registration_number)}}">
                </div>
                <div class="form-group mb-3">
                    <label for="fullname">Full name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Full name" value="{{old('fullname',$employee->fullname)}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="deparetement">Department</label>
                    <input type="text" class="form-control" name="deparetement" placeholder="Department" value="{{old('deparetement',$employee->deparetement)}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="hire_date">Hire date</label>
                    <input type="date" class="form-control" name="hire date" placeholder="Hire date" value="{{old('hire_date',$employee->hire_date)}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{old('phone',$employee->phone)}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{old('address',$employee->address)}}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="{{old('city',$employee->city)}}">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update employee</button>
                  </div>
                </form>
          
@endsection