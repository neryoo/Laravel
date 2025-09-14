<x-layout>
    <x-perfil-image src="images/perfil-image.jpg" shape="rounded" />
    <x-user-link href="/links/create">Novo link</x-user-link>
    <x-user-title>Salomão Nascimento</x-user-title>
    <x-user-description>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec turpis eu eros gravida
        bibendum.</x-user-description>
    @foreach ($links as $link)
        <x-user-link href="{{ $link->url }}" target="_blank">{{ $link->title }}</x-user-link>
    @endforeach
</x-layout>