@extends('layouts.app')

@section('content')
  {{-- @dd($images) --}}
  @foreach ($news as $n)
    @foreach ($n->media as $image)
      <img src="{{ $image->getUrl() }}" alt="what">
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
