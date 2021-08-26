/**
 * External Dependencies
 */
import 'jquery';

import lozad from 'lozad';
const observer = lozad();
observer.observe();

import 'slick-carousel/slick/slick.min';
import '@fancyapps/fancybox/dist/jquery.fancybox';
import 'mixitup/dist/mixitup.min';

import './custom';

import { config, library, dom } from '@fortawesome/fontawesome-svg-core';
import { faPhone, faPhoneSquare, faPrint, faEnvelope, faEnvelopeOpen, faMapMarkerAlt, faBars, faChevronDown, faCaretLeft, faCaretRight, faArrowRight, faTimes, faShare } from '@fortawesome/pro-solid-svg-icons';
import { faFacebook, faFacebookF, faTwitter, faInstagram, faYoutube, faPinterest, faLinkedin } from '@fortawesome/free-brands-svg-icons';
config.searchPseudoElements=true;
library.add(faPhone, faPhoneSquare, faPrint, faEnvelope, faEnvelopeOpen, faMapMarkerAlt, faBars, faFacebook, faFacebookF, faTwitter, faInstagram, faYoutube, faPinterest, faLinkedin, faChevronDown, faCaretLeft, faCaretRight, faArrowRight, faTimes, faShare);
dom.i2svg();

// import Vue from 'vue';
// import { vueRouter, createRouter, createWebHistory } from 'vue-router'
// createRouter({
//   history: createWebHistory('/shop'),
//   routes: [
//     {
//       path: '/shop',
//       name: 'index',
//       component: Shop,
//       meta: {
//         title: 'Shop'
//       }
//     }
//   ]
// })
//
// import Shop from './views/Shop';
// import { createApp } from 'vue'
// createApp({
//   components: { Shop },
// }).mount('#shop');
