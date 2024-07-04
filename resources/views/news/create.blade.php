@extends('layouts.app')

@section('content')
  <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="newsImageUpload">News Image Upload</label>
      <input id="newsImageUpload" type="file" name="newsImage" accept="image/png, image/jpeg">
    </div>
    @foreach ($items as $item)
      <div>
        <label for="itemImageUpload">Item Image Upload</label>
        <img src="{{ $item->getFirstMediaUrl('images') }}" alt="{{ $item->title }}">
        <input wire:model="itemImage" wire:click="uploadImage" id="itemImageUpload" type="file" accept="image/png, image/jpeg">
      </div>
    @endforeach
    <div>
      <label for="itemImageUpload">Item Image Upload</label>
      <input wire:model="itemImage" wire:click="uploadImage" id="itemImageUpoad" type="file" accept="image/png, image/jpeg">
    </div>
    <button>Do it</button>
  </form>
@endsection