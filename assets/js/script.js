function modalSucess() {
  const btnAbrirLogin = document.querySelectorAll('[data-modal-login="abrir"]');
  const btnFecharLogin = document.querySelector('[data-modal-login="fechar"]');
  const btnContainerLogin = document.querySelector(
    '[data-modal-login="container"]'
  );

  if (btnAbrirLogin && btnFecharLogin && btnContainerLogin) {
    function abrirLogin(event) {
      event.preventDefault();
      btnContainerLogin.classList.add("active");
    }

    function fecharLogin(event) {
      event.preventDefault();
      btnContainerLogin.classList.remove("active");
    }

    function clickOutLogin(event) {
      if (event.target === this) fecharLogin(event);
    }

    btnAbrirLogin.forEach((e) => {
      e.addEventListener("click", abrirLogin);
    });
    btnFecharLogin.addEventListener("click", fecharLogin);
    btnContainerLogin.addEventListener("click", clickOutLogin);
  }
}
