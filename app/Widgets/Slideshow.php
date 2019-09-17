<?php

namespace App\Widgets;

use App\Slide;
use Arrilot\Widgets\AbstractWidget;

class Slideshow extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $slide = Slide::where('published', 1)->get();

        return view('widgets.slideshow', [
            'config' => $this->config,
            'slides' => $slide
        ]);
    }
}
