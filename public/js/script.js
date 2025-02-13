//DROPDOWN MENU
function initDropdownMenu() {
  const dropdownMenus = document.querySelectorAll('[data-dropdown]');
  dropdownMenus.forEach(menu => {
    ['touchstart', 'click'].forEach(userEvent => {
      menu.addEventListener(userEvent, handleClick);
    });
  });

  function handleClick(event) {

    const link = event.target.href;
    event.preventDefault();
    this.classList.add('active');
    outsideClick(this, ['touchstart', 'click'], () => {
      this.classList.remove('active');
    });
    if(link){
    window.location.replace(link);
    }
  };
 }

initDropdownMenu();

//OUTSIDE CLICK
function outsideClick(element, events, callback) {
  const html = document.documentElement;
  const outside = 'data-outside';

  if(!element.hasAttribute(outside)) {
    events.forEach(userEvent => {
      html.addEventListener(userEvent, handleOutsideClick);
    })
    element.setAttribute(outside, '');
  }
  function handleOutsideClick(event) {
    if(!element.contains(event.target)) {
      element.removeAttribute(outside);
      events.forEach(userEvent => {
        html.removeEventListener(userEvent, handleOutsideClick);
      })
      callback();
    }
  }
}