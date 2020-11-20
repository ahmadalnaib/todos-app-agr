@extends('layouts.app')



@section('content')
    <div class="container pt-5">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h1>edit Todo</h1>
            </div>
            <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form action="{{route('todos.update',$todo->id)}}" method="post">
              @csrf
              @method('put')
                <div class="form-group">
                  <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$todo->title}}">
                </div>

                <div class="form-group">
                  <label for="content">content</label>
                 <textarea name="content"  class="form-control" id="content" cols="30" rows="10">
                  {{$todo->content}}
                 </textarea>
                </div>
             
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection