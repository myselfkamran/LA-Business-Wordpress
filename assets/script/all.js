// // ===hamburger-start===


$(document).ready(function () {
    $('ul > .menu-item-has-children').append('<span class="down-arrow"><img src="https://labpinc.com/wp-content/uploads/2024/10/angle-down.svg" alt="arrow"></span>');
});


$(document).ready(function () {
    // Toggle classes for the main navigation trigger
    $('#navTrigger').click(function () {
        $(this).toggleClass('active');
        $('#header-navlinks, #header, .nav-menu-contact').toggleClass('active');

        // Slide up all sub-menus and remove 'sub-menu-active' class when main nav is clicked
        $('.sub-menu').slideUp(300).removeClass('sub-menu-active');
    });

    // Toggle classes for a different icon, if #nav-icon2 is used separately
    $('#nav-icon2').click(function () {
        $(this).toggleClass('open');
    });

    // Handling dropdown sub-menus
    $('.down-arrow').click(function (event) {
        event.stopPropagation(); // Prevents the event from bubbling up

        var subMenu = $(this).siblings('.sub-menu');

        // Slide toggle for the clicked sub-menu with smooth animation
        subMenu.slideToggle(300);

        // Toggle 'sub-menu-active' class for the clicked sub-menu
        subMenu.toggleClass('sub-menu-active');

        // Slide up other sub-menus and remove 'sub-menu-active' class
        $('.sub-menu').not(subMenu).slideUp(300).removeClass('sub-menu-active');
    });

    // Click event to close sub-menus when clicking outside
    $(document).click(function () {
        $('.sub-menu').slideUp(300).removeClass('sub-menu-active');
    });
});


//hamburger-end

$(document).ready(function () {
    if (window.matchMedia("(max-width: 993px)").matches) {
        $('.industries-cards-parent').slick({
            slidesToShow: 2, // Show 1 slide for small screens
            slidesToScroll: 1, // Scroll 1 slide at a time
            autoplay: true, // Enable autoplay
            autoplaySpeed: 2000, // Time between auto slides
            dots: true, // Enable dots for navigation
            arrows: true, // Enable arrow navigation
			 responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1, // Show 1 slide on 768px and below
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
});
// $(document).ready(function () {
//     if (window.matchMedia("(max-width: 993px)").matches) {
//         $('.services-cards').slick({
//             slidesToShow: 2, // Show 1 slide for small screens
//             slidesToScroll: 1, // Scroll 1 slide at a time
//             autoplay: true, // Enable autoplay
//             autoplaySpeed: 2000, // Time between auto slides
//             dots: true, // Enable dots for navigation
//             arrows: true, // Enable arrow navigation
//         });
//     }
// });
$(document).ready(function () {
    if (window.matchMedia("(max-width: 993px)").matches) {
        $('.services-cards').slick({
            slidesToShow: 2, // Default for 993px and below
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1, // Show 1 slide on 768px and below
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
});

$(document).ready(function () {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.about-blogs .features-blogs-parent').slick({
            slidesToShow: 1, // Show 1 slide for small screens
            slidesToScroll: 1, // Scroll 1 slide at a time
            autoplay: true, // Enable autoplay
            autoplaySpeed: 2000, // Time between auto slides
            dots: true, // Enable dots for navigation
            arrows: true, // Enable arrow navigation
        });
    }
});
$(document).ready(function () {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.contact-cards-main-parent').slick({
            slidesToShow: 1, // Show 1 slide for small screens
            slidesToScroll: 1, // Scroll 1 slide at a time
            autoplay: true, // Enable autoplay
            autoplaySpeed: 2000, // Time between auto slides
            dots: true, // Enable dots for navigation
            arrows: true, // Enable arrow navigation
        });
    }
});

$(document).ready(function () {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.contact-links-cards-main-parent').slick({
            slidesToShow: 1, // Show 1 slide for small screens
            slidesToScroll: 1, // Scroll 1 slide at a time
            autoplay: true, // Enable autoplay
            autoplaySpeed: 2000, // Time between auto slides
            dots: true, // Enable dots for navigation
            arrows: true, // Enable arrow navigation
        });
    }
});


// Left-offside-container

$(document).ready(function () {
    var windowWidth = $(window).width();

    if (windowWidth > 993 && windowWidth <= 1660) {
        // Get padding-left and margin-left of .primary-container
        var sp_leftPaddingLeft = parseInt($('.container').css('padding-left'));
        var sp_leftMarginLeft = parseInt($('.container').css('margin-left'));

        // Sum the padding-left and margin-left
        var sp_leftTotalLeft = sp_leftPaddingLeft + sp_leftMarginLeft;

        // Apply the sum as padding-left to .primary-lftsided-container
        $('.labp').css('padding-right', sp_leftTotalLeft);
    }
});

// ===

// Left-offside-container

$(document).ready(function () {
    var windowWidth = $(window).width();

    if (windowWidth > 768 && windowWidth <= 1660) {
        var offset = jQuery('.container').offset().left;
        jQuery('.employers-main').css('padding-left', offset);

        jQuery(window).resize(function () {
            var offset = jQuery('.container').offset().left;
            jQuery('.employers-main').css('padding-left', offset);
        });
    }
});


// =======counter-animation===========
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".insights-global-heading h2");

    // Counter Animation Function with Dynamic Increment
    function animateCounter(element, start, end, duration, increment) {
        let current = start;
        const stepTime = Math.abs(Math.floor(duration / ((end - start) / increment)));

        const timer = setInterval(function () {
            current += increment;
            element.innerText = current.toLocaleString() + "+"; // Format with commas and add "+"
            if (current >= end) {
                clearInterval(timer);
                element.innerText = end.toLocaleString() + "+"; // Ensure it stops at exact number
            }
        }, stepTime);
    }

    // Observer callback function to trigger animation when section is visible
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetNumber = parseInt(entry.target.innerText.replace(/\D/g, '')); // Extract the number
                const increment = targetNumber >= 50000 ? 500 : 1; // Use larger increment for big numbers
                animateCounter(entry.target, 0, targetNumber, 2000, increment); // Start the counter with dynamic increment
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }

    // Create a new IntersectionObserver
    const observer = new IntersectionObserver(handleIntersection, {
        root: null,  // null means it uses the viewport as the container
        threshold: 0.1  // Trigger when 10% of the section is visible
    });

    // Attach the observer to each counter element
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
// ==========equal-height==========

document.addEventListener("DOMContentLoaded", function () {
    let maxHeight = 0;

    const industriesCards = document.querySelectorAll('.industries-cards-inner-wrap, .services-cards-holder, .contact-cards-main-inner-wrap, .contact-links-cards-main-inner-wrap  a, .getting-start-inner-wrapper, .insights-global-inner-wrap, .easy-hiring-cards-inner-wrap');
    industriesCards.forEach(card => {
        const currentHeight = card.offsetHeight;
        if (currentHeight > maxHeight) {
            maxHeight = currentHeight;
        }
    });

    industriesCards.forEach(card => {
        card.style.height = `${maxHeight}px`;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let maxHeight = 0;

    const industriesCards = document.querySelectorAll('.find-right-job-childs-cards-wrap-flex');
    industriesCards.forEach(card => {
        const currentHeight = card.offsetHeight;
        if (currentHeight > maxHeight) {
            maxHeight = currentHeight;
        }
    });

    industriesCards.forEach(card => {
        card.style.height = `${maxHeight}px`;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Check if the screen width is less than or equal to 768px
    if (window.matchMedia("(max-width: 768px)").matches) {
        let maxHeight = 0;

        const industriesCards = document.querySelectorAll('.industries-cards-inner-wrap');
        
        // Find the maximum height of the cards
        industriesCards.forEach(card => {
            const currentHeight = card.offsetHeight;
            if (currentHeight > maxHeight) {
                maxHeight = currentHeight;
            }
        });

        // Set all cards to the maximum height
        industriesCards.forEach(card => {
            card.style.height = `${maxHeight}px`;
        });
    }
});


// ====form============
jQuery(document).ready(function ($) {
    $('#custom-form').on('submit', function (e) {
        e.preventDefault(); // Prevent form from submitting normally

        var formData = $(this).serialize(); // Collect form data

        $.ajax({
            type: 'POST',
            url: ajaxurl, // AJAX URL provided by WordPress
            data: formData + '&action=handle_ajax_form_submission', // Action to call in PHP
            success: function (response) {
                if (response.success) {
                    $('#custom-form').html('<p class="success-message">Email sent successfully!</p>'); // Show success message
                } else {
                    $('#custom-form').prepend('<p class="error-message">Error: ' + response.data + '</p>'); // Show error message
                }
            }
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
  // Select the parent container
  const formContainer = document.querySelector('.home-form-fields-form');
  
  if (!formContainer) {
    console.warn('Parent container .home-form-fields-form not found.');
    return;
  }

  // Select all select elements within the parent container
  const selectElements = formContainer.querySelectorAll('select');

  selectElements.forEach(function(selectElement) {
    // Initialize: Remove 'active' class if the placeholder is selected by default
    if (!selectElement.value) {
      selectElement.classList.remove('active');
    }

    // Listen for the 'change' event on each select element
    selectElement.addEventListener('change', function() {
      if (this.value) { // If a non-empty value is selected
        this.classList.add('active');
      } else { // If the placeholder is selected
        this.classList.remove('active');
      }
    });
  });
});

