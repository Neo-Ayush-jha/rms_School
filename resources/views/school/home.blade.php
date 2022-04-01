@extends('school/base')
@section('content')
    <div class="container mt-3">
        <div class="row ">
            <div class="col-8">
                <div class="row mt-2">
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-danger w-100 btn-lg">View Students</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="/school/insertResult" class="btn btn-info w-100 btn-lg">Insert Result</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-warning w-100 btn-lg">Download Reports</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-secondary w-100 btn-lg">Manage Result</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-primary w-100 btn-lg">Manage Result</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-danger w-100 btn-lg">Manage Result</a>
                    </div>
                    <div class="col-4 mb-2">
                        <a href="" class="btn btn-info w-100 btn-lg">Manage Result</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>School Name :-</th>
                                <td>{{$school->school_name}}</td>
                            </tr>
                            <tr>
                                <th>School Code :-</th>
                                <td>{{$school->school_code}}</td>
                            </tr>
                            <tr>
                                <th>Reg No :-</th>
                                <td>{{$school->school_reg_no}}</td>
                            </tr>
                            <tr>
                                <th>Est Year :-</th>
                                <td>{{$school->est_year}}</td>
                            </tr>
                            <tr>
                                <th>Address :-</th>
                                <td>{{$school->address}} ,{{$school->city}},{{$school->state}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection