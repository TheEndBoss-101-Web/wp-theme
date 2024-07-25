export default {
    init() {
  
      //=============================================
      // JavaScript to be fired on all pages
      var headings = $('.anchorific').data('headings');
      headings = headings ? headings : 'h2,h3,h4';
  
      $('.usa-layout-docs').anchorific({
        headers: headings,
        anchorText: false,
        top: false,
        spyOffset: 2,
        exclude: '.screen-reader-text',
      });
      $('.anchorific > ul').addClass('usa-sidenav-list');
      $('.anchorific li > ul').addClass('usa-sidenav-sub_list');

      //=============================================
      // Nav bar effects
  
      var didScroll = false;
      var topNav = $('header.usa-header');
  
      window.onscroll = doThisStuffOnScroll;
  
      function doThisStuffOnScroll() {
        var scroll = $(window).scrollTop();
        var scrollHeight = 55;
  
        if (scroll >= scrollHeight) {
          topNav.addClass('show-logo');
        }
        else {
          topNav.removeClass('show-logo');
        }
  
        didScroll = true;
      }
  
      setInterval(function() {
        if(didScroll) {
          didScroll = false;
        }
      }, 500);
  
    },
    finalize() {
      // JavaScript to be fired on all pages, after page specific JS is fired
    },
  };
  