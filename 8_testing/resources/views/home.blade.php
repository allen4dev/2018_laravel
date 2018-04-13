@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <ul class="list-group">
                            @forelse ($threads as $thread)
                                <li class="list-group-item">
                                    <h2>
                                        <a href="/threads/{{ $thread->id }}">
                                            {{ $thread->title }}
                                        </a>
                                    </h2>
                                    <p>{{ $thread->body }}</p>
                                </li>
                            @empty
                                <p>No threads found.</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
