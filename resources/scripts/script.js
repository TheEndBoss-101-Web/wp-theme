//import './vendor/anchorific';
import './vendor/viewportchecker';
import 'jquery';
import $ from 'jquery';

export default {
    init() {
        console.log('Initializing...');
  
        //=============================================
        // JavaScript to be fired on all pages
        ////      var headings = $('.anchorific').data('headings');
        ////      //headings = headings ? headings : 'h2,h3,h4';
        ////      
        ////      console.log('Initializing: Anchorific...');
        ////      $('.main-content').anchorific({
        ////        headers: headings,
        ////        anchorText: false,
        ////        top: false,
        ////        spyOffset: 2,
        ////        exclude: '.screen-reader-text',
        ////      });
        ////      $('.anchorific ul').addClass('usa-sidenav__sublist');
        ////      $('.anchorific > ul').removeClass('usa-sidenav__sublist');
        ////      $('.anchorific > ul').addClass('usa-sidenav');
        ////      $('.anchorific li').addClass('usa-sidenav__item');
        $('#mobile').html($('#desktop').html());

        //=============================================
        // Nav bar effects
      
        var didScroll = false;
        //var topNav = $('header.usa-header');
        var topNav = $('body');
      
        window.onscroll = doThisStuffOnScroll;
      
        function doThisStuffOnScroll() {
          var scroll = $(window).scrollTop();
          var scrollHeight = 55;
        
          if (scroll >= scrollHeight) {
            topNav.addClass('show-logo');
          } else {
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
  