<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsCreate extends Component
{
    use WithFileUploads;

    public News $news;

    public $newsImage;

    public $itemImage;
    
    public function mount()
    {
        $this->news = new News();

        $this->news->title = 'New News';
        
        $this->news->save();
    }

    public function getItemsProperty()
    {
        return $this->news->items;
    }

    public function updatedItemImage()
    {
        $this->validate([
            'itemImage' => 'image',
        ]);

        // Add a new item connected to news and set the news_id in item as the news.id
        $this->newItem = $this->news->items()->make();

        $this->newItem->title = $this->news->title;
        
        if ($this->itemImage) {
            $this->newItem
                ->addMedia($this->itemImage->getRealPath())
                ->usingFileName($this->itemImage->getClientOriginalName())
                ->toMediaCollection('image');
        }

        dd($this->news->items);
        // $this->newItem->save();
    }

    public function updatedNewsImage()
    {
        // $this->validate([
        //     'newsImage' => 'image',
        // ]);

        // if ($this->news->image) {
        //     $this->news->clearMediaCollection('image');
        // }

        // $this->news->addMediaFromRequest('news.image')
        //     ->usingFileName($this->news->image->getClientOriginalName())
        //     ->toMediaCollection('image');
    }

    public function save()
    {
        $this->news->save();

        if ($this->newsImage) {
            $this->news
                ->addMedia($this->newsImage->getRealPath())
                ->usingFileName($this->newsImage->getClientOriginalName())
                ->toMediaCollection('image');
        }

        $this->redirect(route('news.list'));
    }
    
    public function render()
    {
        return view('livewire.news.news-create')->layout('layouts.app');
    }
}
