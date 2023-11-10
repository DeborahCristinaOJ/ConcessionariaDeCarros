$(document).ready(function () {
  $(document).on("submit", "#frmVeiculo", function (e) {
    e.preventDefault();

    var data = $("#frmVeiculo").serialize();

    if (validarCamposVeiculo()) {
      $.ajax({
        type: "post",
        url: "/ConcessionariaDeCarros-main/src/controller/veiculoController.php",
        async: true,
        data:
          data +
          "&" +
          $.param({
            _action: "cadastrarVeiculo",
          }),
        cache: true,
        success: function (dados) {},
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("Erro no AJAX:", textStatus, errorThrown);
        },
      });
    }
  });

  function validarCamposVeiculo() {
    var status = true;
    $(".erromsg").remove();

    var marca = $("#marca");
    var modelo = $("#modelo");
    var ano = $("#ano_fabricacao");
    var quilometragem = $("#quilometragem");
    var combustivel = $("#combustivel");
    var cor = $("#cor");
    var placa = $("#placa");
    var descricao = $("#descricao");
    var preco = $("#preco");

    var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

    if (!marca.val()) {
      marca.after(erromsg);
      marca.next().find("span").text("marca");
      status = false;
    }

    if (!modelo.val()) {
      modelo.after(erromsg);
      modelo.next().find("span").text("modelo");
      status = false;
    }

    if (!ano.val() || isNaN(ano.val())) {
      ano.after(erromsg);
      ano.next().find("span").text("ano");
      status = false;
    }

    if (!quilometragem.val()) {
      quilometragem.after(erromsg);
      quilometragem.next().find("span").text("quilometragem");
      status = false;
    }

    if (!combustivel.val()) {
      combustivel.after(erromsg);
      combustivel.next().find("span").text("combustivel");
      status = false;
    }

    if (!cor.val()) {
      cor.after(erromsg);
      cor.next().find("span").text("cor");
      status = false;
    }

    if (!placa.val()) {
      placa.after(erromsg);
      placa.next().find("span").text("placa");
      status = false;
    }

    if (!descricao.val()) {
      descricao.after(erromsg);
      descricao.next().find("span").text("descricao");
      status = false;
    }

    if (!preco.val() || isNaN(preco.val())) {
      preco.after(erromsg);
      preco.next().find("span").text("preco");
      status = false;
    }

    return status;
  }
});
