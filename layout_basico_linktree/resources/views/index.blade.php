<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkTree - {{ $userName ?? 'Usuário' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Header com navegação -->
    <header class="top-header">
        <div class="header-content">
            <div class="header-left">
                <span class="home-text">
                    <i class="fas fa-home"></i>
                    Home
                </span>
            </div>
            <div class="header-right">
                <div class="header-menu">
                    <div class="menu-dot"></div>
                    <div class="menu-dot"></div>
                    <div class="menu-dot"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Container principal -->
    <div class="main-container">
        <!-- Componente de foto de usuário -->
        <x-user-photo 
            :name="$userName ?? 'Nome do usuário'"
            :description="$userDescription ?? 'Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante'"
            :imageUrl="$userImage ?? null"
        />

        <!-- Componente de botões de ação -->
        <x-social-buttons />

        <!-- Componente de ícones de redes sociais -->
        <x-social-icons />

        <!-- Exemplo de uso individual do componente botão -->
        <div class="custom-buttons" style="margin-top: 20px;">
            <x-botao 
                text="Botão Personalizado" 
                url="#" 
                class="custom-button"
                icon="fas fa-star"
            />
        </div>
    </div>

</body>
</html>