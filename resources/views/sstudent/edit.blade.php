@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 shadow">
                <div class="card-body m-3">
                        <div>
                            <form action="{{route('sstudent.update', $sstudent->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name<small class="danger">*</small></label>
                                <input type="text" name="name" class="form-control" value="{{ $sstudent->name }}">
                                @error('name')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Roll No.<small class="danger">*</small></label>
                                <input type="text" name="roll_no" class="form-control" value="{{ $sstudent->roll_no }}">
                                @error('roll_no')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Registration No. <small class="danger">*</small></label>
                                <input type="text" name="registration_no" class="form-control" value="{{ $sstudent->registration_no }}">
                                @error('registration_no')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Email <small class="danger">*</small></label>
                                <input type="text" name="email" class="form-control"  value="{{ $sstudent->email }}">
                                @error('email')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Address <small class="danger">*</small></label>
                                <input type="text" name="address" class="form-control"  value="{{ $sstudent->address }}">
                                @error('address')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <a href="{{ route('sstudent.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                            </form>
                        <div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
