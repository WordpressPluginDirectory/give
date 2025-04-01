(()=>{var e={32485:(e,n)=>{var t;!function(){"use strict";var a={}.hasOwnProperty;function r(){for(var e=[],n=0;n<arguments.length;n++){var t=arguments[n];if(t){var i=typeof t;if("string"===i||"number"===i)e.push(t);else if(Array.isArray(t)){if(t.length){var c=r.apply(null,t);c&&e.push(c)}}else if("object"===i){if(t.toString!==Object.prototype.toString&&!t.toString.toString().includes("[native code]")){e.push(t.toString());continue}for(var l in t)a.call(t,l)&&t[l]&&e.push(l)}}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(t=function(){return r}.apply(n,[]))||(e.exports=t)}()},5338:(e,n,t)=>{"use strict";var a=t(75795);n.H=a.createRoot,a.hydrateRoot},75795:e=>{"use strict";e.exports=window.ReactDOM}},n={};function t(a){var r=n[a];if(void 0!==r)return r.exports;var i=n[a]={exports:{}};return e[a](i,i.exports,t),i.exports}t.n=e=>{var n=e&&e.__esModule?()=>e.default:()=>e;return t.d(n,{a:n}),n},t.d=(e,n)=>{for(var a in n)t.o(n,a)&&!t.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:n[a]})},t.o=(e,n)=>Object.prototype.hasOwnProperty.call(e,n);var a={};(()=>{"use strict";t.d(a,{A:()=>w});const e=window.React,n=window.wp.i18n;var r=t(32485),i=t.n(r);function c({variant:n,caption:t,iconSrc:a,alt:r}){return(0,e.createElement)("div",{className:i()("givewp-welcome-banner-badge",{"givewp-welcome-banner-badge--primary":"primary"===n,"givewp-welcome-banner-badge--secondary":"secondary"===n})},(0,e.createElement)("img",{src:a,alt:r}),t)}function l({children:n}){return(0,e.createElement)("div",{className:"givewp-welcome-banner-row"},n)}function o({children:n,href:t}){return(0,e.createElement)("a",{href:t,className:"givewp-welcome-banner-link givewp-welcome-banner-link--internal"},n)}function s({children:n,href:t}){return(0,e.createElement)("a",{href:t,className:"givewp-welcome-banner-link givewp-welcome-banner-link--external",target:"_blank",rel:"noopener noreferrer"},n)}function m({assets:t}){return(0,e.createElement)("section",{className:"givewp-welcome-banner-left-content"},(0,e.createElement)(l,null,(0,e.createElement)("header",{className:"givewp-welcome-banner-row__header"},(0,e.createElement)("h1",null,(0,n.__)("What’s new in the Visual Form Builder","give")),(0,e.createElement)("p",null,(0,n.__)("GiveWP introduces an enhanced forms experience powered by the new Visual Donations Form Builder.","give")))),(0,e.createElement)(l,null,(0,e.createElement)("h2",null,(0,n.__)("Create a donation form","give")),(0,e.createElement)("p",null,(0,n.__)("This is powered by the new Visual Donation Form Builder","give")),(0,e.createElement)(o,{href:"/wp-admin/edit.php?post_type=give_forms&page=give-campaigns&new=campaign"},(0,n.__)("Try the new form builder","give"))),(0,e.createElement)(l,null,(0,e.createElement)("h2",null,(0,n.__)("New Updates","give")),(0,e.createElement)("p",null,(0,n.__)("The team is still working on some new features, add-on and payment gateway compatibility to make your form experience better.","give")),(0,e.createElement)(s,{href:"https://docs.givewp.com/welcome-docs"},(0,n.__)("Read documentation","give"))))}function u({title:n,description:t,children:a}){return(0,e.createElement)("div",{className:"givewp-welcome-banner-spotlight-container"},a,(0,e.createElement)("div",{className:"givewp-welcome-banner-spotlight-container__details"},(0,e.createElement)("h2",null,n),(0,e.createElement)("p",null,t)))}function p({src:n,fallbackImage:t}){const a=(0,e.useRef)(null),[r,i]=(0,e.useState)(!1),{assets:c}=w(),l=null==n||""===n||null===r||!n.endsWith(".mp4")&&!n.endsWith(".mov");return(0,e.createElement)("div",{className:"givewp-welcome-banner-video"},(0,e.createElement)("div",{className:"givewp-welcome-banner-video-container"},l?(0,e.createElement)("div",{className:"givewp-welcome-banner-video-fallback"},(0,e.createElement)("img",{className:"givewp-welcome-banner-video-fallback__image",src:t,alt:"/"})):(0,e.createElement)("video",{ref:a,src:n,loop:!0,muted:!0}),!l&&(0,e.createElement)("button",{className:"play-button",onClick:()=>{a.current.paused?(a.current.play(),i(!0)):(a.current.pause(),i(!1))}},r?(0,e.createElement)("img",{src:`${c}/pause-icon.svg`,alt:"Pause"}):(0,e.createElement)("img",{src:`${c}/play-icon.svg`,alt:"play"}))))}function d({assets:t}){return(0,e.createElement)("section",{className:"givewp-welcome-banner-right-content"},(0,e.createElement)("h2",null,(0,n.__)("Spotlight on awesome features","give")),(0,e.createElement)("div",{className:"givewp-welcome-banner-right-content__media-container"},(0,e.createElement)(u,{title:(0,e.createElement)(e.Fragment,null,(0,n.__)("Event tickets","give")," ",(0,e.createElement)("span",{className:"givewp-beta-icon"},"BETA")),description:(0,n.__)("Easily connect your events to your donation form. To enable this go to Settings > General > Beta Features and enable event tickets","give")},(0,e.createElement)(p,{src:`${t}/event-tickets.mp4`,fallbackImage:`${t}/event-tickets.min.png`})),(0,e.createElement)(u,{title:(0,n.__)("Design mode","give"),description:(0,n.__)("See exactly what your form looks like for potential donors using the “Design” tab of the builder. Changes are visible immediately.","give")},(0,e.createElement)(p,{src:`${t}/design-mode.mp4`,fallbackImage:`${t}/design-mode.min.png`}))))}function g(){const{showBanner:t,dismissBanner:a}=function(){const[n,t]=(0,e.useState)(!0);return{dismissBanner:async function(){const{nonce:e,action:n,root:a}=w(),r=`${a}/dismiss`;t(!1),await fetch(r,{method:"POST",headers:{"Content-Type":"application/json","X-WP-Nonce":e},body:JSON.stringify({action:n})})},showBanner:n}}(),{assets:r}=w();if(t)return(0,e.createElement)("div",{className:"givewp-welcome-banner"},(0,e.createElement)("div",{className:"givewp-welcome-banner__dismiss-container"},(0,e.createElement)(c,{variant:"primary",caption:(0,n.__)("UPDATED","give"),iconSrc:`${r}/green-circle-check-icon.svg`,alt:"check-mark"}),(0,e.createElement)("button",{onClick:a},(0,e.createElement)("img",{src:`${r}/close-icon.svg`,alt:"dismiss"}))),(0,e.createElement)("div",{className:"givewp-welcome-banner__content-container"},(0,e.createElement)(m,{assets:r}),(0,e.createElement)(d,{assets:r})))}var v=t(5338);function w(){return window.WelcomeBanner}const f=document.getElementById("givewp-welcome-banner"),h=()=>(0,e.createElement)(e.StrictMode,null,(0,e.createElement)(g,null));f&&(document.querySelector(".wp-header-end").insertAdjacentElement("afterend",f),(0,v.H)(f).render((0,e.createElement)(h,null)))})()})();