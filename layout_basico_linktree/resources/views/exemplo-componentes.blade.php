<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Uso dos Componentes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="main-container">
        <h2 style="text-align: center; margin-bottom: 30px; color: #667eea;">Exemplos de Uso dos Componentes</h2>
        
        <!-- Exemplo 1: Componente de Foto de Usuário -->
        <div style="margin-bottom: 40px;">
            <h3>1. Componente de Foto de Usuário:</h3>
            <x-user-photo 
                name="João Silva"
                description="Desenvolvedor Full Stack apaixonado por tecnologia"
                imageUrl="https://via.placeholder.com/150"
            />
        </div>

        <!-- Exemplo 2: Componente de Botão Individual -->
        <div style="margin-bottom: 40px;">
            <h3>2. Componente de Botão Individual:</h3>
            <x-botao 
                text="Botão com Ícone" 
                url="https://example.com" 
                class=""
                icon="fas fa-external-link-alt"
            />
            
            <x-botao 
                text="Botão de Destaque" 
                url="#" 
                class="promo-button"
            />
        </div>

        <!-- Exemplo 3: Componente de Botões Sociais -->
        <div style="margin-bottom: 40px;">
            <h3>3. Componente de Botões Sociais:</h3>
            <x-social-buttons />
        </div>

        <!-- Exemplo 4: Componente de Ícones Sociais -->
        <div style="margin-bottom: 40px;">
            <h3>4. Componente de Ícones Sociais:</h3>
            <x-social-icons />
        </div>

        <!-- Exemplo 5: Botões Personalizados -->
        <div style="margin-bottom: 40px;">
            <h3>5. Botões Personalizados:</h3>
            <x-botao 
                text="WhatsApp" 
                url="https://wa.me/5511999999999" 
                class="custom-button"
                icon="fab fa-whatsapp"
            />
            
            <x-botao 
                text="Instagram" 
                url="https://instagram.com/usuario" 
                class="custom-button"
                icon="fab fa-instagram"
            />
        </div>
    </div>
</body>
</html>
