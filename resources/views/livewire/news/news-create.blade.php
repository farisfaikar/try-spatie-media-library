<div>
    <p>
        A good traveler has no fixed plans and is not intent upon arriving.
    </p>

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="newsImageUpload">News Image Upload</label>
            @if ($newsImage)
                <img src="{{ $newsImage->temporaryUrl() }}" width="100px" height="100px" alt="{{ $this->news->title }}">
            @endif
            <input wire:model="newsImage" id="newsImageUpload" type="file" accept="image/png, image/jpeg">
        </div>
        <div>
            <label for="itemImageUpload">News Item Image</label>
            {{-- @if ($itemImage)
                <img src="{{ $itemImage->temporaryUrl() }}" width="100px" height="100px">
            @endif --}}
            <input wire:model="itemImage" id="itemImageUpload" type="file" accept="image/png, image/jpeg">
        </div>
        @foreach ($this->news->items as $item)
            <div>
                <label for="itemImageUpload">Item Image Upload</label>
                @if ($itemImage)
                    <img src="{{ $itemImage->temporaryUrl() }}" width="100px" height="100px" alt="{{ $item->title }}">
                @endif
                <input wire:model="itemImage" id="itemImageUpload" type="file" accept="image/png, image/jpeg">
            </div>
        @endforeach
        {{-- <div>
            <label for="itemImageUpload">Item Image Upload</label>
            @if ($itemImage)
                <img src="{{ $itemImage->temporaryUrl() }}" width="100px" height="100px">
            @endif
            <input wire:model="itemImage" id="itemImageUpoad" type="file" accept="image/png, image/jpeg">
        </div> --}}
        <button>Do it</button>
    </form>
</div>
