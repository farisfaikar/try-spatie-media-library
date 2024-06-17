@extends('layouts.app')

@section('content')
  {{-- @dd($images) --}}
  @foreach ($news as $n)
    <img src="{{ $n->getFirstMediaUrl('news') }}" alt="what">
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
