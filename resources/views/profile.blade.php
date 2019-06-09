@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Page profile user</h5>
                            <small>create: {{ $user->created_at }}</small>
                        </div>
                        <p class="mb-1">User name: {{ $user->name }} </p>
                        <p class="mb-1">User email: {{ $user->email }} </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
