
let winW = $(window).outerWidth();
let checkMo = 960;
function imageResize() {
  winW = $(window).outerWidth();
  let images = $('img.img_resize');
  images.each(function() {
    let src = $(this).attr('src');
    if (winW <= checkMo) {
      $(this).attr('src', src.replace('/pc/', '/mo/'));
    } else {
      $(this).attr('src', src.replace('/mo/', '/pc/'));
    }
  });   
}
$(window).on('load resize', function() {
  imageResize();
});