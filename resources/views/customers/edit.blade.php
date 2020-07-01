@extends('home')
@section('title',  __('messages.update_customer'))
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>{{__('messages.update_customer')}}</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.update', $customer->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>{{__('messages.name_customer')}}</label>
                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('messages.birth_day')}}</label>
                        <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('messages.city')}}</label>
                        <select class="form-control" name="city_id">
                            @foreach($cities as $city)
                                <option
                                    @if($customer->city_id == $city->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$city->id}}">{{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.update')}}</button>
                    <button class="btn btn-secondary"
                            onclick="window.history.go(-1); return false;">{{ __('messages.cancel') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection


