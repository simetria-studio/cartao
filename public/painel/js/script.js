$("#select_id").on('change', function () {

    var optionSelected = $(this).find("option:selected");
    var valor = optionSelected.val();

    $.ajax({
        url: "filter-by-id",
        data: { valor: valor },
        success: function (data) {
            $('.pedidos-body').html(data.view)
        }
    });
});

$(document).on('change','.filter-status', function () {
    var optionSelected = $(this).find("option:selected");
    var valor = optionSelected.val();
    $.ajax({
        url: "filter-by-status",
        data: { status: valor },
        success: function (data) {
            $('.pedidos-body').html(data.view)
        }
    });
});

$('.btn-status').on('click', function () {
    var todos = $(this).data('value');
    $.ajax({
        url: "filter-by-status",
        data: { status: todos },
        success: function (data) {
            $('.pedidos-body').html(data.view)
        }
    });
});
$('#cep').on('blur, keyup', function () {
    var todos = $(this).val();
    $.ajax({
        url: "busca-cep",
        data: { search: todos },
        success: function (data) {
            $('#endereco').val(data.street);
            $('#bairro').val(data.district);
            $('#cidade').val(data.city);
            $('#uf').val(data.uf);
        }
    });
});

//masks
$('#cep').mask('99999-999');
$('#cpf').mask('999.999.999-99');
$('#telefone').mask('(99) 99999-9999');

//end masks

$(document).on('click', '.percent', function () {
    var id = $(this).data('id');
    var id_pedido = $(`.input_pedido_${id}`).val();
    var id_influencer = $(`.input_influencer_${id}`).val();
    Swal.fire({
        title: 'Deseja pagar esta comissão?',
        // text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, eu quero pagar!',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "split-store",
                data: { id_pedido: id_pedido, id_influencer: id_influencer, },
                success: function (data) {
                    console.log(data);
                    window.location.href = 'splits';
                }
            });
        }
    })

});
$(document).on('click', '.trash', function () {
    var id = $(this).data('id');
    var id_pedido = $(`.input_pedido_${id}`).val();
    var id_influencer = $(`.input_influencer_${id}`).val();
    Swal.fire({
        title: 'Deletar essa venda?',
        // text: "You won't be able to revert this!",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, eu quero deletar!',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "delete-venda",
                data: { id_pedido: id_pedido },
                success: function (data) {
                    console.log(data);
                    document.location.reload(true);
                }
            });
        }
    })

});


$('.payment-modal').on('click', function () {
    var dados = $(this).data('dados')
    var valor1 = parseFloat(dados.valor_total);
    var valor2 = parseFloat(dados.valor);
    var valorTotal = valor1.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    var comissao = valor2.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    console.log(dados);
    $('#pedido').val(dados.id);
    $('#total').val(valorTotal);
    $('#comissao').val(comissao);
    $('#cliente').val(dados.cliente);
    $('#influencer').val(dados.influencer);
    $('#id_influencer').val(dados.id_influencer);
    $('#split').val(dados.id);
});
