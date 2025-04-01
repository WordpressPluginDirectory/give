window.GiveDonationSummary={init:function(){GiveDonationSummary.initAmount(),GiveDonationSummary.initFrequency(),GiveDonationSummary.initTotal()},getFormattedDonationAmount:function(e){const n=Give.fn.unFormatCurrency(e.find('[name="give-amount"]').val(),Give.form.fn.getInfo("decimal_separator",e));return Give.fn.formatCurrency(n,{symbol:Give.form.fn.getInfo("currency_symbol",e)},e)},initAmount:function(){GiveDonationSummary.observe('[name="give-amount"]',(function(e,n){n.find('[data-tag="amount"]').html(GiveDonationSummary.getFormattedDonationAmount(n))}));const e=document.querySelector('[name="give-amount"]');if(e){const n=jQuery(e.closest(".give-form"));e.addEventListener("change",(function(){n.find('[data-tag="amount"]').html(GiveDonationSummary.getFormattedDonationAmount(n))}))}},initFrequency:function(){GiveDonationSummary.observe('[name="give-recurring-period"]',GiveDonationSummary.handleDonorsChoiceRecurringFrequency),GiveDonationSummary.observe('[name="give-price-id"]',GiveDonationSummary.handleAdminDefinedRecurringFrequency),GiveDonationSummary.observe('[name="_give_is_donation_recurring"]',GiveDonationSummary.handleAdminDefinedSetDonationFrequency),GiveDonationSummary.observe('[name="give-price-id"]',GiveDonationSummary.handleAdminDefinedRecurringFrequency)},handleDonorsChoiceRecurringFrequency:function(e,n){n.find(".js-give-donation-summary-frequency-help-text").toggle(!e.checked),n.find('[data-tag="frequency"]').toggle(!e.checked),n.find('[data-tag="recurring"]').toggle(e.checked).html(e.dataset.periodLabel);const t=document.querySelector('[name="give-recurring-period-donors-choice"]');if(t){const e=t.options[t.selectedIndex].value||!1;e&&n.find('[data-tag="recurring"]').html(GiveDonationSummaryData.recurringLabelLookup[e])}},handleAdminDefinedRecurringFrequency:function(e,n){const t=e.value,i=document.querySelector(".give_recurring_donation_details");if(!i)return;const o=JSON.parse(i.value);if(void 0!==o.multi){const e="yes"===o.multi[t]._give_recurring,i=o.multi[t].give_recurring_pretty_text;n.find(".js-give-donation-summary-frequency-help-text").toggle(!e),n.find('[data-tag="frequency"]').toggle(!e),n.find('[data-tag="recurring"]').toggle(e).html(i)}},handleAdminDefinedSetDonationFrequency:function(e,n){const t=e.value,i=document.querySelector(".give-recurring-admin-choice");t&&i&&(n.find(".js-give-donation-summary-frequency-help-text").toggle(!t),n.find('[data-tag="frequency"]').toggle(!t),n.find('[data-tag="recurring"]').html(i.textContent))},handleFees:function(e){if(!e.find('[name="give-fee-mode-enable"]')||"true"!==e.find('[name="give-fee-mode-enable"]').val())return void e.find(".js-give-donation-summary-fees").toggle(!1);e.find(".js-give-donation-summary-fees").toggle(!0);const n=e.find(".give-fee-message-label").attr("data-feemessage").split(" "),t=e.find(".give-fee-message-label-text").text().split(" ").filter((e=>!n.includes(e))).pop();e.find('[data-tag="fees"]').html(t)},initTotal:function(){GiveDonationSummary.observe(".give-final-total-amount",(function(e,n){n.find('[data-tag="total"]').html(e.textContent),GiveDonationSummary.handleFees(n)}));const e=document.querySelector(".give-final-total-amount");e&&(e.textContent=e.textContent)},handleNavigateBack:function(){},onGatewayLoadSuccess:function(){const e=jQuery("#give_purchase_form_wrap .give-donation-summary-section").detach();e.length&&(jQuery(".give-donation-summary-section").remove(),e.appendTo("#donate-fieldset"),GiveDonationSummary.initTotal(),GiveDonationSummary.handleNavigateBack=function(e){e.stopPropagation(),e.preventDefault(),window.formNavigator.back()})},observe:function(e,n,t=!0){const i=document.querySelector(e);if(!i)return;const o=jQuery(i.closest(".give-form"));new MutationObserver((function(e){for(const t of e)"attributes"===t.type&&n(t.target,o)})).observe(i,{attributes:!0}),t&&n(i,o)}},jQuery(document).on("give:postInit",GiveDonationSummary.init),jQuery(document).on("Give:onGatewayLoadSuccess",GiveDonationSummary.onGatewayLoadSuccess);