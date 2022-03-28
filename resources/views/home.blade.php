@extends('base')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2">@include('side') </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Id</th>
                                <th>Student name</th>
                                <th>Father name</th>
                                <th>Mother name</th>
                                <th>rollNo</th>
                                <th>reg_no</th>
                                <th>school_id</th>
                                <th>maths</th>
                                <th>sci</th>
                                <th>sst</th>
                                <th>eng</th>
                                <th>hindi</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($students as $anshu)
                                <tr>
                                    <td>{{$anshu->id}}</td>
                                    <td>{{$anshu->name}}</td>
                                    <td>{{$anshu->father_name}}</td>
                                    <td>{{$anshu->mother_name}}</td>
                                    <td>{{$anshu->rollNo}}</td>
                                    <td>{{$anshu->reg_no}}</td>
                                    <td>{{$anshu->school_id}}</td>
                                    <td>{{$anshu->maths}}</td>
                                    <td>{{$anshu->sci}}</td>
                                    <td>{{$anshu->sst}}</td>
                                    <td>{{$anshu->eng}}</td>
                                    <td>{{$anshu->hindi}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('student.destroy',['student'=>$anshu])}}" method="post">
                                            @csrf
                                                @method("delete")
                                                <input type="submit" value="X" placeholder="X" class="btn btn-danger text-dark m-1">
                                        </form>
                                        <a href="{{route('student.show',['student'=>$anshu])}}" class="btn btn-success m-1"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('student.edit',['student'=>$anshu])}}" class="btn btn-info m-1"><i class="bi bi-pencil-square"></i></a>
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