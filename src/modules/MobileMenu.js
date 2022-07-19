class MobileMenu {
  constructor() {
       this.hamburger = document.querySelector(".hamburger");
    this.navLinks = document.querySelector(".nav-links");
    this.links = document.querySelectorAll(".nav-links li");
    this.events()
  }

  events() {

    this.hamburger.addEventListener('click', () => this.openMenu())
  }

  openMenu() {

    //Animate Links
    this.navLinks.classList.toggle("open");
    this.links.forEach(link => {
      link.classList.toggle("fade");
    });
    this.hamburger.classList.toggle("toggle");

  }
}

export default MobileMenu



