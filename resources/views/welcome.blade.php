@extends('layouts.app')

@section('title')
    ToDo App Laravel
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h2 class="text-bold">Welcome to Laravel ToDo App</h2>
                    <br>
                    <p>For any question please contact</p>
                    <h4>Aldy Victor Rianes</h4>
                    <p><a href="mailto:aldyvictor1046@gmail.com">aldyvictor1046@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .text-bold {
            font-weight: 700;
        }
    </style>
@endpush
