document.addEventListener('DOMContentLoaded', () => {
  const paymentRadios = document.querySelectorAll('input[name="payment"]');
  const creditForm = document.getElementById('credit-form');
  const debitForm = document.getElementById('debit-form');
  const yapeForm = document.getElementById('yape-form');
  const efectivoForm = document.getElementById('efectivo-form');
  const showCouponButton = document.getElementById('showCouponButton');
  const couponInput = document.getElementById('couponInput');
  const applyCouponButton = document.getElementById('applyCouponButton');

  paymentRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      creditForm.classList.add('hidden');
      debitForm.classList.add('hidden');
      yapeForm.classList.add('hidden');
      efectivoForm.classList.add('hidden');

      if (radio.value === 'credit') {
        creditForm.classList.remove('hidden');
      } else if (radio.value === 'debit') {
        debitForm.classList.remove('hidden');
      } else if (radio.value === 'yape') {
        yapeForm.classList.remove('hidden');
      } else if (radio.value === 'Pago Efectivo') {
        efectivoForm.classList.remove('hidden');
      }
    });
  });

  showCouponButton.addEventListener('click', () => {
    couponInput.classList.toggle('hidden');
  });

  const toggleNightMode = document.getElementById('toggleNightMode');
  toggleNightMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
  });
});
