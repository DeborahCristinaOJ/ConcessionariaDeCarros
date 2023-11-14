//FRONT-END

$(document).ready(function () {
  document.querySelectorAll("input").forEach((item) => {
    item.addEventListener("focus", function () {
      item.previousElementSibling.className = "label-selecionada";
    });
    item.addEventListener("blur", function () {
      console.log(item.value);
      if (item.value === "") {
        item.previousElementSibling.className = "";
      }
    });
  });

  document
    .getElementById("registrarLink")
    .addEventListener("click", function () {
      if (window.innerWidth < 600) {
        document.getElementById("Cadastrar").style.display = "block";
        document.getElementById("login").style.display = "none";
      } else {
        document.getElementById("overlay").style.transform =
          "translate(700px , -25px)";
      }
    });
  document.getElementById("loginLink").addEventListener("click", function () {
    if (window.innerWidth < 600) {
      document.getElementById("login").style.display = "block";
      document.getElementById("Cadastrar").style.display = "none";
    } else {
      document.getElementById("overlay").style.transform =
        "translate(0px , -25px)";
    }
  });
});

//BACK-END

//FAZER LOGIN DO USUÁRIO

$(document).ready(function () {


  var formularioCadastro = $("#frmLogin");
  
  if (formularioCadastro.length) {
    
    
    formularioCadastro.submit(function (e) {

      e.preventDefault();

      var data = $("#frmLogin").serialize();

      //if (validarCampos()) {
        $.ajax({
          type: "post",
          url: "../../src/controller/usuarioController.php",
          async: true,
          data:
            data +
            "&" +
            $.param({
              _action1: "realizarLogin",
            }),
          cache: true,
          success: function (dados) {
            //alert(dados);

            var param = dados.split(",¿");

            statusLogin = param[0].trim();
            url = param[1];

            if (statusLogin == 1) {
              alert("Deu certo");
              window.location = param[1];
            } else {
              var senha = $("#senhaLogin");
              alert("aaa");
              var erromsg =
                '<div class="erromsg">Usuário ou senha inválido!</div>';

              senha.after(erromsg);
            }
          },
        });
      //}
    });

    function validarCampos() {
      var status = true;

      $(".erromsg").remove();

      var email = $("#emailLogin");
      var senha = $("#senhaLogin");

      var erromsg = '<div class="erromsg">Preencha o campo <span></span></div>';

      if (!email.val()) {
        email.after(erromsg);
        email.next().find("span").text("email");
        status = false;
      }

      if (!senha.val()) {
        senha.after(erromsg);
        senha.next().find("span").text("senha");
        status = false;
      }

      return status;
    }
  }
  //CADASTRAR USUÁRIO

  $(document).on("submit", "#frmCadastro", function (e) {

    e.preventDefault();

    var data = $(this).serialize();

    $.ajax({
      type: "post",
      url: "../../src/controller/usuarioController.php",
      async: true,
      data:
        data +
        "&" +
        $.param({
          _action: "cadastrarUsuario",
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

    
  });
});
