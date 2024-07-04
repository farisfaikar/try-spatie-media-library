@extends('layouts.app')

@section('content')
  {{-- @dd($images) --}}
  <a href="{{ route('news.create') }}">Create News</a>
  @foreach ($news as $n)
    <p>News Images</p>
    <img src="{{ $n->getFirstMediaUrl('news') }}" alt="{{ $n->title }}" width="100px" height="100px">
    @foreach ($n->items as $item)
      <p>Item Images</p>
      <img src="{{ $item->getFirstMediaUrl('images') }}" alt="{{ $item->title }}" width="100px" height="100px">
    @endforeach
  @endforeach

  <div class="grid grid-cols-3 w-screen">
    <div class="bg-red-500">
      sidebar
    </div>
    <div class="col-span-2 bg-blue-500">
      main
    </div>
  </div>
@endsection
