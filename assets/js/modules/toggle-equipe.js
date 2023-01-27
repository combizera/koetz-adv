export default function toggleEquipe() {
  const linksInternos = document.querySelectorAll(".equipe-nav li");
  function handleLink(event) {
    event.preventDefault(),
      linksInternos.forEach((event) => {
        event.classList.remove("active");
      }),
      event.currentTarget.classList.add("active");
  }
  linksInternos.forEach((event) => {
    event.addEventListener("click", handleLink);
  });

  const tabMenu = document.querySelectorAll(".js-tabmenu li"),
    tabContent = document.querySelectorAll(".js-tabcontent article");
  if (tabMenu.length && tabContent.length) {
    function e(e) {
      tabContent.forEach((e) => {
        e.classList.remove("active");
      }),
        tabContent[e].classList.add("active");
    }
    tabContent[0].classList.add("active"),
      tabMenu.forEach((t, n) => {
        t.addEventListener("click", function () {
          e(n);
        });
      });
  }
}
