// MOBILE MENU SWITCH
var mMenuStatus = false;

$('.mob-menu-btn').on('click', function(event) {
  event.preventDefault();
  if (!mMenuStatus) {
    $('.nav-container').animate({
      height: $('.navigation').height()
    });
    mMenuStatus = true;
  } else {
    $('.nav-container').animate({
      height: 0
    });
    mMenuStatus = false;
  }
});
