<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Home Page - E-Commerce')]

class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        return view('livewire.home-page',[
            'brands'=>$brands,
            'categories'=>$categories,
        ]);
    }
}