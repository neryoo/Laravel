<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
    body {
    background-color: #f0f2f5;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 90%;
    max-width: 400px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

header {
    margin-bottom: 20px;
}

.profile-pic-placeholder {
    width: 100px;
    height: 100px;
    background-color: #e0e0e0;
    border-radius: 50%;
    margin: 0 auto 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    color: #a0a0a0;
}

h1 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 5px;
}

p {
    font-size: 0.9em;
    color: #666;
    margin: 0;
}

.button {
    display: block;
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    border: none;
    border-radius: 25px;
    background-color: #7a869a;
    color: #fff;
    font-size: 1em;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #5d677a;
}

.promo-button {
    background-color: #5d677a;
}

.promo-button:hover {
    background-color: #4a515c;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.social-icons a {
    color: #7a869a;
    font-size: 2em;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #5d677a;
}
</style>

    <title>Document</title>
</head>

<body>
     <header>
            <div class="profile-pic-placeholder">
                <i class="fas fa-image"></i>
            </div>
            <h1>Nome do usuário</h1>
            <p>Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante</p>
        </header>

        <main>
            <a href="#" class="button">Minha loja</a>
            <a href="#" class="button">Outras redes sociais</a>
            <a href="#" class="button">Links afiliados</a>
            <a href="#" class="button promo-button">PROMOÇÃO</a>
            <a href="#" class="button">Contato</a>
        </main>

        <footer>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </footer>
    </div>
</body>

</html>