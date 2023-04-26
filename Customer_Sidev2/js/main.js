(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");

        let a = 1;

        plus.addEventListener("click", ()=>{
            a++;
            a = (a<10) ? "0" + a : a;
            num.innerText = a;
            console.log(a);

        });

        minus.addEventListener("click", ()=>{
            if(a > 1){
                a--;
                a = (a<10) ? "0" + a : a;
                num.innerText = a;
            }   

        });

        document.getElementById('submit').addEventListener('click', function(event) {
            event.preventDefault();
        
            var firstname = document.getElementById('firstname');
            var lastname = document.getElementById('lastname');
            var middlename = document.getElementById('middlename');
            var date = document.getElementById('date');
            var age = document.getElementById('age');
            var email = document.getElementById('email');
            var username = document.getElementById('username');
            var contact_num = document.getElementById('contact_num');
            var password = document.getElementById('password');
            var termsCheckbox = document.querySelector('input[type="checkbox"]');
            var maleRadio = document.getElementById('check-male');
            var femaleRadio = document.getElementById('check-female');
        
            if (!firstname.value || !lastname.value || !middlename.value || !date.value || !age.value || !email.value || !username.value || !contact_num.value || !password.value || (!maleRadio.checked && !femaleRadio.checked) || !termsCheckbox.checked) {
                alert('Please fill out all required fields, select your gender, and agree to the terms and conditions.');
                return;
            }
        
            this.closest('form').submit();
        });
    
})(jQuery);













