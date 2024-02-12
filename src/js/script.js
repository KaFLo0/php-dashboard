$(document).ready(() => {
  $('#documentacao').on('click', () => {
    // $('#pagina').load('documentacao.html');
    $.post('documentacao.html', data => { // Para praticar
      $('#pagina').html(data);
    })
  })
  $('#suporte').on('click', () => {
    $.get('suporte.html', data => {
      $('#pagina').html(data);
    })
  })
})