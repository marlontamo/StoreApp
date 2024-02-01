@extends('layouts.app')

@section('content')
<div class="container">
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('Edit Product Form') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  

                    @include('forms.product.product-edit')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
