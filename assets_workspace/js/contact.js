
  let parallax = document.querySelector('.ani_moving');
  $(parallax).hover(function() {
    let parallaxInstance = new Parallax(parallax);
  });
  $(window).on('load', function() {

    moment.lang('ko', {
      weekdays: ["일", "월", "화", "수", "목", "금", "토"],
    });
    let date_text = $('input[name="your-date"]');
    $(date_text).prop('readonly', true);
    $(date_text).daterangepicker({
      opens: 'right',
      autoUpdateInput: false,
      autoApply: true,
      showDropdowns: true,
      locale: {
        cancelLabel: 'Clear',
        "separator": " ~ ",
        "monthNames": [". 01", ". 02", ". 03", ". 04", ". 05", ". 06", ". 07", ". 08", ". 09", ". 10", ". 11", ". 12"],
        "format": 'YYYY.MM.DD'
      }
    });
    $(date_text).on('show.daterangepicker', function(ev, picker) {
      $(".form_wrap .flex_box .contact_item span[data-name=your-date]").addClass("open_calender");
    });
    $(date_text).on('hide.daterangepicker', function(ev, picker) {
      $(".form_wrap .flex_box .contact_item span[data-name=your-date]").removeClass("open_calender");
    });
    $(date_text).on('showCalendar.daterangepicker', function(ev, picker) {
      $('.month select').prop('disabled', true);
    });
    $(date_text).on('apply.daterangepicker', function(ev, picker) {
      $('.contact_date').addClass("o_verify");
      $(this).val(picker.startDate.format('YYYY.MM.DD(dddd)') + ' ~ ' + picker.endDate.format('YYYY.MM.DD(dddd)'));
    });

    $('input[name="_wpcf7_free_text_your-checkbox"]').attr('name', 'your-checkbox_free_text');
    $('input[name="_wpcf7_free_text_your-ad"]').attr('name', 'your-ad_free_text');
    let subText1 = $('input[name="your-checkbox_free_text"]');
    let subText2 = $('input[name="your-ad_free_text"]');
    // let subText3 = $('input.wpcf7-free-text');
    $(subText1).attr("placeholder", "직접 입력");
    $(subText2).attr("placeholder", "직접 입력");
    // $(subText3).attr("placeholder", "직접 입력");
    $(subText1).on('input', function() {
      if ($(this).val().length > 218) {
        $(this).val($(this).val().substring(0, 218));
      }
      $('.has-free-text input[name="your-checkbox\\[\\]"]').val("그 외" + $(this).val());
    });
    $(subText2).on('input', function() {
      if ($(this).val().length > 250) {
        $(this).val($(this).val().substring(0, 250));
      }
      $(".has-free-text input[name='your-ad']").val('기타'+$(this).val());
    });

    $('input[name="your-checkbox[]"]').each(function() {
      // let beforeStr = $(this).val();
      // let afterStr = beforeStr.split('(');
      // $(this).val(afterStr[0]);
      // $(this).next().html(afterStr[0] + `<em>(` + afterStr[1] + `</em>`);
      // if (afterStr[1] == undefined) {
      //   $(this).next().html(afterStr[0]);
      // }
    });
  });
  $(window).on('load resize', function() {
    var windowWidth = $(window).width();
    if (windowWidth < 960) {
      moment.lang('ko', {
        weekdays: ["일", "월", "화", "수", "목", "금", "토"],
      });
      let date_text = $('input[name="your-date"]');
      $(date_text).prop('readonly', true);
      $(date_text).daterangepicker({
        opens: 'center',
        autoUpdateInput: false,
        autoApply: true,
        showDropdowns: true,
        locale: {
          cancelLabel: 'Clear',
          "separator": " ~ ",
          "monthNames": [". 01", ". 02", ". 03", ". 04", ". 05", ". 06", ". 07", ". 08", ". 09", ". 10", ". 11", ". 12"],
          "format": 'YYYY.MM.DD'
        },
        linkedCalendars: false
      });
      $(date_text).on('showCalendar.daterangepicker', function(ev, picker) {
        $('.month select').prop('disabled', true);
      });
      $(date_text).on('show.daterangepicker', function(ev, picker) {
        $(".form_wrap .flex_box .contact_item span[data-name=your-date]").addClass("open_calender");
      });
      $(date_text).on('hide.daterangepicker', function(ev, picker) {
        $(".form_wrap .flex_box .contact_item span[data-name=your-date]").removeClass("open_calender");
      });
      $(date_text).on('apply.daterangepicker', function(ev, picker) {
        $('.contact_date').addClass("o_verify");
        $(this).val(picker.startDate.format('YYYY.MM.DD(dddd)') + ' ~ ' + picker.endDate.format('YYYY.MM.DD(dddd)'));
      });
    }

  });
  const path = $("input[name=location]"); // 필드 선택
  let urlParams = window.location.search; // ? 파라미터 가져오기

  // urlParams 안에 ?path= 내용을 찾는다.
  // true : ?path= 텍스트 삭제 후 내용 적용
  // false : GO_estimate 적용
  let pathBoolean = urlParams.includes('?path=');
  if (pathBoolean) {
    let pathUrl = urlParams.replace(/\?path=/g, ""); // 불필요한 문구 삭제
    path.prop('value', pathUrl);
  } else {
    //path.prop('value', 'GO_estimate');
  }

  let $path = location.pathname;
  let pathUrl = $path.replace(/\?path=/g, "");
  if ($path == '/contact') {
    path.prop('value', pathUrl);
    $("input[name=fieldName").prop('value', "광고상품문의");
    $(".ga4__cta-submit").attr("ga4-text", "contact1");
  }
  $(".pi_popup").on('click',function(){
    $('.common-agree').show();
  });
  $('.bt_close').on('click',function(){
    $('.common-agree').hide();
  });
