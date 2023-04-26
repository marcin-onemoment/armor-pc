@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>{{ __('Opinion Details') }}</b></div>
                <div class="col col-md-6 float-end">
                    <div class="float-right">
                        <a href="{{ route('opinions.index') }}" class="btn btn-primary btn-sm">{{ __('View All') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>{{ __('Author') }}</b></label>
                <div class="col-sm-10">
                    {{ $opinion->author }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>{{ __('Content') }}</b></label>
                <div class="col-sm-10">
                    {{ $opinion->content }}
                </div>
            </div>
        </div>
    </div>
@endsection
