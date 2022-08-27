@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container text-center mt-5">
    <button class="btn btn-primary mx-5">
        <a class="text-white" href="{{'admin/posts'}}">Posts</a>
    </button>

    <button class="btn btn-secondary mx-5">
        <a class="text-white" href="{{'admin/users'}}">Users</a>
    </button>

    <button class="btn btn-outline-info">
        <a href="{{'/'}}">Welcome Page</a>
    </button>
</div>
@endsection
