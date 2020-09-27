@extends('layouts.app')

@section('content')

    <h1 class="text-center">Edit Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo</div>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <ul class="list-group">
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{$error}}
                                </li>
                            @endforeach
                        </div>
                    </ul>

                @endif
                <form action="/update-todos" method="POST">
                    @csrf
                    <input type="hidden" value="{{$todo->id}}" name="todo_id">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{$todo->name}}" placeholder="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="5" rows="5" name="description">{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
