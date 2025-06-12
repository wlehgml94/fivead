/* ********************* */
/* contact form 유효성 체크 */
/* ********************* */

/*
o_valid : 유효성 체크 항목
o_verify : 유효성 체크 완료
*/

jQuery(document).ready(function() {

	// 유효성 메시지 : on/off, 한번만 작동
	function $ff_validBox($this, item) {
		if($this.next().hasClass('ff_valid_box') === false) {
			$this.after(item);
		}
	}

	// 유효성 메시지 : 텍스트
	function $ff_validText(name) {
		return `<div class="ff_valid_box"><p class="ff_valid_text">올바른 ${name} 입력해 주세요</p></div>`
	}

	// 유효성 on
	function $valid_on($this) {
		$this.closest('.o_valid').addClass('o_verify');
		$this.removeClass('ff_not_valid');
	}

	// 유효성 off
	function $valid_off($this) {
		$this.closest('.o_valid').removeClass('o_verify');
		$this.addClass('ff_not_valid');
	}


	/* ********** ********** ********** ********** ********** ********** ********** */

	// *****
	// 텍스트 필드
	$('input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		if ($this.val().length > 0) {
				$valid_on($this);
				$this.next().remove();
			} else {
				$valid_off($this);
			}
	});

	// *****
	// 텍스트 필드 : 이름
	$('.contact_name input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = `<div class="ff_valid_box"><p class="ff_valid_text">이름을 입력해 주세요</p></div>`;

		if ($this.val().length <= 0) {
			$ff_validBox($this, validText_complete);
		}
	});


	// ***** 
	// 텍스트 필드 : 회사명
	$('.contact_company input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = `<div class="ff_valid_box"><p class="ff_valid_text">회사명을 입력해 주세요</p></div>`;

		if ($this.val().length <= 0) {
			$ff_validBox($this, validText_complete);
		}
	});


	$('input[name="your-company"]').on('input', function() {
		// "your-name" 필드에 "your-company" 필드의 값을 동기화
		$('input[name="your-name"]').val($(this).val());
	});

	// ***** 
	// 텍스트 필드 : 홍보하려는 제품 서비스
	$('.contact_service input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = `<div class="ff_valid_box"><p class="ff_valid_text">홍보하려는 제품/서비스를 입력해 주세요</p></div>`;

		if ($this.val().length <= 0) {
			$ff_validBox($this, validText_complete);
		}
	});
	// ***** 
	// 텍스트 필드 : 광고 목적
	$('.contact_purpose input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = `<div class="ff_valid_box"><p class="ff_valid_text">광고 목적을 입력해 주세요</p></div>`;

		if ($this.val().length <= 0) {
			$ff_validBox($this, validText_complete);
		}
	});
	// ***** 
	// 텍스트 필드 : 광고 예산
	$('.contact_money input[type=text]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = `<div class="ff_valid_box"><p class="ff_valid_text">광고 예산을 입력해 주세요</p></div>`;

		if ($this.val().length <= 0) {
			$ff_validBox($this, validText_complete);
		}
	});


	/* ********** ********** ********** ********** ********** ********** ********** */

	// *****
	// 전화번호 필드 d
    $('input[type=tel]').css("color","#c9cacb");
	$('input[type=tel]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = $ff_validText('연락처를');
        $(this).css("color","#4e4e4e");
		// 전화번호 - 정규표현식 : '-' 자동생성
		$this.val($this.val().replace(/[^0-9]/g, '').replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})/,'$1-$2-$3').replace('--', '-'));

		// 전화번호 : 최대 길이 설정
		if ($this.val().length > 13) {
			$this.val($this.val().substring(0, 13));
		}

		// 전화번호 : 길이 체크 및 유효성 메시지
		if ($this.val().length <= 9) {
			$valid_off($this);
			$ff_validBox($this, validText_complete);
		} else {
			$valid_on($this);
			$this.next().remove();
		}
        if ($this.val().length <= 3) {
            $(this).css("color","#c9cacb");
        }
	});


	/* ********** ********** ********** ********** ********** ********** ********** */

	// *****
	// 이메일 필드
	$('input[type=email]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = $ff_validText('이메일을');

		// RegularExpressions : 변경할 수 없는 정규식 
		let regex = /^[\w-\.]+@([a-zA-Z0-9]+\.)+[a-z]{2,4}$/g;

		// 이메일 : 양식 체크
		if (!regex.test($(this).val())) {
			$valid_off($this);
			$ff_validBox($this, validText_complete);
		} else {
			$valid_on($this);
			$this.next().remove();
		}
	});


	/* ********** ********** ********** ********** ********** ********** ********** */
	
	// *****
	// 드롭다운 박스
	$('form select').on('change', function (event) {
		let $this = $(this);
		let optionVal = $this.find("option:selected").val();

		if (optionVal.length <= 0) {
			$valid_off($this);
		} else {
			$valid_on($this);
		}
	});


	/* ********** ********** ********** ********** ********** ********** ********** */

	// *****
	// 체크박스 : 일반
	$('.contact_check input[type=checkbox]').on('click', function (event) {
		let $this = $(this);
		let checkbox_input = $this.closest($('.wpcf7-checkbox')).find('input');
		//let checkbox_last = $this.parent().parent().hasClass('last');
		// let check_etc = $this.closest($('.contact_check')).find('input[name=check-etc]');
        
		$this.toggleClass('checked');
		if (checkbox_input.hasClass('checked')) {
			$valid_on($this);
        } else {
			$valid_off($this);
		}
        //
            // ******
            // 텍스트필드 광고 상품
            let checkbox_text = $('input[name="your-checkbox_free_text"]');
            //let checkbox_free = $this.parent().hasClass('has-free-text');
            //console.log($(checkbox_text).prop('disabled'));
            //if($(checkbox_text).prop('disabled')){
            if($('.contact_check .has-free-text input').hasClass('checked')){
                $(checkbox_text).on('keyup focus propertychange paste input',function() {
                    let $this = $(this);
                    $(this).addClass('o_valid');
                    let validText_complete = `<div class="ff_valid_box sub_valid"><p class="ff_valid_text">광고 상품을 입력해 주세요</p></div>`;
                    
                    if ($this.val().length <= 0) {
                        $ff_validBox($this, validText_complete);
                    }
                });
            }else{
                $(checkbox_text).next().remove();
                $(checkbox_text).removeClass('o_valid');
                $(checkbox_text).removeClass('o_verify');
                $(checkbox_text).val(null);
            }
		// 마지막 체크 클릭 - 마지막 항목을 제외한 모든 내용 삭제
		// if (checkbox_last) {
		// 	check_etc.toggleClass('active_on').val(' ');
		// }
	});

	// ******
	// 텍스트필드 알게 된 경로
    $('.contact_radio input[value="선택안함"]').attr('checked', true);
	$('.contact_radio input[name="your-ad"]').on('click', function (event) {
		let radio_text = $('input[name="your-ad_free_text"]');
		if($(radio_text).prop('disabled')){
			$(radio_text).on('keyup focus propertychange paste input',function() {
				let $this = $(this);
				$(this).addClass('o_valid');
				let validText_complete = `<div class="ff_valid_box sub_valid"><p class="ff_valid_text">FIVE AD를 알게된 경로를 입력해 주세요</p></div>`;
				
				if ($this.val().length <= 0) {
					$ff_validBox($this, validText_complete);
				}
			});
		}else if(!$(radio_text).prop('disabled')){
			$(radio_text).next().remove();
			$(radio_text).removeClass('o_valid');
			$(radio_text).removeClass('o_verify');
            $(radio_text).val(null);
		}
	});
	// *****
	// 체크박스 : 개인정보 동의 personal_on
	$('.contact_personal_info input').on('click', function (event) {
    let $this = $(this);

    // 체크박스 상태 토글
    $this.toggleClass('checked');

    if (event.target.checked) {
        // 체크된 경우
        $($this).next().remove();
        $valid_on($this);
        
        // value 값을 true로 설정
        $this.val('true');
    } else {
        // 체크 해제된 경우
        $valid_off($this);
        let validText_complete = `<div class="ff_valid_box personal_info_valid"><p class="ff_valid_text">이 항목은 필수 입력값입니다.</p></div>`;
        $ff_validBox($this, validText_complete);

        // value 값을 false로 설정
        $this.val('false');
    }
	});

	// 페이지 로드 시 체크 상태에 따라 value 값을 초기화
	$('.contact_personal_info input').each(function() {
			if ($(this).hasClass('checked')) {
					$(this).val('true');
			} else {
					$(this).val('false');
			}
	});


	/* ********** ********** ********** ********** ********** ********** ********** */

	// 숫자 필드
	// 인원수 contact_headcount
	// 사무실 규모 contact_officeSize

	$('input[type=number]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		$this.val($this.val().replace(/[^0-9]/gi, '').replace(/^0+/, '')); // 시작 0 삭제
	});

	// 숫자 필드 : 인원수 (최대자리수)
	$('.contact_headcount input[type=number]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = $ff_validText('인원수를');
		let maxLength = 3; // 최대

		// max 자리 제한
		if ($this.val().length <= maxLength) {
			$valid_on($this);
			$this.next().remove();
		}

		// 내용을 전부 지웠을 경우
		if ($this.val().length === 0) {
			$valid_off($this);
			$ff_validBox($this, validText_complete);
		}

		// 최대 수 이상 입력되면 9로 변환
		if ($this.val().length >= maxLength + 1) {
			let number = '9';
			let result = number.repeat(maxLength);
			$this.val(result);
		}
	});

	// *****
	// 숫자 필드 : 사무실 규모 - 100평 이상 (최소자리수)
	$('.contact_officeSize input[type=number]').on('keyup propertychange paste input',function() {
		let $this = $(this);
		let validText_complete = $ff_validText('사무실 규모를');
		let minLength = 1; // 최소

		if ($this.val().length < minLength) {
			$valid_off($this);
			$ff_validBox($this, validText_complete);
		} else {
			$valid_on($this);
			$this.next().remove();
		}
	});


	/* ********** ********** ********** ********** ********** ********** ********** */

	// *****
	// form 유효성 갯수와 검증 갯수 체크
	$('form input, form select').on('click change focus keyup', function() {
		let thisForm = $(this).closest('form');
		let validNum = thisForm.find('.o_valid').length; // 유효성 갯수 체크
		let verifyNum = thisForm.find('.o_verify').length; // 유효성 검증 갯수 체크
		let submitBtn = thisForm.find('input[type=submit]'); // 보내기 버튼

		// console.log(validNum);
		// console.log(verifyNum);

		// 갯수가 동일할때 버튼 활성화
		if (validNum === verifyNum) {
			submitBtn.addClass('active');
		} else {
			submitBtn.removeClass('active');
		}	
	});

	// 보내기 버튼 클릭 - 클릭 방지
	$('input[type=submit]').on('click', function() {
		$(this).removeClass('active').addClass('disabled');
  });

	// 엔터 작동 차단
  $('form input').keydown(function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
    };
  });

});