@extends('home')
@section('title', 'Thêm mới khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới tỉnh thành</h1>
            </div>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>Tên tỉnh</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <a class="btn btn-secondary" href="{{route('cities.create')}}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
