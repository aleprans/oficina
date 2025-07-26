$(document).ready(function() {
  loading.css('display', 'none')
  $('#preventiva').addClass('active')
  $('#preventivas').DataTable({
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