import domReady from '@roots/sage/client/dom-ready';
import 'nasawds/src/js/uswds';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  
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

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
