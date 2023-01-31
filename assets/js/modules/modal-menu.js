export default function modalMenu() {
  const btnAbrirMenu = document.querySelector('[data-modal-menu="abrir"]');
  const btnFecharMenu = document.querySelector('[data-modal-menu="fechar"]');
  const btnContainerMenu = document.querySelector(
    '[data-modal-menu="container"]'
  );

  if (btnAbrirMenu && btnContainerMenu) {
    function abrirMenu(event) {
      event.preventDefault();
      btnContainerMenu.classList.add("active");
      console.log("clicou abrir");
    }

    function fecharMenu(event) {
      event.preventDefault();
      btnContainerMenu.classList.remove("active");
    }

    function clickOutMenu(event) {
      if (event.target === this) fecharLogin(event);
    }

    btnAbrirMenu.addEventListener("click", abrirMenu);
    btnFecharMenu.addEventListener("click", fecharMenu);
    btnContainerMenu.addEventListener("click", clickOutMenu);
  }
}
