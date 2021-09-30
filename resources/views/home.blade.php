@extends('layouts.app')

@section('title')
    ToDo List App Laravel
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Todo List <a href="{{ url('/todo/create') }}" class="btn btn-primary pull-right bg-dark border-0">Add New Todo</a></h1>
                    <hr/>
                    @include('partials.flash_notification')
                    @if (count($todoList))
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ToDo Name</th>
                                        <th>Completed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todoList as $todo)
                                        <tr>
                                            <td class="align-middle">
                                                {{ $todo->name }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $todo->complete ? 'Completed' : 'Pending' }}
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('todo.update', $todo->id) }}" class="form-inline d-inline" method="post">
                                                    @csrf
                                                    @method('put')
                                                        @if ($todo->complete)
                                                            <button class="btn btn-warning btn-xs">Incomplete</button>
                                                        @else
                                                            <button class="btn btn-info btn-xs">Complete</button>
                                                        @endif
                                                </form>

                                                <form action="{{ route('todo.delete', $todo->id) }}" method="post" class="form-inline d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="text-center">
                    {!! $todoList->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
    <style>
        .pull-right {
            float: right;
        }
    </style>
@endpush
