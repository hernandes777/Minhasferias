/* Estilo geral */
body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    margin: 0;
    padding: 0;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
/* Contêiner principal */
.container {
    max-width: 400px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}
/* Título principal */
h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
}
/* Subtítulo */
p {
    font-size: 1rem;
    margin-bottom: 30px;
    line-height: 1.6;
    color: #e0e0e0;
}
/* Formulário */
form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
/* Labels */
label {
    font-size: 0.9rem;
    font-weight: bold;
    color: #ffffff;
    text-align: left;
}
/* Campos de entrada */
input[type="email"],
input[type="password"] {
    padding: 10px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    outline: none;
    background: rgba(255, 255, 255, 0.8);
    color: #333;
    transition: box-shadow 0.3s ease;
}
/* Efeito de foco nos campos */
input[type="email"]:focus,
input[type="password"]:focus {
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}
/* Botão de envio */
button {
    padding: 10px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    background: #2575fc;
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}
button:hover {
    background: #6a11cb;
    transform: scale(1.05);
}
/* Mensagem de erro */
.erro {
    font-size: 0.9rem;
    color: #ff5f6d;
    margin-bottom: 15px;
    font-weight: bold;
}
/* Animação inicial */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
/* Aplicação da animação */
.container {
    animation: fadeIn 0.6s ease-out;
}