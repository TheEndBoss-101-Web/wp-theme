import domReady from '@roots/sage/client/dom-ready';
import 'nasawds/src/js/uswds';
//import './vendor/anchorific';
//import './vendor/viewportchecker';
import script from './script';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  script.init();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
