<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    protected $news;

    public $itemImage;

    protected $rules = [
        'itemImage' => 'nullable'
    ];
    
    public function __construct(News $news)
    {
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = $this->news::with(['media'])->get();

        return view("news.index", compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = $this->news::with(['media', 'items'])->find(1);

        $items = $this->news->items;

        return view("news.create", compact('news', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        dd('what');
        $news = new News;

        $item = new Item;
        
        $news->addMedia($request->newsImage)->toMediaCollection('news');

        $item->addMedia($request->itemImage)->toMediaCollection('images');

        $news->save();

        return redirect()->route('news.index');
    }

    public function uploadImage()
    {
        dd('test');
    }

    public function updatedItemImage()
    {
        dd('test');
    }

    public function render()
    {
        return view('news.create');
    }
}
