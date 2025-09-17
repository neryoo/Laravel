@props(['icons' => [
    ['name' => 'instagram', 'url' => '#', 'icon' => 'fab fa-instagram'],
    ['name' => 'facebook', 'url' => '#', 'icon' => 'fab fa-facebook-f'],
    ['name' => 'whatsapp', 'url' => '#', 'icon' => 'fab fa-whatsapp'],
    ['name' => 'twitter', 'url' => '#', 'icon' => 'fab fa-x-twitter'],
    ['name' => 'youtube', 'url' => '#', 'icon' => 'fab fa-youtube']
]])

<div class="social-icons">
    @foreach($icons as $icon)
        <a href="{{ $icon['url'] }}" class="social-icon" title="{{ ucfirst($icon['name']) }}">
            <i class="{{ $icon['icon'] }}"></i>
        </a>
    @endforeach
</div>
