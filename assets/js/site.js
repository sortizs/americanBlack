function validatePassword(){
    var password = document.getElementById('contrasena');
    var valPassword = document.getElementById('ccontrasena');
    var help = document.getElementById('helpId');

    if (password.value != valPassword.value) {
        help.style.display = 'block';
    } else {
        help.style.display = 'none';
    }
}