<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserPhoto extends Component
{
    public $name;
    public $description;
    public $imageUrl;

    /**
     * Create a new component instance.
     */
    public function __construct($name = 'Nome do usuário', $description = 'Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante', $imageUrl = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.user-photo');
    }
}
