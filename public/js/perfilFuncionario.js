$(document).ready(function () {


  var formularioCadastro = $("#frmVeiculo");

  if (formularioCadastro.length) {

    formularioCadastro.submit(function (e) {
      e.preventDefault();

      var data = $(this).serialize();

      

      if (validarCampos()) {
        $.ajax({
          type: "post",
          url: "../../src/controller/carroController.php",
          async: true,
          data:
            data +
            "&" +
            $.param({
              _action: "cadastrarCarro",
            }),
          cache: true,
          success: function (dados) {
            
            alert(dados);

            var parametros = [];

            var param = dados.split(",¿");

            parametros["status"] = param[0];
            parametros["msg"] = param[1];

            if (parametros["status"] == 1) {
              $("#msg").html(parametros["msg"]);

              $("#msg").fadeIn();
            }
          },
          error: function (error) {
            console.error("Erro:", error);
          },
        });
      }

      function validarCampos() {
        var status = true;

        $(".erromsg").remove();

        var marca = $("#marca");
        var modelo = $("#modelo");
        var ano_fabricacao = $("#ano_fabricacao");
        var quilometragem = $("#quilometragem");
        var combustivel = $("#combustivel");
        var cor = $("#cor");
        var placa = $("#placa");
        var descricao = $("#descricao");
        var preco = $("#preco");

        var erromsg =
          '<div class="erromsg">Preencha o campo <span></span></div>';

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
        if (!ano_fabricacao.val()) {
          ano_fabricacao.after(erromsg);
          ano_fabricacao.next().find("span").text("Ano de abricacao");
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
        if (!preco.val()) {
          preco.after(erromsg);
          preco.next().find("span").text("preco");
          status = false;
        }

        return status;
      }
    });
  }
});
