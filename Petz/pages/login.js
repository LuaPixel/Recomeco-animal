// Seleciona elementos do DOM
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
const toggleFormLink = document.getElementById('toggle-form');
const formTitle = document.getElementById('form-title');

// Variável para controlar o estado do formulário
let isRegister = false;

// Função para alternar entre Login e Cadastro
toggleFormLink.addEventListener('click', (event) => {
  event.preventDefault(); // Evita o recarregamento da página ao clicar no link

  isRegister = !isRegister; // Alterna o estado

  // Altera a exibição dos formulários com base no estado
  if (isRegister) {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
    formTitle.textContent = 'Cadastre-se';
    toggleFormLink.textContent = 'Já possui uma conta? Faça login';
  } else {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
    formTitle.textContent = 'Login';
    toggleFormLink.textContent = 'Não possui conta? Cadastre-se';
  }
});
