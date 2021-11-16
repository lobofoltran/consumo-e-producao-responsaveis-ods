function validateMyForm () {
    var campo1 = document.getElementById('password').value;
    var campo2 = document.getElementById('passwordConfirm').value;
    if (campo1 == campo2) {
        return true;
    } else {
        event.preventDefault();
        return false;
    }
}