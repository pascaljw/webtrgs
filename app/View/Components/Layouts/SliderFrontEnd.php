<?php

namespace App\View\Components\Layouts;

use App\Models\Slider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SliderFrontEnd extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        return view('components.layouts.slider-front-end', compact('sliders'));
    }
}
