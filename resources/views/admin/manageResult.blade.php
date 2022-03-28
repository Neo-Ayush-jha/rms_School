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
                                <th>Roll no.</th>
                                <th>Reg no</th>
                                <th>school </th>
                                <th>father name</th>
                                <th>mother name</th>
                                <th>Maths</th>
                                <th>sci</th>
                                <th>sst</th>
                                <th>hindi</th>
                                <th>eng</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->rollNo}}</td>
                                    <td>{{$item->reg_no}}</td>
                                    <td>{{$item->school_id}}</td>
                                    <td>{{$item->father_name}}</td>
                                    <td>{{$item->mother_name}}</td>
                                    <td>{{$item->maths}}</td>
                                    <td>{{$item->sci}}</td>
                                    <td>{{$item->sst}}</td>
                                    <td>{{$item->hindi}}</td>
                                    <td>{{$item->eng}}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">X</a>
                                        <a href="" class="btn btn-warning">edit</a>
                                        <a href="" class="btn btn-info">View</a>
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