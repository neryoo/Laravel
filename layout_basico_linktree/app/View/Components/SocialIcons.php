<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialIcons extends Component
{
    public $icons;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->icons = [
            ['name' => 'instagram', 'url' => '#', 'icon' => 'fab fa-instagram'],
            ['name' => 'facebook', 'url' => '#', 'icon' => 'fab fa-facebook-f'],
            ['name' => 'whatsapp', 'url' => '#', 'icon' => 'fab fa-whatsapp'],
            ['name' => 'twitter', 'url' => '#', 'icon' => 'fab fa-x-twitter'],
            ['name' => 'youtube', 'url' => '#', 'icon' => 'fab fa-youtube']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.social-icons');
    }
}