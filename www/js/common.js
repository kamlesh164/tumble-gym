const agePriceMap = {
  "3-5":"599",
  "6-10":"799",
  "12-14":"999"
};

// Mobile menu toggle
const burger = document.getElementById('burger-menu');
const navRight = document.getElementById('nav-right');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    navRight.classList.toggle('active');
});

// Close menu function
function closeMenu() {
    burger.classList.remove('active');
    navRight.classList.remove('active');
}

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!burger.contains(e.target) && !navRight.contains(e.target)) {
        closeMenu();
    }
});

document.querySelectorAll('.faq-row').forEach(row => {
  row.addEventListener('click', function(e) {
    const item = this.parentElement;
    const isOpen = item.classList.contains('faq-item-open');
    // Toggle current item's open state
    document.querySelectorAll('.faq-item').forEach(i => {
      if(i !== item) i.classList.remove('faq-item-open');
    });
    item.classList.toggle('faq-item-open', !isOpen);
    e.stopPropagation();
  });
});

function openWhatsApp(msg = 'Hi, I want to get more details regarding events at Tumble GYM.') {
  const phoneNumber = '917019271281';
  const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  
  let whatsappURL;
  if (isMobile) {
    // Mobile: WhatsApp app directly
    whatsappURL = `whatsapp://send?phone=${phoneNumber}&text=${encodeURIComponent(msg)}`;
  } else {
    // Desktop: WhatsApp Web
    whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(msg)}`;
  }
  
  window.open(whatsappURL, '_blank');
}

// ========= SLIDER ========== //
const SLIDES = [
  {
    img: 'images/memory5.png',
    captionTitle: 'Colorful Obstacle Courses',
    captionDesc: 'Safe, Soft, And Exciting Challenges For All Ages'
  },
  {
    img: 'images/memory2.png',
    captionTitle: 'Fun With Friends',
    captionDesc: 'Memories and friendships made at every event'
  },
  {
    img: 'images/memory3.png',
    captionTitle: 'Diverse Activities',
    captionDesc: 'Games, sports, and activities for every age'
  },
  {
    img: 'images/memory4.png',
    captionTitle: 'Family Time',
    captionDesc: 'Enjoy the event with your whole family!'
  },
  {
    img: 'images/memory1.png',
    captionTitle: 'Enjoy Children',
    captionDesc: 'Enjoy the event with full joy!'
  }
];
let activeIdx = 0;

function mod(n, m) { return ((n % m) + m) % m; }

function renderCarousel() {
  const track = document.getElementById('carouselTrack');
  const dots = document.getElementById('carouselDots');
  const caption = document.getElementById('memoriesCaption');
  // 2 prev, 1 current, 2 next
  let arr = [
    SLIDES[mod(activeIdx - 2, SLIDES.length)],
    SLIDES[mod(activeIdx - 1, SLIDES.length)],
    SLIDES[activeIdx],
    SLIDES[mod(activeIdx + 1, SLIDES.length)],
    SLIDES[mod(activeIdx + 2, SLIDES.length)],
  ];
  let classArr = ['second-prev-img', 'prev-img', 'active-img', 'next-img', 'second-next-img'];
  track.innerHTML = arr.map((slide,i)=>`
    <div class="carousel-img ${classArr[i]}"><img src="${slide.img}" alt=""></div>
  `).join('');
  dots.innerHTML = SLIDES.map((_,i)=>`
    <span class="dot${i==activeIdx?' active':''}" onclick="goToSlide(${i})"></span>
  `).join('');
  caption.innerHTML = `
    <span class="caption-title">${SLIDES[activeIdx].captionTitle}</span><br>
    <span class="caption-desc">${SLIDES[activeIdx].captionDesc}</span>
  `;
}
function goToSlide(i) {
  activeIdx = i; renderCarousel();
}
document.getElementById('carouselPrev').onclick = () => {
  activeIdx = (activeIdx-1 + SLIDES.length) % SLIDES.length;
  renderCarousel();
};
document.getElementById('carouselNext').onclick = () => {
  activeIdx = (activeIdx+1)%SLIDES.length;
  renderCarousel();
};
renderCarousel();
window.goToSlide = goToSlide;

// ==================== //

$(document).ready(function(){
  $('#submitOutside').on('click', function(e){
    e.preventDefault();
    var $form = $('.regfest-form');
    var valid = true;

    // Remove all old error messages first
    $form.find('.req-error-msg').remove();
    $form.find('.req-error').remove();

    $form.find('[required]').each(function(){
        var $field = $(this);
        var isError = false;
        if ($field.attr('type') === "checkbox") {
        if (!$field.is(':checked')) isError = true;
        } else {
        if (!$field.val() || $field.val().trim() === "") isError = true;
        }
        $field.toggleClass('field-error', isError);
        var $label = $(this).closest('.regfest-row,.custom-select-wrap,div').find('label .req-star');
        if (isError) {
          $label.addClass('req-error');
          valid = false;
        }

        // Show or hide error message below field (for checkbox, after parent)
        if (isError) {
            valid = false;
            if ($field.attr('type') === "checkbox") {
                var $wrap = $field.closest('.regfest-checkbox');
                // Only add if not already present
                if ($wrap.next('.req-error-msg').length == 0) {
                    $wrap.after('<span class="req-error-msg">Please agree to the Terms & Conditions to proceed.</span>');
                }
            }/*  else {
                if ($field.next('.req-error-msg').length == 0) {
                    $field.after('<span class="req-error-msg">This field is required</span>');
                }
            } */
        }
    });

    if(!valid){
        // Optional: smooth scroll to first error for better UX
        var $firstErr = $form.find('.field-error').first();
        if($firstErr.length) { 
        $('html,body').animate({ scrollTop: $firstErr.offset().top - 80 }, 350); 
        }
        return;
    }

    // All good, gather form data
    var formData = {};
    $form.find('input,select,textarea').each(function(){
        if(this.name)
        formData[this.name] = $(this).val();
    });
    console.log(formData);
    // AJAX to backend to save entry + get razorpay order_id
    $.ajax({
      url: 'razorpay-order.php',
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(formData),
      success: function(data){
        var resp = typeof data == "string" ? JSON.parse(data) : data;
        var options = {
          key:    "rzp_live_aD2iIbDehR5EG8", // <-- Razorpay key here
          amount: parseInt(formData.registration_fee) * 100,
          currency: "INR",
          name: "Tumble Fest",
          description: "Registration Fee",
          order_id: resp.order_id,
          prefill: {
            name: formData.child_name,
            email: formData.email,
            contact: formData.mobile
          },
          handler: function(rzpay_resp){
            console.log(rzpay_resp);
            $.ajax({
              url: 'razorpay-verify.php',
              method: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({
                  razorpay_order_id: rzpay_resp.razorpay_order_id,
                  razorpay_payment_id: rzpay_resp.razorpay_payment_id,
                  razorpay_signature: rzpay_resp.razorpay_signature,
                  reg_id: resp.reg_id
              }),
              success: function(ver){
                if (typeof ver === "string") {
                    try { ver = JSON.parse(ver); }
                    catch(e) { ver = {success: false}; }
                }
                console.log(ver);
                var $bar = $('#form-status-bar');
                if(ver.success) {
                    $bar.removeClass('error').addClass('success').text('Payment Success! Your registration was recorded.');
                } else {
                    $bar.removeClass('success').addClass('error').text('Payment verification failed. Please try again or contact support.');
                }
                $bar.show();
                // Scroll smoothly to bar
                $('html,body').animate({ scrollTop: $bar.offset().top - 60 }, 350);
              }
            });
          }
        };
        new Razorpay(options).open();
      }
    });
  });

  $('#volunteer-join-form').on('submit', function(e){
  e.preventDefault();
  $('#v_msg').html('').hide();
  var formData = {};
  $(this).find('input,select,textarea').each(function(){
    if(this.name) formData[this.name] = $(this).val();
  });
  $.ajax({
    url: 'save_lead_user.php',
    method: 'POST',
    contentType: 'application/json',
    data: JSON.stringify(formData),
    success: function(resp){
      if (typeof resp === "string") resp = JSON.parse(resp);
      var $bar = $('#v_msg');
        if(resp.success) {
            $bar.removeClass('error').addClass('success').text('Thank you for applying! We will get back to you soon.');
            $('#volunteer-join-form')[0].reset();
        } else {
            $bar.removeClass('success').addClass('error').text('There was an error. Please try again.');
        }
        $bar.show();
    }
  });
});

$('#closeQrModal, .modal-overlay, .closeThankYouModal').on('click', function(){
  $('#qrCodeModal').fadeOut();
  $('#qr-success-msg').hide();
  $('#qr-file-name').text('No file chosen').css('color','#283');
});

// When user selects a file
$('#openQrModal').on('click', function(){
  var $form = $('#regfestForm');
  var valid = true;
  $form.find('.req-error-msg,.req-error').remove();

  $form.find('[required]').each(function(){
    var $field = $(this), isError = false;
    if ($field.attr('type') === "checkbox") isError = !$field.is(':checked');
    else isError = !$field.val() || $field.val().trim() === "";
    $field.toggleClass('field-error', isError);
    var $label = $field.closest('.regfest-row,.custom-select-wrap,div').find('label .req-star');
    if (isError) {$label.addClass('req-error'); valid = false;}
    if (isError && $field.attr('type') === "checkbox") {
      var $wrap = $field.closest('.regfest-checkbox');
      if ($wrap.next('.req-error-msg').length == 0) {
        $wrap.after('<span class="req-error-msg">Please agree to the Terms & Conditions to proceed.</span>');
      }
    }
  });

  if(!valid){
    var $firstErr = $form.find('.field-error').first();
    if($firstErr.length) 
      $('html,body').animate({ scrollTop: $firstErr.offset().top - 80 }, 350);
    return false; // DO NOT open modal if form is invalid!
  }

  var phoneNumber = $form.find('input[type="tel"], input[name="mobile"]').val().trim();
  if(!phoneNumber){
    $('#qrCodeModal').fadeIn();
    return;
  }
  var $phoneField = $form.find('input[type="tel"], input[name="mobile"]').first();
  $phoneField.after('<span class="phone-checking-msg"></span>');

  $.ajax({
    url: '/ajax',
    method: 'POST',
    data: { phone: phoneNumber, action: 'isPhoneExists' },
    success: function(response){
      if(response.exists || response.isExist === true){
        $phoneField.addClass('field-error');
        $phoneField.after('<span class="req-error-msg phone-checking-msg" style="font-size:14px;">This mobile number is already registered.</span>');
        $('html,body').animate({ scrollTop: $phoneField.offset().top - 80 }, 350);
      } else {
        $('#qrCodeModal').fadeIn();
      }
    },
    error: function(){
      console.error('Phone check failed');
      $('#qrCodeModal').fadeIn();
    },
    complete: function(){
    }
  });
  // else{
  //   $('#qrCodeModal').fadeIn();
  // }
});

// Enable submit only if file chosen
let fileSelected = false;
$('#uploadBtn').on('click', function(){ $('#qrScreenshot').click(); });
$('#qrScreenshot').on('change', function(){
  var file = this.files[0];
  if(file){
    fileSelected = true;
    $('#qr-file-name').text(file.name).css('color','#0a6a26');
    $('#qrSubmitBtn').prop('disabled',false).removeClass('btn-disabled');
  } else {
    $('#qr-file-name').text('No file chosen').css('color','#283');
    fileSelected = false;
    $('#qrSubmitBtn').prop('disabled',true).addClass('btn-disabled');
  }
});

// On actual submit in modal
$('#qrSubmitBtn').on('click', function(){
  if(!fileSelected){
    alert('Please upload payment screenshot first!');
    return;
  }
  var file = $('#qrScreenshot')[0].files[0];
  var formData = new FormData();
  formData.append('payment_screenshot', file);

  $('#regfestForm').find('input,select,textarea').each(function(){
    if(this.type === "file") return;
    if(this.type === "checkbox") 
      formData.append(this.name, this.checked ? "1" : "");
    else
      formData.append(this.name, this.value);
  });

  $.ajax({
    url: 'qr_payment_upload.php',
    method: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function(rsp){
      $('#qr-success-msg').hide();
      $('#qr-file-name').css('color','#21873f');
      $('#qrSubmitBtn').prop('disabled',true);
      $('#regfestForm')[0].reset();

      // Reset custom dropdowns
      $('#age-select-wrap .custom-select__selected').text('Select Age');
      $('#age-select-wrap input[name="child_age"]').val('');
      $('#fee-select-wrap .custom-select__selected').text('Select Registration Fees');
      $('#fee-select-wrap input[name="registration_fee"]').val('');
      $('#age-select-wrap .custom-select__option, #fee-select-wrap .custom-select__option').removeClass('selected');

      // Close QR modal, open thank you modal
      $('#closeQrModal').click();
      setTimeout(function(){
        $('#thankYouModal').fadeIn();
        // Auto-fade out after 4 seconds
        setTimeout(function(){ $('#thankYouModal').fadeOut(); }, 4000);
      }, 150);
    }
  });
});
});