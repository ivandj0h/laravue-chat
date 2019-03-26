@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">LaraVue Chat</div>

                <div class="card-body" id="app">
                    <laravue-chat :user="{{ auth()->user() }}"></laravue-chat>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
