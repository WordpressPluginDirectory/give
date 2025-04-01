document.addEventListener("DOMContentLoaded",(()=>{let e=!1,t=!1;const n=document.querySelector(".giveListTable"),o=new Event("giveListTableIsLoading");function i(e){const{top:t,bottom:n}=e.getBoundingClientRect(),o=window.innerHeight||document.documentElement.clientHeight;return(t>0||n>0)&&t<o}function r(e){return!!e&&Boolean(e.querySelector(".js-give-async-data"))}const a=(o,i,a=null,c=null,l=null,d=null,u=null)=>{if(!r(a)&&!r(d)&&!r(u))return;if(window.GiveDonationFormsAsyncData.throttlingEnabled&&e)return void(window.GiveDonationFormsAsyncData.scriptDebug&&console.log("throttleTimer start: ",e));e=!0,window.GiveDonationFormsAsyncData.scriptDebug&&console.log("request start: ",(new Date).toLocaleTimeString()),window.GiveDonationFormsAsyncData.scriptDebug&&console.log("item: ",i),i.classList.add("give-async-data-fetch-triggered");const g=new AbortController,v=g.signal;fetch(`${window.GiveDonationFormsAsyncData.ajaxUrl}?action=givewp_get_form_async_data_for_list_view&formId=${o}&nonce=${window.GiveDonationFormsAsyncData.ajaxNonce}`,{signal:v}).then((function(e){return e.json()})).then((function(e){window.GiveDonationFormsAsyncData.scriptDebug&&console.log("Response: ",e),e.success&&(r(a)&&(a.innerHTML=e.data.amountRaised),c&&c.style.width!==e.data.percentComplete+"%"&&(c.style.width=e.data.percentComplete+"%"),l&&e.data.percentComplete>=100&&(l.style.opacity="1"),r(d)&&(d.innerHTML=e.data.donationsCount),r(u)&&(u.innerHTML=e.data.revenue))})).catch((e=>{i.classList.remove("give-async-data-fetch-triggered"),window.GiveDonationFormsAsyncData.scriptDebug&&console.log("Error: ",e)})).finally((()=>{window.GiveDonationFormsAsyncData.scriptDebug&&console.log("request end: ",(new Date).toLocaleTimeString()),window.GiveDonationFormsAsyncData.throttlingEnabled&&e&&(e=!1,window.GiveDonationFormsAsyncData.scriptDebug&&console.log("throttleTimer end: ",e),s()),window.GiveDonationFormsAsyncData.scriptDebug&&console.log("Request finalized.")})),addEventListener("beforeunload",(e=>{t=!0,g.abort("Async request aborted due to exit page.")})),n&&n.addEventListener("giveListTableIsLoading",(e=>{t=!0,g.abort("Async request aborted due to table loading.")}))},s=()=>{t?window.GiveDonationFormsAsyncData.scriptDebug&&console.log("abortLoadAsyncData"):(function(){const e=document.querySelectorAll("tr:not(.give-async-data-fetch-triggered)");e.length>0&&(function(){if(n){const e={attributes:!0,childList:!1,characterData:!1};new MutationObserver((function(e){n.classList.contains("giveListTableIsLoading")&&n.dispatchEvent(o),n.classList.contains("giveListTableIsLoaded")&&(t=!1,s())})).observe(n,e)}}(),e.forEach((e=>{const t=e.querySelector(".giveListTableSelect");if(!t)return;const n=t.getAttribute("data-id"),o=e.querySelector("[id^='giveDonationFormsProgressBar'] > span"),r=e.querySelector(".goalProgress > span"),s=e.querySelector(".goalProgress--achieved"),c=e.querySelector(".column-donations-count-value"),l=e.querySelector(".column-earnings-value");i(e)&&a(n,e,o,r,s,c,l)})))}(),function(){const e=document.querySelectorAll(".type-give_forms:not(.give-async-data-fetch-triggered)");e.length>0&&e.forEach((e=>{if(!e.hasAttribute("id")||!e.id.includes("post-"))return;const t=e.id.split("post-")[1],n=e.querySelector(".column-goal"),o=n.querySelector(".give-goal-text > span"),r=n.querySelector(".give-admin-progress-bar > span"),s=n.querySelector(".give-admin-goal-achieved"),c=e.querySelector(".column-donations > a"),l=e.querySelector(".column-earnings > a");i(e)&&a(t,e,o,r,s,c,l)}))}(),function(){const e=document.querySelectorAll(".give-grid__item:not(.give-async-data-fetch-triggered)");e.length>0&&e.forEach((e=>{const t=e.querySelector(".give-card");if(!t||!t.hasAttribute("id")||!t.id.includes("give-card-"))return;const n=t.id.split("give-card-")[1],o=e.querySelector(".form-grid-raised");if(!o)return;const r=o.querySelector("div:nth-child(1)").querySelector("span:nth-child(1)"),s=e.querySelector(".give-progress-bar").querySelector("span"),c=o.querySelector("div:nth-child(2)").querySelector("span:nth-child(1)");i(e)&&a(n,e,r,s,null,c)}))}())};s(),window.addEventListener("scroll",(()=>{s()}),!0),window.addEventListener("resize",(()=>{s()}),!0),window.onload=function(){const e=document.querySelector(".wp-block-post-content");e&&new ResizeObserver((e=>{window.GiveDonationFormsAsyncData.scriptDebug&&console.log("WP Block Editor height changed:",e[0].target.clientHeight),s()})).observe(e)}}));