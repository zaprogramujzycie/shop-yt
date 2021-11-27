@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edycja użytkownika: {{ $user->email }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ method_field('PUT') }}
                        @csrf

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Miasto</label>

                            <div class="col-md-6">
                                <input id="city" type="text" maxlength="255" class="form-control @error('city') is-invalid @enderror" name="address[city]" value="@if($user->hasAddress()){{ $user->address->city }}@endif" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip_code" class="col-md-4 col-form-label text-md-right">Kod pocztowy</label>

                            <div class="col-md-6">
                                <input id="zip_code" type="text" maxlength="6" class="form-control @error('zip_code') is-invalid @enderror" name="address[zip_code]" value="@if($user->hasAddress()){{ $user->address->zip_code }}@endif" required autocomplete="zip_code" autofocus>

                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">Ulica</label>

                            <div class="col-md-6">
                                <input id="street" type="text" maxlength="255" class="form-control @error('street') is-invalid @enderror" name="address[street]" value="@if($user->hasAddress()){{ $user->address->street }}@endif" required autocomplete="street" autofocus>

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street_no" class="col-md-4 col-form-label text-md-right">Numer ulicy</label>

                            <div class="col-md-6">
                                <input id="street_no" type="text" maxlength="5" class="form-control @error('street_no') is-invalid @enderror" name="address[street_no]" value="@if($user->hasAddress()){{ $user->address->street_no }}@endif" required autocomplete="street_no" autofocus>

                                @error('street_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="home_no" class="col-md-4 col-form-label text-md-right">Numer domu</label>

                            <div class="col-md-6">
                                <input id="home_no" type="text" maxlength="5" class="form-control @error('home_no') is-invalid @enderror" name="address[home_no]" value="@if($user->hasAddress()){{ $user->address->home_no }}@endif" required autocomplete="home_no" autofocus>

                                @error('home_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 float-right">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('shop.button.save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
