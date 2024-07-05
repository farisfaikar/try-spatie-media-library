<div>
    <p>
        A good traveler has no fixed plans and is not intent upon arriving.
    </p>

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="newsTitle">News Title</label>
            <input wire:model="news.title" id="newsTitle" type="text">
        </div>
        <div>
            <label for="newsImageUpload">News Image Upload</label>
            @if ($newsImage)
                <img src="{{ $newsImage->temporaryUrl() }}" width="100px" height="100px">
            @endif
            <input wire:model="newsImage" id="newsImageUpload" type="file" accept="image/png, image/jpeg">
        </div>
        @foreach ($this->items as $index => $item)
            <div>
                <label for="item{{ $index }}Title">Item Title</label>
                <input wire:model="items.{{ $index }}.title" id="item{{ $index }}Title" type="text">
            </div>
            <div>
                <label for="itemImageUpload">Item Image Upload</label>
                @if ($item['itemImage'])
                    <img src="{{ $item['itemImage']->temporaryUrl() }}" width="100px" height="100px" alt="{{ $item['title'] }}">
                @endif
                <input wire:model="items.{{ $index }}.itemImage" id="itemImageUpload" type="file" accept="image/png, image/jpeg">
                <button wire:click.prevent="deleteItem({{ $index }})">Delete Item</button>
            </div>
        @endforeach
        <button wire:click.prevent="addItem">Add Item</button>
        <button>Do it</button>
    </form>
</div>
