@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 shadow">
                <div class="card-body m-3">
                        <div>
                            <form action="{{ route('sstudent.store') }}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name<small class="danger">*</small></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                                @error('name')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror

                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Roll No.<small class="danger">*</small></label>
                                <input type="text" name="roll_no" class="form-control @error('roll_no') is-invalid @enderror" value="{{ old('roll_no') }}">

                                @error('roll_no')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror

                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label"> Registration No. <small class="danger">*</small></label>
                                <input type="text" name="registration_no" class="form-control @error('registration_no') is-invalid @enderror" value="{{ old('registration_no') }}">

                                @error('registration_no')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror

                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Email <small class="danger">*</small></label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label  class="form-label">Address <small class="danger">*</small></label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                                @error('address')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <a href="{{ route('sstudent.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Register</button>
                            </div>
                            </form>
                        <div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
