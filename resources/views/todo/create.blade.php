@extends('layouts.app')

@section('title')
    Cretae New Todo
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Create New Todo</h1>
                    <hr/>
                    <form action="{{ route('todo.store') }}" method="post" role="form" class="form-horizontal">
                        @csrf
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 control-label">ToDo Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name">
                                <span class="help-block text-danger">
                                    {{ $errors -> first('name') }}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
