@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>{{ __('Add opinion') }}</b>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('opinions.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="opinion_author">{{ __('Authot') }}</label>
                    <input type="text" name="author" class="form-control" id="opinion_author">
                </div>
                <div class="form-group">
                    <label for="opinion_content">{{ __('Content') }}</label>
                    <textarea name="content" class="form-control" id="opinion_content" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Add" />
                </div>
            </form>
        </div>
    </div>
@endsection
