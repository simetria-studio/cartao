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
})
