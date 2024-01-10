
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <div class="mb-3">
                        <a href="{{ route('sstudent.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                  
                    <table class="table">
                    
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($sstudents as $sstudent)
                            <tr>
                                <th scope="row">{{ $sstudent->id }}</th>
                                <td>{{ $sstudent->name }}</td>
                                <td>{{ $sstudent->roll_no }}</td>
                                <td>{{ $sstudent->registration_no }}</td>
                                <td>{{ $sstudent->email }}</td>
                                <td>{{ $sstudent->address }}</td>
                                <td>
                                    <a href="{{ route('sstudent.edit' , $sstudent->id) }}" class="btn btn-outline-warning">
                                      <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('sstudent.show' , $sstudent->id) }}" class="btn btn-outline-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                   <form method="post" action = "{{ route('sstudent.destroy' , $sstudent->id) }}" class="d-inline-block">
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
