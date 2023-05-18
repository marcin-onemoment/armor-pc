@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>{{ __('Allegro Integrations') }}</b>
                </div>
                <div class="col col-md-6 float-end">
                    <div class="float-right">
{{--                        <a href="{{ route('opinions.create') }}" class="btn btn-success btn-sm">{{ __('Add') }}</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if($allegroAuthorize->isExpired())
                <a href="{{ route('allegro.authorize') }}" class="btn btn-success btn-lg">{{ __('Authorize') }}</a>
            @else
                <a href="{{ route('allegro.fetch-offers') }}" class="btn btn-info btn-lg">{{ __('Fetch offers') }}</a>
            @endif
        </div>
    </div>
@endsection
