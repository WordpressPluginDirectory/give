Array.from(document.querySelectorAll(".setup-item")).forEach((e=>{const t=e.querySelector(".js-action-link");t&&(t.addEventListener("click",(e=>e.stopPropagation())),e.style.cursor="pointer",e.addEventListener("click",(e=>{window.getSelection().toString()||t.click()})))})),document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector("a.activate-license"),t=document.querySelector("#give-activate-license-modal"),i=t.querySelector("#give-license-activator-wrap"),c=t.querySelector(".givewp-modal-close"),r=t.querySelector('input[type="text"]'),n=t.querySelector('input[type="submit"]');e.addEventListener("click",(e=>{e.preventDefault(),t.showModal()})),t.addEventListener("click",(()=>{t.close()})),c.addEventListener("click",(()=>{t.close()})),i.addEventListener("click",(e=>{e.stopPropagation()})),r.addEventListener("input",(()=>{r.value?n.removeAttribute("disabled"):n.setAttribute("disabled","disabled")}))}));