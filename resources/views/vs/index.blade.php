@extends('layouts.app')

@section('content')
  <table >
    <tr>
      <th>Item Id</th>
      <th>Title</th>
      <td></td>
    </tr>
    @foreach($vs as $vsItem)
      <tr>
        <td>{{$vsItem->id}}</td>
        <td>{{$vsItem->title}}</td>
        <td><a href="/vs/{{$vsItem->id}}">Details</a></td>
      </tr>
    @endforeach
  </table>
@endsection
