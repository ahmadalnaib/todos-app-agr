@extends('layouts.app')



@section('content')
    <div class="container">
    <h1 class="mt-5 text-center">{{$todo->title}}</h1>
    <div class="row justify-content-center pt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <span>Details</span>
          <span class="badge badge-warning float-right">
            {{boolval($todo->completed)?'Completed' : 'Non Completed'}}
          </span>
          </div>
          <div class="card-body">
            {{$todo->content}}
          </div>
        </div>
      </div>

    </div>
    </div>
@endsection