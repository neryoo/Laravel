@props(['text' => 'Botão', 'url' => '#', 'class' => '', 'icon' => null])

<a href="{{ $url }}" class="button {{ $class }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $text }}
</a>
