(function ($){
	'use strict';

	const $menuDropdown = $('#menuDropdown');

  if ($menuDropdown.length) {
    const $menuItems = $('#menuItems');

    $(document).on('click', 'li[data-drop]', function(e) {
      e.preventDefault()

      // Do nothing if has no data attribute
      if (!this.dataset && !this.dataset.drop) return

      // Get dropdown element by data attribute
      const dropID = this.dataset.drop
      const $dropdown = $menuDropdown.find(`[data-drop=${dropID}]`)

      // Do nothing if corresponding dropdown element not exists
      if (!$dropdown.length) return

      // Highlight active menu item.
      $menuItems.find('[data-drop]').each(function(i, el) {
        el.classList.remove('mainMenu_active');
      })
      this.classList.add('mainMenu_active');

      // Show dropdown wrap. Add blur to the background
      if ($menuDropdown.is(':hidden')) {
        $menuDropdown.removeClass('d-none')
        document.body.classList.add('blured');
      }

      // Show dropdown element by data attribute. Hide previously active
      $menuDropdown.find('[data-drop]').each(function (i, el) {
        if (el.dataset && el.dataset.drop && el.dataset.drop === dropID) {
          // el.style.display = 'inherit'
          el.classList.remove('d-none');
        } else {
          el.classList.add('d-none');
          // el.style.display = 'none'
        }
      })
    })

    // Close menu dropdown and remove blur overlay
    const menuDropdown = document.getElementById('menuDropdown');
    window.onclick = function(e) {
      if (e.target.contains(menuDropdown) && e.target !== menuDropdown) {
        document.body.classList.remove('blured');
        $menuDropdown.addClass('d-none')

        // Highlight active menu item.
        $menuItems.find('[data-drop]').each(function(i, el) {
          el.classList.remove('mainMenu_active');
        })
      }
    }
  }
})(jQuery);

