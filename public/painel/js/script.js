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
$("#select_status").on('change', function () {

    var optionSelected = $(this).find("option:selected");
    var valor = optionSelected.val();

    $.ajax({
        url: "filter-by-status",
        data: { status: valor },
        success: function (data) {
            $('.pedidos-body').html(data.buscaCepview)
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
$('#cep').mask('99999-999');
$('#cpf').mask('999.999.999-99');
$('#telefone').mask('(99) 99999-9999');

