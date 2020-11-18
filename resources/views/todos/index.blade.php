@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row pt-3 justify-content-center">
    <div class="card" style="width: 50%">
      <div class="card-header text-center">
        <h1>All Todos</h1>
      </div>
      <div class="card-body">
        <ul class="list-group">
          @foreach ($todos as $todo)
        <li class="list-group-item text-muted">{{$todo->title}}
          <span class="float-right">
            <a href="#"><i class="fas fa-trash mr-2"></i></a>
          </span>
          <span class="float-right">
          <a href="{{route('todos.show',$todo->id)}}"><i class="far fa-eye mr-2"></i></a>
          </span>
          <span class="float-right">
          <a href=""><i class="far fa-edit mr-2"></i></a>
          </span>
        </li>
              
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
    
@endsection