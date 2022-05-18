$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#cadbutton").click(function () {
    var name = $("input[name=name]").val();
    var cpf = $("input[name=cpf]").val();
    var data_nascimento = $("input[name=data_nascimento]").val();
    var genero = $("input[name=genero]").val();
    var email = $("input[name=email]").val();
    var celular = $("input[name=celular]").val();
    var telefone = $("input[name=telefone]").val();
    $.ajax({
        url: "client-insert",
        data: { name: name, cpf: cpf, data_nascimento: data_nascimento, genero: genero, email: email, celular: celular, telefone: telefone, },
        success: function (data) {
            console.log(data[0].view);
            $('#form-pay').html(data[0].view)
        }
    });
});
$("#paybutton").click(function () {
    var id = $("input[name=id_user]").val();
    console.log(id)
    $.ajax({
        url: "teste-api",
        data: { id: id,},
        success: function (data) {
            console.log(data);
            // $('#form-pay').html(data[0].view)
        }
    });
});
