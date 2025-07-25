var nome = $('#nome')
var contato = $('#contato')
var obs = $('#obs')

$(document).ready(function() {
  loading.css('display', 'none')
  $('#membro').addClass('active')
  $('#membros').DataTable({
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
  nome.focus()
})

nome.keyup((e) => {
  const keycode = e.keyCode ? e.keyCode : e.wich
  if(keycode == 13){
    contato.focus()
  }
})

contato.keyup((e) => {
  const keycode = e.keyCode ? e.keyCode : e.wich
  if(keycode == 13){
    obs.focus()
  }
})

$('#btnSalvar').click( function() {
  if(verify()){
    loading.css('display', 'flex')
    $('#form_membro_update').submit()
  }else {
    toastCreate('Erro', 'Nome obrigatório!', 'danger')
  }
})

function btnDelet(id) {
  loading.css('display', 'flex')
  $('#form_delete'+id).submit()
}

function btnEdit() {
  loading.css('display', 'flex')
}

function verify() {
  if($('#nome').val() == ""){
    return false
  }
  return true
}