
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table">
                        <thead>
                          <tr>
                            {{-- <th scope="col">ID</th> --}}
                            <th scope="col">Name</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                          </tr>
                        </thead>
                        <tbody>   
                            <tr>
                                {{-- <th scope="row">1</th> --}}
                                <td>{{ $sstudent->name }}</td>
                                <td>{{ $sstudent->roll_no }}</td>
                                <td>{{ $sstudent->registration_no }}</td>
                                <td>{{ $sstudent->email }}</td>
                                <td>{{ $sstudent->address }}</td>
                            </tr> 
                        </tbody>
                      </table>
                      <div class="mb-4">
                        <a href="{{ route('sstudent.index') }}" class="btn btn-outline-dark">Back</a>
                    </div>   
                </div>
             
            </div>
        </div>
    </div>
</div>
@endsection
