(()=>{const e={};document.addEventListener("DOMContentLoaded",(function(t){let i={},a=[],n="";const r=[];let s=[];const l=[],o=give_stripe_vars.preferred_locale,d=document.querySelectorAll(".give-form-wrap");function c(e,t=[]){Object.keys(t).length>0&&(i=t[0].item),Array.prototype.forEach.call(t,(function(t,i){!1===t.isCardMounted&&(t.item.mount(t.selector+e),t.isCardMounted=!0)}))}function u(e=[]){Array.prototype.forEach.call(e,(function(e,t){!0===e.isCardMounted&&(e.item.unmount(),e.isCardMounted=!1)}))}0!==Object.keys(give_stripe_vars.element_font_styles).length&&l.push(give_stripe_vars.element_font_styles),Array.prototype.forEach.call(d,(function(t){const i=t.querySelector(".give-form");if(null===i)return;const d=i.getAttribute("data-publishable-key"),v=i.getAttribute("data-account"),p=i.getAttribute("data-id");if(null===d)return;e[p]=Stripe(d),0!==v.trim().length&&(e[p]=Stripe(d,{stripeAccount:v}));let _=e[p].elements({locale:o});l.length>0&&(_=e[p].elements({fonts:l,locale:o})),null!==i.querySelector(".give-gateway:checked").value&&(n=i.querySelector(".give-gateway:checked").value);const g=i.querySelector(".give-submit");a=function(e,t,i){const a=[],r=give_stripe_vars.element_base_styles,s=give_stripe_vars.element_complete_styles,l=give_stripe_vars.element_empty_styles,o=give_stripe_vars.element_invalid_styles,d=e.querySelector("#give-stripe-becs-fields-"+i),c={style:{base:r,complete:s,empty:l,invalid:o},classes:{focus:"focus",empty:"empty",invalid:"invalid"}};if("stripe_becs"===n){const e=d.getAttribute("data-hide_icon"),t=d.getAttribute("data-icon_style");c.iconStyle=t,c.hideIcon="disabled"===e}const u=t.create("auBankAccount",c);return a.push(u),a}(i,_,p),s=["#give-stripe-becs-fields-"],r[p]=[],Array.prototype.forEach.call(s,(function(e,t){r[p][t]=[],r[p][t].item=a[t],r[p][t].selector=e,r[p][t].isCardMounted=!1})),jQuery(document).on("give_gateway_loaded",(function(e,t,a){u(r[p]),"stripe_becs"===i.querySelector(".give-gateway-option-selected .give-gateway").value&&c(p,r[p])})),"stripe_becs"===n||give_stripe_vars.stripe_becs_update?(g.setAttribute("disabled","disabled"),c(p,r[p]),g.removeAttribute("disabled")):u(a)})),jQuery("body").on("submit",".give-form",(function(t){const i=jQuery(this),a=i.find('input[name="give-form-id-prefix"]').val();("stripe_becs"===i.find("input.give-gateway:checked").val()||give_stripe_vars.stripe_becs_update)&&(function(t,i){const a={billing_details:{name:"",email:""}},n=t.find('input[name="give-form-id"]').val(),r=t.find('input[name="give-form-id-prefix"]').val(),s=t.find('input[name="give_first"]').val(),l=t.find('input[name="give_last"]').val(),o=t.find('input[name="give_email"]').val(),d=t.find("[id^=give-purchase-button]");if(t.find("[id^=give-purchase-button]").attr("disabled","disabled"),a.billing_details.name=s+" "+l,a.billing_details.email=o,give_stripe_vars.checkout_address&&!give_stripe_vars.stripe_becs_update){const e=t.find(".card-address").val(),i=t.find(".card-address-2").val(),n=t.find(".card-city").val(),r=t.find(".card_state").val(),s=t.find(".card-zip").val(),l=t.find(".billing-country").val();a.billing_details.address={line1:e||"",line2:i||"",city:n||"",state:r||"",postal_code:s||"",country:l||""}}e[r].createPaymentMethod("au_becs_debit",i,a).then((function(e){if(e.error){const i=`<div class="give_errors"><p class="give_error">${e.error.message}</p></div>`;d.attr("disabled",!1),jQuery(".give-loading-animation").fadeOut(),t.find("[id^=give-stripe-payment-errors-"+n+"]").html(i),give_global_vars.complete_purchase?d.val(give_global_vars.complete_purchase):d.val(d.data("before-validation-label"))}else!function(e,t){e.find('input[name="give_stripe_payment_method"]').val(t.id),e.get(0).submit()}(t,e.paymentMethod)}))}(i,r[a][0].item),t.preventDefault())}))}))})();