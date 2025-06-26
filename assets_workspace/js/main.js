let winW = $(window).outerWidth();
let winH = $(window).outerHeight();
let winScroll = $(window).scrollTop();
let checkMo = 960;
var mySwiper = undefined;
$(window).on('load',function(){
  const swiper = new Swiper('.age_swiper', {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
  const swiper2 = new Swiper('.service_swiper', {
    loop: true,
    autoplay: {
      // delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".service_next",
      prevEl: ".service_prev",
    },
  });
  const service_tab = $('.service_tab li');
  service_tab.each(function(index) {
    $(this).on('click', function() {
      service_tab.removeClass('_active');
      $(this).addClass('_active');
      swiper2.slideTo(index + 1);
    });
  });
  swiper2.on('slideChange', function() {
    var activeIndex = swiper2.realIndex;
    $('.service_tab li').removeClass('_active');
    $('.service_tab li').eq(activeIndex).addClass('_active');
  });

  const swiper3 = new Swiper('.ds_swiper', {
      loop: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".ds_next",
        prevEl: ".ds_prev",
      },
  });
  const tabs = $('.ds_tab li');
  tabs.each(function(index) {
    $(this).on('click', function() {
      tabs.removeClass('_active');
      $(this).addClass('_active');
      swiper3.slideTo(index + 1);
    });
  });
  swiper3.on('slideChange', function() {
    var activeIndex = swiper3.realIndex;
    $('.ds_tab li').removeClass('_active');
    $('.ds_tab li').eq(activeIndex).addClass('_active');
  });
});
function initSwiper() {
  if (winW < checkMo && mySwiper == undefined) {
    mySwiper = new Swiper(".logo_swiper", {
      simulateTouch: true,
      loop: true, 
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".logo_next",
        prevEl: ".logo_prev",
      },
    });
  } else if (winW >= checkMo && mySwiper != undefined) {
    mySwiper.destroy();
    mySwiper = undefined;
  }
}
initSwiper();

function imageResize() {
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
let checked;
$(window).on('load resize', function() {
  winW = $(window).outerWidth();
  initSwiper();
  imageResize();
  function countUp() {
  $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count'),
        suffix = $this.attr('data-suffix');

    $({ countNum: 0 }).animate({
      countNum: countTo
    },
    {
      duration: 1200,
      easing: 'swing',
      step: function() {
        var formattedNum = Math.floor(this.countNum).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $this.text(formattedNum + suffix);
      },
      complete: function() {
        var formattedNum = Number(this.countNum).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $this.text(formattedNum + suffix);
      }
    });
  });
}
var aniFunction = function() {
  var $ani = $('.ani_start'); 

  $ani.each(function () {
    winScroll = $(window).scrollTop();
      var aniStart = $(this).offset().top - winH / 1.2; // 화면 비율에 해당하는 지점
      if (winScroll >= aniStart) {
          $(this).addClass('__ani'); 
      } else {
          $(this).removeClass('__ani'); 
      }
  });
  $(window).on('scroll', function() {
    $('.counter').each(function() {
      var $this = $(this);

      if ($this.hasClass('_ani')) return; // 이미 실행했으면 스킵

      var scrollTop = $(window).scrollTop();
      var offsetTop = $this.offset().top;
      var windowHeight = $(window).height();

      if (scrollTop + windowHeight > offsetTop + 50) { // 50px 조정 가능
        $this.addClass('_ani'); // 한번 실행했음을 표시
        countUp($this);         // 카운트 업 함수 실행
      }
    });
  });
};
$(window).on('scroll resize', aniFunction);
aniFunction();
});