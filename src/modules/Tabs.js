class Tabs {
  constructor() {
    this.initiateCarousel()
  }

  initiateCarousel() {
    var $tabButtons = Array.prototype.slice.call(document.querySelectorAll('.js-tab-title'), 0);
    var $tabContent = Array.prototype.slice.call(document.querySelectorAll('.tabs__content'), 0);

    if ($tabButtons.length > 0) {

      // Add a click event on each of them
      $tabButtons.forEach(function ($el) {
        $el.addEventListener('click', function () {

          $tabContent.forEach(function (e) {
            e.classList.remove("is-active");
          });

          //Remove active class from other tabs
          $tabButtons.forEach(function ($el) {
            $el.classList.remove("is-active");
          });

          // Get the target from the clicked tab
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the tab and the content targetted
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }
  }
}

export default Tabs