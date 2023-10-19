@extends('layouts.app')

@section('content')
  <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" accept="image/png, image/jpeg">
    <button>Do it</button>
  </form>
@endsection