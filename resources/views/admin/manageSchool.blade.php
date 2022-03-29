@extends('admin/base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>School name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Rag no.</th>
                                <th>Etd. year</th>
                                <th>Date of creation</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($schools as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->school_code}}</td>
                                    <td>{{$item->school_name}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->city}}</td>
                                    <td>{{$item->state}}</td>
                                    <td>{{$item->school_reg_no}}</td>
                                    <td>{{$item->est_year}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a href="" class="btn btn-danger text-small p-1">X</a>
                                        <a href="" class="btn btn-warning text-small p-1"><i class="bi bi-pen"></i></a>
                                        <a href="" class="btn btn-info text-small p-1"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection