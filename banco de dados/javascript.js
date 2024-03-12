document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-contato');

    form.addEventListener('submit', function(event) {
        const nome = document.getElementById('nome').value.trim();
        const email = document.getElementById('email').value.trim();
        const mensagem = document.getElementById('mensagem').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let isValid = true;

        if (nome === '') {
            isValid = false;
            showError('Por favor, insira seu nome.');
        }

        if (!emailRegex.test(email)) {
            isValid = false;
            showError('Por favor, insira um endereço de email válido.');
        }

        if (mensagem === '') {
            isValid = false;
            showError('Por favor, insira uma mensagem.');
        }

        if (isValid) {
            // Se todas as validações passarem, exibe o pop-up
            event.preventDefault();
            showSuccessPopup();
        } else {
            event.preventDefault();
        }
    });

    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error';
        errorDiv.textContent = message;

        form.insertBefore(errorDiv, form.firstChild);
    }

    function showSuccessPopup() {
        alert('As informações foram validadas com sucesso!');
    }
});