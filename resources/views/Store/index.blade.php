@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header"> {{Auth::user()->name}} {{ __('Store`s') }}</div>
                 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                     
                    @include('Store-list.index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
