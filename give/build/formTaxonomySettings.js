(()=>{var e={32485:(e,t)=>{var r;!function(){"use strict";var i={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var n=typeof r;if("string"===n||"number"===n)e.push(r);else if(Array.isArray(r)){if(r.length){var a=o.apply(null,r);a&&e.push(a)}}else if("object"===n){if(r.toString!==Object.prototype.toString&&!r.toString.toString().includes("[native code]")){e.push(r.toString());continue}for(var l in r)i.call(r,l)&&r[l]&&e.push(l)}}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(r=function(){return o}.apply(t,[]))||(e.exports=r)}()},21020:(e,t,r)=>{"use strict";var i=r(51609),o=Symbol.for("react.element"),n=(Symbol.for("react.fragment"),Object.prototype.hasOwnProperty),a=i.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,l={key:!0,ref:!0,__self:!0,__source:!0};function s(e,t,r){var i,s={},c=null,p=null;for(i in void 0!==r&&(c=""+r),void 0!==t.key&&(c=""+t.key),void 0!==t.ref&&(p=t.ref),t)n.call(t,i)&&!l.hasOwnProperty(i)&&(s[i]=t[i]);if(e&&e.defaultProps)for(i in t=e.defaultProps)void 0===s[i]&&(s[i]=t[i]);return{$$typeof:o,type:e,key:c,ref:p,props:s,_owner:a.current}}t.jsx=s,t.jsxs=s},74848:(e,t,r)=>{"use strict";e.exports=r(21020)},51609:e=>{"use strict";e.exports=window.React}},t={};function r(i){var o=t[i];if(void 0!==o)return o.exports;var n=t[i]={exports:{}};return e[i](n,n.exports,r),n.exports}r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var i in t)r.o(t,i)&&!r.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.wp.hooks;var t=r(51609),i=r.n(t),o=r(74848),n=function(){return n=Object.assign||function(e){for(var t,r=1,i=arguments.length;r<i;r++)for(var o in t=arguments[r])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e},n.apply(this,arguments)};function a(e,t,r){if(r||2===arguments.length)for(var i,o=0,n=t.length;o<n;o++)!i&&o in t||(i||(i=Array.prototype.slice.call(t,0,o)),i[o]=t[o]);return e.concat(i||t)}var l=function(e){return e.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")},s={k:1e3,m:1e6,b:1e9},c=function(e){var t=e.value,r=e.groupSeparator,i=void 0===r?",":r,o=e.decimalSeparator,n=void 0===o?".":o,c=e.allowDecimals,p=void 0===c||c,d=e.decimalsLimit,u=void 0===d?2:d,g=e.allowNegativeValue,m=void 0===g||g,v=e.disableAbbreviations,f=void 0!==v&&v,w=e.prefix,h=void 0===w?"":w,S=e.transformRawValue,x=(void 0===S?function(e){return e}:S)(t);if("-"===x)return x;var b=f?[]:["k","m","b"],y=new RegExp("((^|\\D)-\\d)|(-"+l(h)+")").test(x),_=RegExp("(\\d+)-?"+l(h)).exec(t)||[],D=_[0],R=_[1],E=function(e,t){void 0===t&&(t=",");var r=new RegExp(l(t),"g");return e.replace(r,"")}(h?D?x.replace(D,"").concat(R):x.replace(h,""):x,i),N=function(e,t){var r=l(t.join("")),i=new RegExp("[^\\d"+r+"]","gi");return e.replace(i,"")}(E,a([i,n],b)),P=N;if(!f){if(b.some((function(e){return e===N.toLowerCase().replace(n,"")})))return"";var C=function(e,t){void 0===t&&(t=".");var r=new RegExp("(\\d+("+l(t)+"\\d*)?)([kmb])$","i"),i=e.match(r);if(i){var o=i[1],n=i[3],a=s[n.toLowerCase()];return Number(o.replace(t,"."))*a}}(N,n);C&&(P=String(C))}var A=y&&m?"-":"";if(n&&P.includes(n)){var T=N.split(n),O=T[0],K=T[1],L=u&&K?K.slice(0,u):K;return""+A+O+(p?""+n+L:"")}return""+A+P},p=function(e,t){var r=t.groupSeparator,i=void 0===r?",":r,o=t.decimalSeparator,n=void 0===o?".":o,a=new RegExp("\\d([^"+l(i)+l(n)+"0-9]+)"),s=e.match(a);return s?s[1]:void 0},d=function(e){var t=e.value,r=e.decimalSeparator,i=e.intlConfig,o=e.decimalScale,a=e.prefix,s=void 0===a?"":a,c=e.suffix,d=void 0===c?"":c;if(""===t||void 0===t)return"";if("-"===t)return"-";var m=new RegExp("^\\d?-"+(s?l(s)+"?":"")+"\\d").test(t),v="."!==r?u(t,r,m):t,f={minimumFractionDigits:o||0,maximumFractionDigits:20},w=(i?new Intl.NumberFormat(i.locale,i.currency?n(n({},f),{style:"currency",currency:i.currency}):f):new Intl.NumberFormat(void 0,f)).formatToParts(Number(v)),h=g(w,e),S=p(h,n({},e)),x=t.slice(-1)===r?r:"",b=(v.match(RegExp("\\d+\\.(\\d+)"))||[])[1];return void 0===o&&b&&r&&(h=h.includes(r)?h.replace(RegExp("(\\d+)("+l(r)+")(\\d+)","g"),"$1$2"+b):S&&!d?h.replace(S,""+r+b+S):""+h+r+b),d&&x?""+h+x+d:S&&x?h.replace(S,""+x+S):S&&d?h.replace(S,""+x+d):[h,x,d].join("")},u=function(e,t,r){var i=e;return t&&"."!==t&&(i=i.replace(RegExp(l(t),"g"),"."),r&&"-"===t&&(i="-"+i.slice(1))),i},g=function(e,t){var r=t.prefix,i=t.groupSeparator,o=t.decimalSeparator,n=t.decimalScale,l=t.disableGroupSeparators,s=void 0!==l&&l;return e.reduce((function(e,t,l){var c=t.type,p=t.value;return 0===l&&r?"minusSign"===c?[p,r]:"currency"===c?a(a([],e),[r]):[r,p]:"currency"===c?r?e:a(a([],e),[p]):"group"===c?s?e:a(a([],e),[void 0!==i?i:p]):"decimal"===c?void 0!==n&&0===n?e:a(a([],e),[void 0!==o?o:p]):a(a([],e),"fraction"===c?[void 0!==n?p.slice(0,n):p]:[p])}),[""]).join("")},m={currencySymbol:"",groupSeparator:"",decimalSeparator:"",prefix:"",suffix:""},v=function(e){return RegExp(/\d/,"gi").test(e)};(0,t.forwardRef)((function(e,r){var o=e.allowDecimals,a=void 0===o||o,l=e.allowNegativeValue,s=void 0===l||l,u=e.id,g=e.name,f=e.className,w=e.customInput,h=e.decimalsLimit,S=e.defaultValue,x=e.disabled,b=void 0!==x&&x,y=e.maxLength,_=e.value,D=e.onValueChange,R=e.fixedDecimalLength,E=e.placeholder,N=e.decimalScale,P=e.prefix,C=e.suffix,A=e.intlConfig,T=e.step,O=e.min,K=e.max,L=e.disableGroupSeparators,F=void 0!==L&&L,B=e.disableAbbreviations,M=void 0!==B&&B,k=e.decimalSeparator,G=e.groupSeparator,I=e.onChange,U=e.onFocus,V=e.onBlur,j=e.onKeyDown,H=e.onKeyUp,Z=e.transformRawValue,Y=function(e,t){var r={};for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&t.indexOf(i)<0&&(r[i]=e[i]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var o=0;for(i=Object.getOwnPropertySymbols(e);o<i.length;o++)t.indexOf(i[o])<0&&Object.prototype.propertyIsEnumerable.call(e,i[o])&&(r[i[o]]=e[i[o]])}return r}(e,["allowDecimals","allowNegativeValue","id","name","className","customInput","decimalsLimit","defaultValue","disabled","maxLength","value","onValueChange","fixedDecimalLength","placeholder","decimalScale","prefix","suffix","intlConfig","step","min","max","disableGroupSeparators","disableAbbreviations","decimalSeparator","groupSeparator","onChange","onFocus","onBlur","onKeyDown","onKeyUp","transformRawValue"]);if(k&&v(k))throw new Error("decimalSeparator cannot be a number");if(G&&v(G))throw new Error("groupSeparator cannot be a number");var z=(0,t.useMemo)((function(){return function(e){var t=e||{},r=t.locale,i=t.currency;return(r?new Intl.NumberFormat(r,i?{currency:i,style:"currency"}:void 0):new Intl.NumberFormat).formatToParts(1000.1).reduce((function(e,t,r){return"currency"===t.type?n(n({},e),0===r?{currencySymbol:t.value,prefix:t.value}:{currencySymbol:t.value,suffix:t.value}):"group"===t.type?n(n({},e),{groupSeparator:t.value}):"decimal"===t.type?n(n({},e),{decimalSeparator:t.value}):e}),m)}(A)}),[A]),W=k||z.decimalSeparator||"",J=G||z.groupSeparator||"";if(W&&J&&W===J&&!1===F)throw new Error("decimalSeparator cannot be the same as groupSeparator");var X={decimalSeparator:W,groupSeparator:J,disableGroupSeparators:F,intlConfig:A,prefix:P||z.prefix,suffix:C},$={decimalSeparator:W,groupSeparator:J,allowDecimals:a,decimalsLimit:h||R||2,allowNegativeValue:s,disableAbbreviations:M,prefix:P||z.prefix,transformRawValue:Z},Q=null!=S?d(n(n({},X),{decimalScale:N,value:String(S)})):null!=_?d(n(n({},X),{decimalScale:N,value:String(_)})):"",q=(0,t.useState)(Q),ee=q[0],te=q[1],re=(0,t.useState)(!1),ie=re[0],oe=re[1],ne=(0,t.useState)(0),ae=ne[0],le=ne[1],se=(0,t.useState)(0),ce=se[0],pe=se[1],de=(0,t.useState)(null),ue=de[0],ge=de[1],me=(0,t.useRef)(null);(0,t.useImperativeHandle)(r,(function(){return me.current}));var ve=function(e,t){oe(!0);var r=function(e){var t=e.selectionStart,r=e.value,i=e.lastKeyStroke,o=e.stateValue,n=e.groupSeparator,a=t,l=r;if(o&&a){var s=r.split("");return"Backspace"===i&&o[a]===n&&(s.splice(a-1,1),a-=1),"Delete"===i&&o[a]===n&&(s.splice(a,1),a+=1),{modifiedValue:l=s.join(""),cursorPosition:a}}return{modifiedValue:l,cursorPosition:t}}({selectionStart:t,value:e,lastKeyStroke:ue,stateValue:ee,groupSeparator:J}),i=r.modifiedValue,o=r.cursorPosition,a=c(n({value:i},$));if(!(y&&a.replace(/-/g,"").length>y)){if(""===a||"-"===a||a===W)return D&&D(void 0,g,{float:null,formatted:"",value:""}),te(a),void le(1);var l=W?a.replace(W,"."):a,s=parseFloat(l),p=d(n({value:a},X));if(null!=o){var u=o+(p.length-e.length);u=u<=0?P?P.length:0:u,le(u),pe(ce+1)}te(p),D&&D(a,g,{float:s,formatted:p,value:a})}};(0,t.useEffect)((function(){ie&&"-"!==ee&&me.current&&document.activeElement===me.current&&me.current.setSelectionRange(ae,ae)}),[ee,ae,me,ie,ce]);var fe=n({type:"text",inputMode:"decimal",id:u,name:g,className:f,onChange:function(e){var t=e.target,r=t.value,i=t.selectionStart;ve(r,i),I&&I(e)},onBlur:function(e){var t=e.target.value,r=c(n({value:t},$));if("-"===r||r===W||!r)return te(""),void(V&&V(e));var i=function(e,t,r){if(r&&e.length>1){if(e.includes(t)){var i=e.split(t),o=i[0];if((n=i[1]).length>r)return""+o+t+n.slice(0,r)}var n,a=e.length>r?new RegExp("(\\d+)(\\d{"+r+"})"):new RegExp("(\\d)(\\d+)"),l=e.match(a);if(l)return""+(o=l[1])+t+l[2]}return e}(r,W,R),o=function(e,t,r){if(void 0===t&&(t="."),void 0===r||""===e||void 0===e)return e;if(!e.match(/\d/g))return"";var i=e.split(t),o=i[0],n=i[1];if(0===r)return o;var a=n||"";if(a.length<r)for(;a.length<r;)a+="0";else a=a.slice(0,r);return""+o+t+a}(i,W,void 0!==N?N:R),a=parseFloat(o.replace(W,".")),l=d(n(n({},X),{value:o}));D&&D(o,g,{float:a,formatted:l,value:o}),te(l),V&&V(e)},onFocus:function(e){return U&&U(e),ee?ee.length:0},onKeyDown:function(e){var t=e.key;if(ge(t),T&&("ArrowUp"===t||"ArrowDown"===t)){e.preventDefault(),le(ee.length);var r=parseFloat(null!=_?String(_).replace(W,"."):c(n({value:ee},$)))||0,i="ArrowUp"===t?r+T:r-T;if(void 0!==O&&i<O)return;if(void 0!==K&&i>K)return;var o=String(T).includes(".")?Number(String(T).split(".")[1].length):void 0;ve(String(o?i.toFixed(o):i).replace(".",W))}j&&j(e)},onKeyUp:function(e){var t=e.key,r=e.currentTarget.selectionStart;if("ArrowUp"!==t&&"ArrowDown"!==t&&"-"!==ee){var i=p(ee,{groupSeparator:J,decimalSeparator:W});if(i&&r&&r>ee.length-i.length&&me.current){var o=ee.length-i.length;me.current.setSelectionRange(o,o)}}H&&H(e)},placeholder:E,disabled:b,value:null==_||"-"===ee||W&&ee===W?ee:d(n(n({},X),{decimalScale:ie?void 0:N,value:String(_)})),ref:me},Y);if(w){var we=w;return i().createElement(we,n({},fe))}return i().createElement("input",n({},fe))})).displayName="CurrencyInput";const f=window.wp.compose,w=(window.wp.element,window.wp.components),h=(window.wp.keycodes,window.wp.i18n);function S(e,t){void 0===t&&(t={});var r=t.insertAt;if(e&&"undefined"!=typeof document){var i=document.head||document.getElementsByTagName("head")[0],o=document.createElement("style");o.type="text/css","top"===r&&i.firstChild?i.insertBefore(o,i.firstChild):i.appendChild(o),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(document.createTextNode(e))}}var x;function b(e){var t=e.title,r=e.description,i=void 0===r?null:r,n=e.children;return(0,o.jsxs)("div",{className:"givewp-form-settings__section",children:[(0,o.jsxs)("div",{className:"givewp-form-settings__section__header",children:[(0,o.jsx)("h4",{children:t}),i&&(0,o.jsx)("p",{children:i})]}),(0,o.jsx)("div",{className:"givewp-form-settings__section__body",children:n})]})}r(32485),"function"==typeof SuppressedError&&SuppressedError,S(".mce-floatpanel,.mce-inline-toolbar-grp,.mce-notification{z-index:9999999999!important}.components-popover__content .givewp-classic-editor{margin:0!important}.givewp-classic-editor{width:100%}.givewp-classic-editor>label{box-sizing:border-box;display:block;font-size:11px;font-weight:500;line-height:1.4;margin-bottom:.7rem;margin-top:1.5rem;max-width:100%;overflow:hidden;padding-bottom:0;padding-top:0;text-overflow:ellipsis;text-transform:uppercase;white-space:nowrap;z-index:1}.givewp-classic-editor .wp-editor-tools{z-index:auto}.givewp-classic-editor .wp-editor-tabs{display:none}.givewp-classic-editor .wp-editor-container{border-radius:.125rem;overflow:hidden}.givewp-classic-editor .mce-top-part:before{display:none}.givewp-classic-editor .mce-tinymce,.givewp-classic-editor .wp-editor-container{box-shadow:none}.givewp-classic-editor textarea{width:100%}.givewp-classic-editor .wp-switch-editor{box-sizing:content-box!important}.givewp-classic-editor.show-editor-tabs .wp-editor-tabs{display:block!important}.givewp-classic-editor.show-editor-tabs .quicktags-toolbar input.button.button-small{background:#f6f7f7;border-color:var(--wp-admin-theme-color)!important;color:var(--wp-admin-theme-color);font-size:12px!important;inline-size:auto;line-height:2;min-height:26px;padding:0 8px;vertical-align:top}.givewp-classic-editor.show-editor-tabs .wp-editor-wrap.html-active textarea{border:0}"),window.wp,function(e){e.USD="USD",e.CAD="CAD",e.EUR="EUR",e.AED="AED",e.AFN="AFN",e.ALL="ALL",e.AMD="AMD",e.ARS="ARS",e.AUD="AUD",e.AZN="AZN",e.BAM="BAM",e.BDT="BDT",e.BGN="BGN",e.BHD="BHD",e.BIF="BIF",e.BND="BND",e.BOB="BOB",e.BRL="BRL",e.BWP="BWP",e.BYN="BYN",e.BZD="BZD",e.CDF="CDF",e.CHF="CHF",e.CLP="CLP",e.CNY="CNY",e.COP="COP",e.CRC="CRC",e.CVE="CVE",e.CZK="CZK",e.DJF="DJF",e.DKK="DKK",e.DOP="DOP",e.DZD="DZD",e.EEK="EEK",e.EGP="EGP",e.ERN="ERN",e.ETB="ETB",e.GBP="GBP",e.GEL="GEL",e.GHS="GHS",e.GNF="GNF",e.GTQ="GTQ",e.HKD="HKD",e.HNL="HNL",e.HRK="HRK",e.HUF="HUF",e.IDR="IDR",e.ILS="ILS",e.INR="INR",e.IQD="IQD",e.IRR="IRR",e.ISK="ISK",e.JMD="JMD",e.JOD="JOD",e.JPY="JPY",e.KES="KES",e.KHR="KHR",e.KMF="KMF",e.KRW="KRW",e.KWD="KWD",e.KZT="KZT",e.LBP="LBP",e.LKR="LKR",e.LTL="LTL",e.LVL="LVL",e.LYD="LYD",e.MAD="MAD",e.MDL="MDL",e.MGA="MGA",e.MKD="MKD",e.MMK="MMK",e.MOP="MOP",e.MUR="MUR",e.MXN="MXN",e.MYR="MYR",e.MZN="MZN",e.NAD="NAD",e.NGN="NGN",e.NIO="NIO",e.NOK="NOK",e.NPR="NPR",e.NZD="NZD",e.OMR="OMR",e.PAB="PAB",e.PEN="PEN",e.PHP="PHP",e.PKR="PKR",e.PLN="PLN",e.PYG="PYG",e.QAR="QAR",e.RON="RON",e.RSD="RSD",e.RUB="RUB",e.RWF="RWF",e.SAR="SAR",e.SDG="SDG",e.SEK="SEK",e.SGD="SGD",e.SOS="SOS",e.SYP="SYP",e.THB="THB",e.TND="TND",e.TOP="TOP",e.TRY="TRY",e.TTD="TTD",e.TWD="TWD",e.TZS="TZS",e.UAH="UAH",e.UGX="UGX",e.UYU="UYU",e.UZS="UZS",e.VEF="VEF",e.VND="VND",e.XAF="XAF",e.XOF="XOF",e.YER="YER",e.ZAR="ZAR",e.ZMK="ZMK",e.ZWL="ZWL"}(x||(x={})),S(".givewp-options-header{align-items:center;display:flex;flex-direction:row;gap:.5rem;justify-content:space-between;width:100%}.givewp-options-header--label{margin-bottom:0}.givewp-options-header--button{color:var(--givewp-grey-500);height:fit-content!important;min-width:fit-content!important;padding:0!important}.givewp-options-header--button svg{height:1.25rem;width:1.25rem}.givewp-options-list--item{display:grid;gap:.5rem;grid-template-columns:auto auto 1fr auto;grid-template-rows:2rem;margin-top:.5rem}.givewp-options-list--item>*{align-self:center}.givewp-options-list--item--draggable{color:var(--givewp-grey-500);cursor:grab;display:flex;user-select:none}.givewp-options-list--item--checked{margin:0!important;width:1rem!important}.givewp-options-list--item--inputs{display:flex;flex-direction:column;gap:.25rem}.givewp-options-list--item--inputs .components-base-control{margin-bottom:0!important}.givewp-options-list--item--inputs--open{grid-row:span 2}.givewp-options-list--item--inputs .givewp-options-list__textarea-wrapper{display:grid;gap:2px;width:calc(100% + 20px + .5rem)}.givewp-options-list--item--inputs .givewp-options-list__textarea-wrapper .givewp-options-list__textarea{border:1px solid #8c8c8c;border-radius:2px;height:64px}.givewp-options-list--item--inputs .givewp-options-list__textarea-counter{color:var(--givewp-grey-500);font-size:.625rem;line-height:1.4;text-align:right}.givewp-options-list--item--button{color:var(--givewp-grey-500);height:fit-content!important;min-width:fit-content!important;padding:0!important}"),S(".givewp-form-settings__section{border-bottom:1px solid var(--givewp-grey-50);display:flex;gap:3.5rem;margin-bottom:2.5rem;padding-bottom:2.5rem}@media (max-width:1279px){.givewp-form-settings__section{flex-direction:column;gap:2rem}}.givewp-form-settings__section__header{width:20rem}@media (max-width:1279px){.givewp-form-settings__section__header{padding-left:3.25rem;width:100%}}.givewp-form-settings__section__header h4{color:var(--givewp-grey-900);font-size:1rem;line-height:1.5rem;margin:0 0 var(--givewp-spacing-2)}.givewp-form-settings__section__header p{color:var(--givewp-grey-500);font-size:.75rem;line-height:1.125rem;margin:0}.givewp-form-settings__section__body{flex:1;max-width:33.25rem}.givewp-form-settings__section__body>:not(.no-extra-gap){padding-left:3.25rem}"),S(".givewp-block-notice{background:#fffaf2;border-left:2px solid var(--givewp-orange-400);border-radius:2px;padding:var(--givewp-spacing-3) var(--givewp-spacing-4)}.givewp-block-notice span{display:block;font-size:12px}.givewp-block-notice__title{color:var(--givewp-grey-900);font-size:.75rem;font-stretch:normal;font-style:normal;font-weight:600;line-height:1.33}.givewp-block-notice__description{color:var(--givewp-grey-700);margin:var(--givewp-spacing-2) 0 var(--givewp-spacing-4) 0}.givewp-block-notice__anchor{color:var(--givewp-grey-900);cursor:pointer}");const y=window.wp.apiFetch;var _=r.n(y);function D(){return window.giveTaxonomySettings}function R(){return window.giveTaxonomySettings.formTagsSelected}function E(){return window.giveTaxonomySettings.formCategoriesSelected}const N=({settings:e,setSettings:r})=>{const{formTags:i=R()}=e,o=e=>r({formTags:e}),[n,a]=(0,t.useState)([]);return(0,t.createElement)(w.FormTokenField,{label:(0,h.__)("Add Form Tag","give"),value:null!=i?i:[],onChange:e=>{const[t,r]=((e,t)=>{const r=e.find((e=>"string"==typeof e)),i=!t.some((e=>r===e.value.toLowerCase()));return[r,r&&i]})(e,i);var n,a;r?(n=t,a=e=>o([...i,{id:e,value:t}]),_()({path:"/wp/v2/give_forms_tag",method:"POST",data:{name:n}}).then((e=>a(e.id))).catch((e=>{if("term_exists"!==e.code)throw e;a(e.data.term_id)}))):o(e)},onInputChange:(0,f.debounce)((e=>_()({path:"/wp/v2/give_forms_tag?search="+e}).then(a)),500),suggestions:n?.map((e=>e.name)),disabled:!i})},P=window.wp.htmlEntities,C=(e,r,i)=>e.map((e=>(0,t.createElement)("div",{key:e.id,className:"editor-post-taxonomies__hierarchical-terms-choice"},(0,t.createElement)(w.CheckboxControl,{__nextHasNoMarginBottom:!0,checked:-1!==r.indexOf(e.id),onChange:()=>{const t=parseInt(e.id,10);i(t)},label:(0,P.decodeEntities)(e.name)}),!!e.children.length&&(0,t.createElement)("div",{className:"editor-post-taxonomies__hierarchical-terms-subchoices"},C(e.children,r,i))))),A=({settings:e,setSettings:r})=>{const{formCategories:i=E()}=e,o=(0,t.useMemo)((()=>function(){const e=window.giveTaxonomySettings.formCategoriesAvailable.map((e=>({children:[],parent:null,...e})));if(e.some((({parent:e})=>null===e)))return e;const t=e.reduce(((e,t)=>{const{parent:r}=t;return e[r]||(e[r]=[]),e[r].push(t),e}),{}),r=e=>e.map((e=>{const i=t[e.id];return{...e,children:i&&i.length?r(i):[]}}));return r(t[0]||[])}()),[]);return(0,t.createElement)("div",{style:{display:"flex",flexDirection:"column"}},C(o,i,(e=>{r({formCategories:i.includes(e)?i.filter((t=>t!==e)):[...i,e]})})))},T=({settings:e,setSettings:r})=>(0,t.createElement)("div",{id:"give-form-settings__form-taxonomies"},window.giveTaxonomySettings.formTagsEnabled&&(0,t.createElement)(b,{title:(0,h.__)("Form Tags","give")},(0,t.createElement)(w.PanelRow,{className:"no-extra-gap"},(0,t.createElement)(N,{settings:e,setSettings:r}))),window.giveTaxonomySettings.formCategoriesEnabled&&(0,t.createElement)(b,{title:(0,h.__)("Form Categories","give")},(0,t.createElement)(w.PanelRow,{className:"no-extra-gap"},(0,t.createElement)(A,{settings:e,setSettings:r}))));(0,e.addFilter)("givewp_form_builder_settings_additional_routes","givewp/form-taxonomies",(function(e){const t=D().formTagsEnabled,r=D().formCategoriesEnabled;return[...e,{name:t&&r?(0,h.__)("Tags and Categories",""):t?(0,h.__)("Form Tags",""):r?(0,h.__)("Form Categories",""):"",path:"give-form-tags",element:T}]}))})()})();