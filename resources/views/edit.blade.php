{{-- @extends('base')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
                <form action="{{route('school.store')}}" method="post">
                    @method("put")
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">father_Name</label>
                        <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control @error('father_name') is-invalid @enderror">
                        @error('father_name')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">maothe_Name</label>
                        <input type="text" name="maothe_name" value="{{old('maothe_name')}}" class="form-control @error('maothe_name') is-invalid @enderror">
                        @error('maothe_name')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">address</label>
                        <input type="text" name="address" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror">
                        @error('address')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" name="contact" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">state</label>
                        <input type="text" name="state" value="{{old('state')}}" class="form-control @error('state') is-invalid @enderror">
                        @error('state')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">city</label>
                        <input type="text" name="city" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror">
                        @error('city')
                            <p class="text-danger small">{{$massage}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Edit student record" class="btn btn-warning w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection --}}