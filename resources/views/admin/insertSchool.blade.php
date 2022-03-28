@extends('admin/base')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-8 mx-auto">
                <div class="card mt-1">
                    <div class="card-body">
                        <h5>Insert School</h5>
                        <form action="{{route('school.store')}}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="">name</label>
                                <input type="text" name="name" class="form-control @error('name') is valaid @enderror" value="{{old('name')}}">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is valaid @enderror" value="{{old('email')}}">
                                    @error('email')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is valaid @enderror" value="{{old('password')}}">
                                    @error('password')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                            </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">school_name</label>
                                    <input type="text" name="school_name" class="form-control @error('school_name') is valaid @enderror" value="{{old('school_name')}}">
                                    @error('school_name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">school_code</label>
                                    <input type="text" name="school_code" class="form-control @error('school_code') is valaid @enderror" value="{{old('school_code')}}">
                                    @error('school_code')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">address</label>
                                    <input type="text" name="address" class="form-control @error('address') is valaid @enderror" value="{{old('address')}}">
                                    @error('address')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">city</label>
                                    <input type="text" name="city" class="form-control @error('city') is valaid @enderror" value="{{old('city')}}">
                                    @error('city')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">state</label>
                                    <input type="text" name="state" class="form-control @error('state') is valaid @enderror" value="{{old('state')}}">
                                    @error('state')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">school_reg_no</label>
                                    <input type="text" name="school_reg_no" class="form-control @error('school_reg_no') is valaid @enderror" value="{{old('school_reg_no')}}">
                                    @error('school_reg_no')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">est_year</label>
                                    <input type="text" name="est_year" class="form-control @error('est_year') is valaid @enderror" value="{{old('est_year')}}">
                                    @error('est_year')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <input type="submit" name="send" class="btn btn-success w-100 text-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



