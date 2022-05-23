@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/recharge.png" alt="">
                                </a>
                                <h2>Mobile Recharge</h2>
                        </div>
                    </p>
                    <label>{{ __('Mobile Number') }}</label>
                    <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('+8801*********') }}">
                    @include('alerts.feedback', ['field' => 'number'])

                    <label>{{ __('Amount') }}</label>
                    <input type="text" name="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('0.00') }}">
                    @include('alerts.feedback', ['field' => 'amount'])

                    <label>{{ __('Mobile Phone Operator') }}</label>
                    <select  type="text" name="operator" class="form-control{{ $errors->has('operator') ? ' is-invalid' : '' }}" placeholder="{{ __('Select Operator') }}">

                            <option value="{{ 'Operator' }}" name= "operator" placeholder="{{ __('Operator') }}">Grameenphone</option>
                            <option value="Operator" name= "operator" placeholder="{{ __('Operator') }}">Banglalink</option>
                            <option value="{{ 'Operator' }}" name= "operator" placeholder="{{ __('Operator') }}">Robi</option>
                            <option value="Operator" name= "operator" placeholder="{{ __('Operator') }}">Airtel</option>
                            <option value="{{ 'Operator' }}" name= "operator" placeholder="{{ __('Operator') }}">Teletalk</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'operator'])
                            


                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('********') }}">
                    @include('alerts.feedback', ['field' => 'password'])
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Recharge') }}</button>
                    </div>
                </div>
            </div>
    </div>
@endsection