(()=>{"use strict";var e,t={250:()=>{const e=window.React,t=window.wp.blocks,r=window.wp.i18n,n=window.wp.blockEditor,l=JSON.parse('{"u2":"cozy-block/slide","TN":"Slide"}');(0,t.registerBlockType)(l.u2,{title:(0,r.__)(l.TN,"cozy-addons"),icon:()=>(0,e.createElement)("svg",{width:"26",height:"19",viewBox:"0 0 26 19",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{fill:"white",d:"M0.5 3C0.5 1.61929 1.61929 0.5 3 0.5H23C24.3807 0.5 25.5 1.61929 25.5 3V16C25.5 17.3807 24.3807 18.5 23 18.5H3C1.61929 18.5 0.5 17.3807 0.5 16V3Z",stroke:"#5566CA"}),(0,e.createElement)("path",{d:"M11.5 13L15.5 7L19.5 13H11.5Z",fill:"#C7CFFC"}),(0,e.createElement)("path",{d:"M6 13L11 5L15.5 13H6Z",fill:"#36CFC6"})),edit:function({attributes:t,clientId:l}){return t.blockClientId=l,(0,e.createElement)("div",{className:"swiper-slide"},(0,e.createElement)(n.InnerBlocks,{template:[["core/cover",{customOverlayColor:"#5566ca"},[["core/heading",{placeholder:(0,r.__)("Slide Title","cozy-addons"),textAlign:"center"}],["core/paragraph",{placeholder:(0,r.__)("Lorem Ipsum is simply dummy text of the printing and typesetting industry.","cozy-addons"),align:"center"}],["core/buttons",{layout:{type:"flex",justifyContent:"center"}}]]]]}))},save:function({attributes:t}){return(0,e.createElement)("div",{className:"swiper-slide"},(0,e.createElement)(n.InnerBlocks.Content,null))},supports:{html:!1,inserter:!1}})}},r={};function n(e){var l=r[e];if(void 0!==l)return l.exports;var o=r[e]={exports:{}};return t[e](o,o.exports,n),o.exports}n.m=t,e=[],n.O=(t,r,l,o)=>{if(!r){var i=1/0;for(d=0;d<e.length;d++){for(var[r,l,o]=e[d],a=!0,s=0;s<r.length;s++)(!1&o||i>=o)&&Object.keys(n.O).every((e=>n.O[e](r[s])))?r.splice(s--,1):(a=!1,o<i&&(i=o));if(a){e.splice(d--,1);var c=l();void 0!==c&&(t=c)}}return t}o=o||0;for(var d=e.length;d>0&&e[d-1][2]>o;d--)e[d]=e[d-1];e[d]=[r,l,o]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,431:0};n.O.j=t=>0===e[t];var t=(t,r)=>{var l,o,[i,a,s]=r,c=0;if(i.some((t=>0!==e[t]))){for(l in a)n.o(a,l)&&(n.m[l]=a[l]);if(s)var d=s(n)}for(t&&t(r);c<i.length;c++)o=i[c],n.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return n.O(d)},r=globalThis.webpackChunkslide=globalThis.webpackChunkslide||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var l=n.O(void 0,[431],(()=>n(250)));l=n.O(l)})();