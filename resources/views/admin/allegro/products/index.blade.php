@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>{{ __('Allegro Products') }}</b>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Allegro ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->allegro_id }}</td>
                            <td><a href="{{ $product->offer_link }}" target="_blank">{{ $product->name }}</a></td>
                            <td>{{ $product->amount }} zł</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex">
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
