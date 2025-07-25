$('document').ready(function () {
  loading.css('display', 'none')
})
var user = $('#user')
var pass = $('#password')
var formLogin = $('#form_login')

user.keyup((e) => {
  const keycode = e.keyCode ? e.keyCode : e.wish
  if(keycode == 13){
    pass.focus()
  }
})

pass.keyup((e) => {
  const keycode = e.keyCode ? e.keyCode : e.wish
  if(keycode == 13) {
    logar()
  }
})

function logar() {
  if(verify()){
    loading.css('display', 'flex')
    formLogin.submit()
  }
}

function verify(){
  if(user.val().length < 5 ){
    toastCreate('ERRO', 'Usuário inválido!', 'danger')
    return false
  }
  if(pass.val().length < 6){
    toastCreate('ERRO', 'Senha inválida!', 'danger')
    return false
  }
  return true
}