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

      if (validarCampos()) {
        $.ajax({
          type: "POST",
          url: "/ConcessionariaDeCarros-main/src/controller/usuarioController.php",
          async: true,
          data:
            data +
            "&" +
            $.param({
              _action: "realizarLogin",
            }),
          cache: true,
          success: function (dados) {
            var param = dados.split(",¿");

            statusLogin = param[0];
            url = param[1];

            if (statusLogin == 1) {
              location.href = url.replace(/^\s+|\s+$/gm, "");
            } else {
              var senha = $("#senhaLogin");

              var erromsg =
                '<div class="erromsg">Usuário ou senha inválido!</div>';

              senha.after(erromsg);
            }
          },
        });
      }
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
});

//CADASTRAR USUÁRIO
$(document).ready(function () {
  var formularioCadastro = $("#frmCadastro");
  if (formularioCadastro.length) {
    formularioCadastro.submit(function (e) {
      e.preventDefault();

      var data = $("#frmCadastro").serialize();

      if (validarCadastro()) {
        $.ajax({
          type: "post",
          url: "/ConcessionariaDeCarros-main/src/controller/cadastroController.php",
          async: true,
          data: data + "cadastrarUsuario",
          cache: false,
          success: function (dados) {
            console.log("Resposta do servidor:", dados);

            try {
              console.log("Antes do split");

              var param = dados.split(",¿");

              console.log("Depois do split");

              statusCadastro = param[0];

              if (statusCadastro == 1) {
                alert("Usuário cadastrado com sucesso!");
              } else {
                alert("Erro ao cadastrar usuário!");
              }
            } catch (error) {
              console.error(
                "Erro no processamento do sucesso da requisição:",
                error
              );
              alert(
                "Erro inesperado ao processar a resposta do servidor. Consulte o console para obter mais informações."
              );
            }
          },
        });
      }
    });

    function validarCadastro() {
      var status = true;
      $(".erromsg").remove();

      var email = $("#emailCadastro");
      if (!email.val() || !isValidEmail(email.val())) {
        email.after('<div class="erromsg">Preencha um e-mail válido</div>');
        status = false;
      }

      var senha = $("#senhaCadastro");
      if (!senha.val()) {
        senha.after('<div class="erromsg">Preencha a senha</div>');
        status = false;
      }

      return status;
    }

    function isValidEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  }
});
