@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>{{ __('shop.product.index_title') }}</h1>
        </div>
        <div class="col-6">
            <a class="float-right" href="{{ route('products.create') }}">
                <button type="button" class="btn btn-primary">{{ __('shop.button.add') }}</button>
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('shop.product.fields.name') }}</th>
                <th scope="col">{{ __('shop.product.fields.description') }}</th>
                <th scope="col">{{ __('shop.product.fields.amount') }}</th>
                <th scope="col">{{ __('shop.product.fields.price') }}</th>
                <th scope="col">{{ __('shop.columns.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">
                            <button class="btn btn-primary btn-sm">P</button>
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}">
                            <button class="btn btn-success btn-sm">E</button>
                        </a>
                        <button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                            X
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('products') }}/";
    const confirmDelete = "{{ __('shop.messages.delete_confirm') }}";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
