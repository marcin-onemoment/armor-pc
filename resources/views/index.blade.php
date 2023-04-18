<h1>Test</h1>

@foreach ($users as $user)
    <p>This is user {{ $user->full_name }}</p>
@endforeach
