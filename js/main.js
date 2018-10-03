
$(document).ready(() => {

  $('.mob-menu-btn').on('click', function(event) {
    event.preventDefault();
    $('.nav-container').slideToggle();

  });
  
  $('.nav-container .nav-link').on('click touch', (event) => {
    if($(event.currentTarget).siblings("dropdown-content").length > 0){
      event.preventDefault();
    }
    $(event.currentTarget).closest('.nav-item').siblings().find('.dropdown-content').hide();
   $(event.currentTarget).next().toggle();
  }).on('mouseenter1', (event) =>  {
    $('.dropdown-content').hide();
    $(event.currentTarget).next('.dropdown-content').show();
  }).on('mouseleave1', () => {
    $('.dropdown-content').hide();
  });

  $('.dropdown-content').on('mouseenter', (event) =>  {
    $(event.currentTarget).show();
  }).on('mouseleave', () => {
    $('.dropdown-content').hide();
  })
  
  $(window).resize(() => {
    let width = $(window).width();
    $('.status').html(`Width: ${width}`);
    if(width < 945) {
      $('.nav-container').hide();
      $('.mob-menu-btn').show();
    }else{
      $('.nav-container').show();
      $('.mob-menu-btn').hide();
    }
  })

  // $('#overlay-galeri').on('click',() => {
    // $('#overlay-galeri').hide();
  // })

  // $('.thumbnail img').on('click', (event) => {
    // $('#overlay-galeri img').attr("src", $(event.currentTarget).attr('src'));
    // $('#overlay1').attr('background', `url('../${$(event.currentTarget).attr("src")}') center center no-repeat`);
    // $('#overlay1').attr('background', "url('../${$(event.currentTarget).attr('src')");
    // $('#overlay1').attr('color', 'red');
    // $('#overlay-galeri').show();
  // })
  

});