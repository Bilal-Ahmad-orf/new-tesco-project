<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;


class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug() {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory() {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Category Added Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.admin');
    }
}
