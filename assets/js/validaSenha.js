function validaSenha() {
    var campo1 = document.getElementById('password').value;
    var campo2 = document.getElementById('passwordConfirm').value;
    if (campo1 == campo2) {
    } else {
     document.getElementById('senhaNaoConfere').innerHTML = `<div class="alert alert-danger" role="alert" id="senhaNaoConfere">
     As senhas não correspondem
     </div>`;
    }
 }