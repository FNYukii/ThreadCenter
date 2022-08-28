<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TitleBar extends Component
{
    public $title;
    public $buttonText;

    public function __construct($title, $buttonText)
    {
        $this->title = $title;
        $this->buttonText = $buttonText;
    }
    
    public function render()
    {
        return view('components.title-bar');
    }
}
