<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use Livewire\Component;

class NewsList extends Component
{
    public function mount()
    {
        //
    }

    public function getNewsProperty()
    {
        return News::all();
    }

    public function render()
    {
        return view('livewire.news.news-list')->layout('layouts.app');
    }
}
