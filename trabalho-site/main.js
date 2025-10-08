
function validaçao_login() {

    let Usuario = document.getElementById('Usuario').value;
    let Senha = document.getElementById('Senha').value;

    if (Senha =='' && Usuario == ''){
        alert('bloco de Usuario e Senha vazio.')
        return
    } else if(Senha ==''){
        alert('bloco de Senha vazia.')
    } else if (Usuario ==''){
        alert('bloco de Usuario vazio.')
    } else {
        alert('login bem sucedido')
    }
}