@extends('layouts.app')

@section('content')
<div class="container">
    @include('helpers.flash-messages')
    <div class="row">
        <div class="col-6">
            <h1><i class="fas fa-clipboard-list"></i>  Grupy wszystkie</h1>
        </div>
        <div class="col-6">
            <a class="float-right" href="{{ route('products.create') }}">
                <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i></button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <tr>
                <td>Użytkownicy</td>
                <td>{{ \App\Models\User::count() }}</td>
            </tr>

            <tbody>

    </div>

</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('products') }}/";
    const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
@endsection


