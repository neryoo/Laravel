# LinkTree Laravel - Sem NPM

Esta aplicação Laravel foi configurada para funcionar **sem npm/Vite**, usando apenas CSS e JavaScript tradicionais.

## 🚀 Como Executar

### 1. Instalar Dependências PHP
```bash
composer install
```

### 2. Configurar Ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Executar Servidor
```bash
php artisan serve
```

Acesse: `http://localhost:8000`

## 📁 Estrutura de Assets

```
public/
├── css/
│   └── app.css          # Estilos principais
├── js/
│   └── app.js           # JavaScript principal
└── teste-css.html       # Página de teste

resources/
├── css/
│   └── app.css          # CSS original (fonte)
├── js/
│   └── app.js           # JS original (não usado)
└── views/
    ├── index.blade.php  # Página principal
    └── components/      # Componentes Blade
```

## 🎨 Componentes Disponíveis

### 1. Foto de Usuário
```blade
<x-user-photo 
    name="Seu Nome"
    description="Sua descrição"
    imageUrl="sua-foto.jpg"
/>
```

### 2. Botão Individual
```blade
<x-botao 
    text="Meu Botão" 
    url="https://example.com" 
    class="promo-button"
    icon="fas fa-star"
/>
```

### 3. Botões Sociais
```blade
<x-social-buttons />
```

### 4. Ícones Sociais
```blade
<x-social-icons />
```

## 🔧 Vantagens da Configuração Sem NPM

- ✅ **Simplicidade**: Sem necessidade de Node.js
- ✅ **Performance**: Carregamento direto dos assets
- ✅ **Compatibilidade**: Funciona em qualquer servidor
- ✅ **Manutenção**: Mais fácil de manter
- ✅ **Deploy**: Deploy mais simples

## 📱 Recursos Visuais

- Gradiente de fundo animado
- Glassmorphism no container
- Animações de entrada suaves
- Efeitos hover interativos
- Efeito ripple nos botões
- Design totalmente responsivo

## 🛠️ Modificações Realizadas

1. **Removido:**
   - `vite.config.js`
   - `package.json`
   - `package-lock.json`
   - Pasta `node_modules`

2. **Criado:**
   - `public/css/app.css`
   - `public/js/app.js`
   - `config/assets.php`
   - `app/Helpers/AssetHelper.php`

3. **Atualizado:**
   - `resources/views/index.blade.php`
   - `resources/views/exemplo-componentes.blade.php`

## 🎯 Páginas Disponíveis

- **Principal:** `http://localhost:8000`
- **Exemplos:** `http://localhost:8000/exemplo`
- **Teste CSS:** `http://localhost:8000/teste-css.html`

A aplicação está pronta para uso sem qualquer dependência do npm!
