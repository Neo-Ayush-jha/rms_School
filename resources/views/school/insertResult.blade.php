@extends('school/base')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/school/insertResult" method="post">
                            @csrf
                            <div class="mt-3">
                                <label for="">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="">rollNo</label>
                            <input type="text" name="rollNo" class="form-control @error('rollNo') is-invalid @enderror" value="{{old('rollNo')}}">
                            @error('rollNo')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="">reg_no</label>
                            <input type="text" name="reg_no" class="form-control @error('reg_no') is-invalid @enderror" value="{{old('reg_no')}}">
                            @error('reg_no')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="">school_id</label>
                            <input type="text" name="school_id" class="form-control @error('school_id') is-invalid @enderror" value="{{old('school_id')}}">
                            @error('school_id')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="">father_name</label>
                            <input type="text" name="father_name" class="form-control @error('father_name') is-invalid @enderror" value="{{old('father_name')}}">
                            @error('father_name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mt-3">
                                <label for="">mother_name</label>
                            <input type="text" name="mother_name" class="form-control @error('mother_name') is-invalid @enderror" value="{{old('mother_name')}}">
                            @error('mother_name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            @php
                                $subjects = ["maths" , "sci" , "english" , "hindi" , "sst"]
                            @endphp
                            <div class="row">
                                @foreach ($subjects as $subject)
                                <div class="mb-3 col">
                                    <label for=""><?= $subject; ?></label>
                                    <input type="text" name="<?= $subject;?>" class="form-control @error($subject) is-invalid @enderror" value="{{old($subject)}}">
                                    @error($subject)
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>School Name :-</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>School Code :-</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Reg No :-</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Est Year :-</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Address :-</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>School Name :-</th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection