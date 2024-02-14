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

  // Ajax
  $('#competencia').on('change', e => {
    let competencia = $(e.target).val();

    $.ajax({
      type: "GET",
      url: "app.php",
      data: `competencia=${competencia}`, // x-www-form-urlencoded
      dataType: "json",
      success: response => {
        $('#numeroVendas').html(response.numero_vendas);
        $('#totalVendas').html(response.total_vendas);
        $('#clientesAtivos').html(response.clientes_ativos);
        $('#clientesInativos').html(response.clientes_inativos);
        $('#totalReclamacoes').html(response.total_reclamacoes);
        $('#totalElogios').html(response.total_elogios);
        $('#totalSugestoes').html(response.total_sugestoes);
        $('#totalDespesas').html(response.total_despesas);

        $('#totalVendas').prepend('R$ ');
        $('#totalDespesas').prepend('R$ ');
      },
      error: error => {
        console.log(error);
      }
    });
  })
})