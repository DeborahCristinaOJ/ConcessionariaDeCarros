//DESTAQUES BANNER

document.addEventListener("DOMContentLoaded", function () {
  const portaEsquerda = document.querySelector(".porta-esquerda");
  const portaDireita = document.querySelector(".porta-direita");
  const carros = document.querySelectorAll(".carro");

  let carroAtualIndex = 0;

  function abrirPortas() {
    portaEsquerda.style.transform = "translateX(-100%)";
    portaDireita.style.transform = "translateX(100%)";
  }

  function fecharPortas() {
    portaEsquerda.style.transform = "translateX(0)";
    portaDireita.style.transform = "translateX(0)";
  }

  function mostrarCarro(index) {
    carros.forEach((carro, i) => {
      if (i === index) {
        carro.style.transform = "scale(1.3)";
      } else {
        carro.style.transform = "scale(1)";
      }
    });
  }

  fecharPortas();

  const areaDestaques = document.querySelector(".Destaques");
  areaDestaques.addEventListener("mouseenter", abrirPortas);
  areaDestaques.addEventListener("mouseleave", fecharPortas);

  document.addEventListener("DOMContentLoaded", function () {
    const CarrosselCarros = new bootstrap.Carousel(
      document.getElementById(".carossel-carros-destaque"),
      {
        interval: 4000,
      }
    );
  });
});
