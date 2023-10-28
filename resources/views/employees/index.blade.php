@extends('adminlte::page')

@section('title')
List of employees
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3 class="card-header">List of employees</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-3">
                <div class="card-header">
                   <div class="text-center font-weight-bold text-uppercase">
                    <h3>Employees</h3>
                   </div>
            </div>
               <div class="card-body">
            <table id="myTable" class="table table-bordered table-string">
<thead>
    <tr>
        <td>ID</td>
        <td>Full name</td>
        <td>Departement</td>
        <td>Hired</td>
        <td>Actions</td>
    </tr>
</thead>
<tbody>
    @foreach ($employees as $key => $employee)
    <tr>
        <th>{{$key+=1}}</th>
        <th>{{$employee->fullname}}</th>
        <th>{{$employee->deparetement}}</th>
        <th>{{$employee->hire_date}}</th>
        <th class="d-flex justify-content-center align-items-center">
            <a href="{{route('employees.show', $employee->registration_number)}}"
                class="btn btn-sm btn-primary">
                <i class="fas fa-eye"></i>
            </a>
            <a href="{{route('employees.edit', $employee->registration_number)}}"
                class="btn btn-sm btn-warning mx-2">
                <i class="fas fa-edit"></i>
            </a>

           <form id="{{$employee->registration_number}}" action="{{route('employees.destroy', $employee->registration_number)}}" method="post">
       @method('DELETE')
       @csrf
        <button type="submit" class="btn btn-sm btn-danger" onclick="deleteEmp"> 
                <i class="fas fa-trash"></i>
            </button>
        </form>  
        </th>
    </tr>
    @endforeach
</tbody>
 </table>
        </div>
 
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom : 'Bfrtip',
            buttons : [
            'copy','excel','csv','pdf','print','colvis'
       ] 
    })
    });
    function deleteEmp(id){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById(id).submit();
    
  }
})
}
</script>
@if (session()->has('success'))
<script>
    Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: "{{session()->get('success')}}",
  showConfirmButton: false,
  timer: 2000
})
</script>
    
@endif
    
@endsection