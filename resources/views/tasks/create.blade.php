<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>
    </body>
</html>
-->

@extends('layouts.app')

@section('content')

    <h1>New Task</h1>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ui>
    @foreach($errors->all() as error)
        <li>{{ $error }}</li>
    @endforeach
        </ui>
    </div>
    @endif
    <form method="POST" action="/tasks">
        <div class="form-group">
           @csrf
            <label for="description">Task Description</label>
            <input class="form-control" name="description"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>

@endsection