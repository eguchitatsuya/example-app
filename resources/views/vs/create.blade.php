@extends('layouts.app')

@section('content')
  <div class="create-items">
    <div class="form">
      <form action="/vs" method="POST">
        @csrf

        <div class="input-form">
          <label for="title">Title</label>
          <input name="title">
        </div>
        <div class="input-form">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

  @csrf
  {{ csrf_field() }}
@endsection
