<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Botao extends Component
{
    public $text;
    public $url;
    public $class;
    public $icon;

    /**
     * Create a new component instance.
     */
    public function __construct($text = 'Botão', $url = '#', $class = '', $icon = null)
    {
        $this->text = $text;
        $this->url = $url;
        $this->class = $class;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.botao');
    }
}
