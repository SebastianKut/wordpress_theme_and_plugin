!function(e,n){"function"==typeof define&&define.amd?define([],n("adsenseLoader")):"object"==typeof exports?module.exports=n("adsenseLoader"):e.adsenseLoader=n("adsenseLoader")}(this,function(e){"use strict";var n=250,t={laziness:1,onLoad:!1},o=function(e,n){var t,o={};for(t in e)Object.prototype.hasOwnProperty.call(e,t)&&(o[t]=e[t]);for(t in n)Object.prototype.hasOwnProperty.call(n,t)&&(o[t]=n[t]);return o},r=function(e,n){var t,o;return function(){var r=this,a=arguments,i=+new Date;t&&i<t+e?(clearTimeout(o),o=setTimeout(function(){t=i,n.apply(r,a)},e)):(t=i,n.apply(r,a))}},a=[],i=[],s=[],d=function(){if(!a.length)return!0;var e=window.pageYOffset,n=window.innerHeight;a.forEach(function(t){var o,r,d=(o=t,r=o.getBoundingClientRect(),{top:r.top+document.body.scrollTop,left:r.left+document.body.scrollLeft}).top,c=t._adsenseLoaderData.options.laziness+1;if(d-e>n*c||e-d-t.offsetHeight-n*c>0)return!0;a=u(a,t),t._adsenseLoaderData.width=f(t),function(e,n){e.classList?e.classList.add(n):e.className+=" "+n}(t.children[0],"adsbygoogle"),i.push(t),"undefined"!=typeof adsbygoogle?function(e){(adsbygoogle=window.adsbygoogle||[]).push({});var n=e._adsenseLoaderData.options.onLoad;"function"==typeof n&&e.querySelector("iframe")&&e.querySelector("iframe").addEventListener("load",function(){n(e)})}(t):s.push(t)})},f=function(e){return parseInt(window.getComputedStyle(e,":before").getPropertyValue("content").slice(1,-1)||9999)},u=function(e,n){return e.filter(function(e){return e!==n})},c=function(e,n){return e._adsenseLoaderData={originalHTML:e.innerHTML,options:n},e.adsenseLoader=function(n){"destroy"==n&&(a=u(a,e),i=u(i,e),s=u(i,e),e.innerHTML=e._adsenseLoaderData.originalHTML)},e};function l(e,n){"string"==typeof e?e=document.querySelectorAll(e):void 0===e.length&&(e=[e]),n=o(t,n),[].forEach.call(e,function(e){e=c(e,n),a.push(e)}),this.elements=e,d()}return window.addEventListener("scroll",r(n,d)),window.addEventListener("resize",r(n,d)),window.addEventListener("resize",r(n,function(){if(!i.length)return!0;var e=!1;i.forEach(function(n){n._adsenseLoaderData.width!=f(n)&&(e=!0,i=u(i,n),n.innerHTML=n._adsenseLoaderData.originalHTML,a.push(n))}),e&&d()})),l.prototype={destroy:function(){this.elements.forEach(function(e){e.adsenseLoader("destroy")})}},window.adsenseLoaderConfig=function(e){void 0!==e.throttle&&(n=e.throttle)},l});