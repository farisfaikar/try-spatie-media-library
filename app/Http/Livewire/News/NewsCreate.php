<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use App\Models\Item;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsCreate extends Component
{
    use WithFileUploads;

    public News $news;

    public $newsImage;

    public $items;

    protected $rules = [
        'news.title' => 'required',
    ];

    public function mount()
    {
        $this->items = [
            [ 'title' => null, 'itemImage' => null ],
        ];

        $this->news = new News();
    }

    public function save()
    {
        $this->news->save();

        $this->news
            ->addMedia($this->newsImage->getRealPath())
            ->usingFileName($this->newsImage->getClientOriginalName())
            ->toMediaCollection('image');

        foreach ($this->items as $item) {
            if ($item['itemImage']) {
                $newItem = new Item();
                
                $newItem->title = $item['title'];
                
                $this->news->items()->save($newItem);

                $newItem
                    ->addMedia($item['itemImage']->getRealPath())
                    ->usingFileName($item['itemImage']->getClientOriginalName())
                    ->toMediaCollection('image');
            }
        }

        $this->redirect(route('news.list'));
    }

    public function addItem()
    {
        $this->items[] = [ 'title' => null, 'itemImage' => null ];
    }

    public function deleteItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }
    
    public function render()
    {
        return view('livewire.news.news-create')->layout('layouts.app');
    }
}
