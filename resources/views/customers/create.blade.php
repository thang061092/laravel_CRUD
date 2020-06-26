@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    @if($errors->all())
                        <div class="alert alert-danger" role="alert">
                            Có vấn đề khi tạo tài khoản người dùng.
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="{{($errors->first('name')) ? 'text-danger' : ''}}">Tên khách hàng :</label>
                        <input type="text" class="form-control {{($errors->first('name')) ? 'is-invalid' : ''}} "
                               name="name" placeholder="Enter name" value="{{old('name')}}">
                        @if($errors->first('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="{{($errors->first('email')) ? 'text-danger' : ''}}">Email :</label>
                        <input type="email" class="form-control {{($errors->first('email')) ? 'is-invalid' : ''}}"
                               name="email" placeholder="Enter email" value="{{old('email')}}">
                        @if($errors->first('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="{{($errors->first('dob')) ? 'text-danger' : ''}}">Ngày sinh :</label>
                        <input type="date" class="form-control {{($errors->first('dob')) ? 'is-invalid' : ''}}"
                               name="dob" value="{{old('dob')}}">
                        @if($errors->first('dob'))
                            <p class="text-danger">{{ $errors->first('dob') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Tỉnh thành :</label>
                        <select class="form-control" name="city_id">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{route('customers.create')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
