import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

import 'jquery';
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
    this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.touchmove = {
  setup: function( _, ns, handle ) {
    this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.wheel = {
  setup: function( _, ns, handle ){
    this.addEventListener("wheel", handle, { passive: true });
  }
};
jQuery.event.special.mousewheel = {
  setup: function( _, ns, handle ){
    this.addEventListener("mousewheel", handle, { passive: true });
  }
};

import lozad from 'lozad';
const observer = lozad();
observer.observe();

import 'slick-carousel/slick/slick.min';
import '@fancyapps/fancybox/dist/jquery.fancybox';

import './custom';
import './forms';

import { config, library, dom } from '@fortawesome/fontawesome-svg-core';
import { faPhone, faPhoneSquare, faPrint, faEnvelope, faEnvelopeOpen, faMapMarkerAlt, faBars, faCaretLeft, faCaretRight, faArrowRight, faTimes, faShare, faChevronUp, faChevronRight, faChevronDown, faChevronLeft, faPoundSign, faUser, faKey, faCheck, faStar, faQuoteRight, faExpand, faHouse  } from '@fortawesome/pro-solid-svg-icons';
import { faFacebook, faFacebookF, faTwitter, faInstagram, faYoutube, faPinterest, faLinkedin, faLinkedinIn } from '@fortawesome/free-brands-svg-icons';
config.searchPseudoElements=true;
library.add(faPhone, faPhoneSquare, faPrint, faEnvelope, faEnvelopeOpen, faMapMarkerAlt, faBars, faFacebook, faFacebookF, faTwitter, faInstagram, faYoutube, faPinterest, faLinkedin, faLinkedinIn, faCaretLeft, faCaretRight, faArrowRight, faTimes, faShare, faChevronUp, faChevronRight, faChevronDown, faChevronLeft, faPoundSign, faUser, faKey, faCheck, faStar, faQuoteRight, faExpand, faHouse );
dom.i2svg();

/**
 * Vue config
 * Make sure you first 'yarn add @roots/bud-vue'
 * Make sure you enable the config in bud.config.js
*/
// import {createApp} from 'vue';
// import App from './views/App.vue';
//
// const app = createApp(App);
// app.mount('#app');