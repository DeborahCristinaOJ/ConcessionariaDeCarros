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

document.getElementById("registrarLink").addEventListener("click", function () {
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
