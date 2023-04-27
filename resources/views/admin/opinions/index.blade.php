@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>{{ __('Opinions') }}</b>
                </div>
                <div class="col col-md-6 float-end">
                    <div class="float-right">
                        <a href="{{ route('opinions.create') }}" class="btn btn-success btn-sm">{{ __('Add') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Author') }}</th>
                            <th scope="col">{{ __('Content') }}</th>
                            <th scope="col">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($opinions as $opinion)
                            <tr>
                                <th scope="row">{{ $opinion->id }}</th>
                                <th>{{ $opinion->author }}</th>
                                <th>{{ $opinion->content }}</th>
                                <td>
                                    <form method="post" action="{{ route('opinions.destroy', $opinion->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('opinions.show', $opinion->id) }}" class="btn btn-primary btn-sm">{{ __('View') }}</a>
                                        <a href="{{ route('opinions.edit', $opinion->id) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
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
