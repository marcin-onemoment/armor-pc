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
                        <th scope="col">Products Count</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->allegro_id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->products()->count() }}</td>
                            <td>
                                <form method="post" action="{{ route('allegro.categories.switch', $category->id) }}">
                                    @csrf
                                    @method('POST')
                                    <input type="submit" class="btn {{ $category->enabled ? 'btn-danger' : 'btn-success' }} btn-sm" value="{{ $category->enabled ? 'Disable' : 'Enable' }}" />
                                    @if($category->enabled)
                                        <a href="{{ route('allegro.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                    @endif
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
