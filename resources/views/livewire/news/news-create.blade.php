<div>
    <p>
        A good traveler has no fixed plans and is not intent upon arriving.
    </p>

    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="newsImageUpload">News Image Upload</label>
            <img src="{{ $this->news->getFirstMediaUrl('image') }}" width="100px" height="100px" alt="{{ $this->news->title }}">
            <input id="newsImageUpload" type="file" name="newsImage" accept="image/png, image/jpeg">
        </div>
        @foreach ($this->news->items as $item)
            <div>
                <label for="itemImageUpload">Item Image Upload</label>
                <img src="{{ $item->getFirstMediaUrl('image') }}" width="100px" height="100px" alt="{{ $item->title }}">
                <input wire:model="itemImage" id="itemImageUpload" type="file" accept="image/png, image/jpeg">
            </div>
        @endforeach
        <div>
            <label for="itemImageUpload">Item Image Upload</label>
            <input wire:model="itemImage" id="itemImageUpoad" type="file" accept="image/png, image/jpeg">
        </div>
        <button>Do it</button>
    </form>
</div>
