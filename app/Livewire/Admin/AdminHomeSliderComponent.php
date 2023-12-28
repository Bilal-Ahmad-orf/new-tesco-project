<?php

namespace App\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{

    public function deleteSlide($slide_id) {
        $slider = HomeSlider::find($slide_id);
        $slider->delete();
        session()->flash('message','Slider Deleted Successfully');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders' => $sliders])->layout('layouts.admin');
    }
}
