@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('Store View') }}</div>
                 @include('forms.Buttons.button')
                <div class="card-body bg-warning">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('forms.show')
                    @include('forms.StoreWithProduct.show')
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
