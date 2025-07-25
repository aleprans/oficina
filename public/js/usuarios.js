var user = $('#user')
var nome  = $('#nome')
var nivel  = $('#nivel')

$(document).ready(function() {
  loading.css('display', 'none')
  $('#usuario').addClass('active')
  $('#usuarios').DataTable({
    layout: {
      topStart: {
        buttons: ['excel', 'print', 'pdf'],
      }
    },
  // paging: false,
  // scrollY : 400,
  fixedHeader: true,
    ordering: false,
    language: {
      url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/pt-BR.json',
    }
  })
  
  user.focus()
})


user.keyup((e) => {
  const keycode = e.keyCode ? e.keyCode : e.wich
  if(keycode == 13){
    nome.focus()
  }
})

$('#btnSalvar').click( function() {
  if(verify()){
    loading.css('display', 'flex')
    $('#form_user_update').submit()
  }
})

function btnDelet(id) {
  loading.css('display', 'flex')
  $('#form_delete' + id).submit()
}

function btnEdit() {
  loading.css('display', 'flex')
}

function verify() {
  if(user.val().length < 3){
    toastCreate('ERRO', 'Usuário inválido!', 'danger')
    return false
  }
  if(nome.val().length < 5){
    toastCreate('ERRO', 'Nome inválido!', 'danger')
    return false
  }
  if(nivel.val() == '0'){
    toastCreate('ERRO', 'Selecione um nivel de acesso!', 'danger')
    return false
  }
  return true
}