@extends('layouts.app')
@section('title')
    Admin Message
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Message</div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection