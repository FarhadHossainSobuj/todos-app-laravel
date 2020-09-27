@extends('layouts.app')

@section('content')

    <h1 class="text-center">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new todo</div>
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
                <form action="/store-todo" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="description" cols="5" rows="5" name="description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
