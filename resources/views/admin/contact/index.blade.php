@extends('layouts.admin')

@section('main-content')
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>{{ __('Opinions') }}</b>
                </div>
                <div class="col col-md-6 float-end">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Username') }}</th>
                        <th scope="col">{{ __('Email') }}</th>
                        <th scope="col">{{ __('Title') }}</th>
                        <th scope="col">{{ __('Message') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <th>{{ $contact->username }}</th>
                            <th>{{ $contact->email }}</th>
                            <th>{{ $contact->title }}</th>
                            <th>{!! $contact->message !!}</th>
                            <td>
                                <form method="post" action="{{ route('contact.destroy', $contact->id) }}">
                                    @csrf
                                    @method('DELETE')
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
