@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row pt-3 justify-content-center">
    <div class="card" style="width: 50%">
      <div class="card-header text-center">
        <h1>All Todos</h1>
      </div>
        @if (session()->has('success'))
            <div class="alert alert-success">
              {{session()->get('success')}}
            </div>
        @endif
      <div class="card-body">
        <ul class="list-group">
          @forelse ($todos as $todo)
        <li class="list-group-item text-muted">{{$todo->title}}
          <span class="float-right">
          <a href="{{route('todos.delete',$todo->id)}}"><i class="fas fa-trash mr-2" title="Delete Todo"></i></a>
          </span>
          <span class="float-right">
          <a href="{{route('todos.show',$todo->id)}}"><i class="far fa-eye mr-2" title="Show Todo"></i></a>
          </span>
          <span class="float-right">
          <a href="{{route('todos.edit',$todo->id)}}"><i class="far fa-edit mr-2" title="Edit Todo"></i></a>
          </span>

          @if(!$todo->completed)
          
          <span class="float-right">
            <a href="{{route('todos.complate',$todo->id)}}"><i class="fa fa-check-square mr-2" title="Complate Todo"></i></a>
            </span>
          @endif
        </li>
        @empty
              <p class="text-center bg-dark text-white">No Todos</p>
          @endforelse
        </ul>
      </div>
     
    </div>
  </div>
</div>
    
@endsection