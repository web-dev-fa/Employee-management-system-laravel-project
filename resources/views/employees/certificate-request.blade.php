@extends('adminlte::page')

@section('title')
Work certificate request
@endsection

@section('content')
<div class="container">
    <div class="row"></div>
    <div class="col-md-8 mx-auto">
    <div class="card p-3 my-5">
        <div class="cerd-header">
            <h3>Work certificate</h3>
        </div>
        <div class="card-body">
            <p class="lead">
                <b>{{$employee->fullname}}</b> is presently an employee at
            </p>
            <p class="lead">
                <b>{{$employee->deparetement}}</b> departement.
            </p>
            <p class="lead">
                His employement began on <b>{{$employee->hire_date}}</b>.
            </p>
            <p class="lead">
                This certification is beig issued upon the request of <b>{{$employee->fullname}}</b> for whatever purpose it may serve.
            </p>
            <p class="lead">
                Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>.
            </p>
            <p class="m-5">
                _____________
                _____________
            </p>
            
            <div class="my-4">
                <button 
                onclick="document.getElementById('printLink').style.display = 'none'
                setTimeout(function(){
                document.getElementById('printLink').style.display = 'inline-block'
                },1000);
                window.print();"
                
                class="btn btn-sm btn-primary px-3" id="printLink"> Print 
                    <i class="fas fa-print"></i>
                </button>
            </div>   
           </div>
        </div>
    </div>
</div>

@endsection