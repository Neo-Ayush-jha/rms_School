@extends('base')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">@include('side') </div>
            <div class="col-9">
                <form action="{{route('student.store')}}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="student_name" value="{{old('student_name')}}" class="form-control @error('student_name') is-invalid @enderror">
                            @error('student_name')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Father Name</label>
                            <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control @error('father_name') is-invalid @enderror">
                            @error('father_name')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Father Name</label>
                            <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control @error('father_name') is-invalid @enderror">
                            @error('father_name')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="">Mother Name</label>
                            <input type="text" name="mother_name" value="{{old('mother_name')}}" class="form-control @error('mother_name') is-invalid @enderror">
                            @error('mother_name')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror">
                            @error('address')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror">
                            @error('contact')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">D.O.B</label>
                            <input type="text" name="dop" value="{{old('dop')}}" class="form-control @error('dop') is-invalid @enderror">
                            @error('dop')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Class</label>
                            <input type="text" name="class" value="{{old('class')}}" class="form-control @error('class') is-invalid @enderror">
                            @error('class')
                                <p class="text-danger small">{{$massage}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Create student record" class="btn btn-success w-100">
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection