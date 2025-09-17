@props(['name' => 'Nome do usuário', 'description' => 'Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante', 'imageUrl' => null])

<div class="user-profile">
    <div class="profile-pic-placeholder">
        @if($imageUrl)
            <img src="{{ $imageUrl }}" alt="{{ $name }}" class="profile-image">
        @else
            <div class="profile-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="#a0a0a0"/>
                    <path d="M12 14C7.58172 14 4 17.5817 4 22H20C20 17.5817 16.4183 14 12 14Z" fill="#a0a0a0"/>
                </svg>
            </div>
        @endif
    </div>
    <h1 class="user-name">{{ $name }}</h1>
    <p class="user-description">{{ $description }}</p>
</div>
