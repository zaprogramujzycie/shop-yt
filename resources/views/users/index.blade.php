@extends('layouts.app')

@section('content')
<div class="container">
    @include('helpers.flash-messages')
    <div class="row">
        <div class="col-6">
            <h1><i class="fas fa-users"></i> {{ __('shop.user.index_title') }}</h1>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">
                        <button class="btn btn-success btn-sm"><i class="far fa-edit"></i></button>
                    </a>
                    <button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('users') }}/";
    const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
