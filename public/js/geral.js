$(document).ready(function()  {
  $('#dataTable').DataTable({
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
})
const api = '../src/utilitaries/api.php'
const toast = $('#liveToast')
var toastTitle = $('#title')
var toastMsg = $('#msg')
var loading = $('#loading')
const ext_permitidas = ['jpg', 'jpeg', 'png']



function toastCreate(title, msg, tipo){

  toastTitle.empty()
  toastTitle.append(title)
  toastTitle.removeClass()
  toastTitle.addClass('me-auto text-'+tipo)
  toastMsg.empty()
  toastMsg.append(msg)
  toastMsg.removeClass()
  toastMsg.addClass('toast-body text-bg-'+tipo)
  // toast.addClass('text-bg-'+tipo)
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toast)
  toastBootstrap.show()
}
