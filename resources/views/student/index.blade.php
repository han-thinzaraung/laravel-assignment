
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <div class="mb-3">
                        <a href="{{ route('student.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                  
                    <table class="table">
                    
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ph No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->ph_no }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <a href="{{ route('student.edit' , $student->id) }}" class="btn btn-outline-warning">
                                      <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('student.show' , $student->id) }}" class="btn btn-outline-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                   <form method="post" action = "{{ route('student.destroy' , $student->id) }}" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                   </form>
                                </td> 
                            </tr> 
                            @endforeach
                      
                        </tbody>
                      </table>
                </div>
             
            </div>
        </div>
    </div>
</div>
@endsection
