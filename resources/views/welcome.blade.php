@extends('layouts.app')
@section('title')
 Welcome   
@endsection
@section('content')
  <body data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="">
    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                
                 <center><img src="/images/employee.png" height="80px" weight="50px"></center> 
                </a>
               <h2>Welcome back</h2>
              </div>
                
                  <li class="btn btn-primary px-5 mt-3">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
</body>

@endsection