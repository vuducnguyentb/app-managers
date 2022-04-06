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
                <div>
                    <ul class="list-group">
                        @foreach ($article as $item)
                            <li class="list-group-item"><a class="list-group-item list-group-item-action" href="#">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                    <div>
                        {{$article->links()}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
