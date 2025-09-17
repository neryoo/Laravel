<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialButtons extends Component
{
    public $buttons;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->buttons = [
            ['text' => 'Minha loja', 'url' => '#', 'class' => ''],
            ['text' => 'Outras redes sociais', 'url' => '#', 'class' => ''],
            ['text' => 'Links afiliados', 'url' => '#', 'class' => ''],
            ['text' => 'PROMOÇÃO', 'url' => '#', 'class' => 'promo-button'],
            ['text' => 'Contato', 'url' => '#', 'class' => '']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.social-buttons');
    }
}
