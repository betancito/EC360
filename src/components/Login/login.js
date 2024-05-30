// Función para registrar un nuevo usuario
function signup() {
    const username = document.querySelector('.signup_username').value;
    const email = document.querySelector('.signup_email').value;
    const password = document.querySelector('.signup_password').value;

    // Verificar si el usuario ya existe
    if (localStorage.getItem(username)) {
        alert('El nombre de usuario ya está en uso');
        return;
    }

    // Almacenar el usuario en localStorage
    localStorage.setItem(username, JSON.stringify({ username, email, password }));
    alert('Registro exitoso');
}

// Función para autenticar un usuario
function login() {
    const usernameOrEmail = document.querySelector('.login-username').value;
    const password = document.querySelector('.login-password').value;

    // Buscar el usuario por nombre de usuario o email
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        const user = JSON.parse(localStorage.getItem(key));

        if ((user.username === usernameOrEmail || user.email === usernameOrEmail) && user.password === password) {
            alert(`Inicio de sesión exitoso, Bienvenido ${user.username}!`);
            window.location.href = 'usermain.html'
            return;
        }
    }

    // Si el usuario no se encuentra o la contraseña es incorrecta
    alert('Usuario no encontrado o contraseña incorrecta');
}

// Manejar el evento de click en el botón de signup
document.querySelector('.signup_button').addEventListener('click', signup);

// Manejar el evento de click en el botón de login
document.querySelector('.login_button').addEventListener('click', login);

