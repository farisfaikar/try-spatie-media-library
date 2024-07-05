<div>
    <p>
        Close your eyes. Count to one. That is how long forever feels.
    </p>

    <a href="{{ route('news.create') }}">Create News</a>
    
    @foreach ($this->news as $n)
        <p>News Images</p>
        <img src="{{ $n->getFirstMediaUrl('image') }}" alt="{{ $n->title }}" width="100px" height="100px">
        @foreach ($n->items as $item)
            <p>Item Images</p>
            <img src="{{ $item->getFirstMediaUrl('image') }}" alt="{{ $item->title }}" width="100px" height="100px">
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
</div>
