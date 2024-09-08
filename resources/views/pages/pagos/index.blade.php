<x-app-layout>
<div class="container mx-auto flex flex-wrap justify-between items-start p-5">
  <!-- Sección de pago -->
  <div class="payment-section flex-1 max-w-xl bg-white dark:bg-gray-800 text-black dark:text-white p-5 border border-gray-300 rounded-lg shadow-lg">
    <!-- Metodo de pago -->
    <div class="payment-method flex justify-between items-center border border-gray-300 dark:border-gray-700 p-4 rounded-md bg-gray-50 dark:bg-gray-700 mb-4">
      <label class="flex items-center w-full">
        <input type="radio" name="payment-method" class="mr-3">
        <span class="method-text flex-1">Tarjeta de crédito</span>
      </label>
      <div class="card-logos flex items-center">
        <img src="{{ Vite::image('visa.png') }}" alt="Visa" class="ml-2 h-6">
        <img src="{{ Vite::image('mastercard.png') }}" alt="MasterCard" class="ml-2 h-6">
      </div>
    </div>
    <!-- Formulario de pago -->
    <div class="payment-form">
      <input type="text" placeholder="Número de tarjeta" class="w-full my-2 p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-600">
      <input type="text" placeholder="Nombre en la tarjeta" class="w-full my-2 p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-600">
      <div class="expiration-cvv flex justify-between">
        <input type="text" placeholder="MM/AA" class="w-1/2 mr-2 p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-600">
        <input type="text" placeholder="CVV" class="w-1/2 ml-2 p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-100 dark:bg-gray-600">
      </div>
    </div>
    <div class="terms my-4">
      <input type="checkbox" id="terms" class="mr-2">
      <label for="terms" class="text-sm">Acepto los <a href="#" class="text-blue-500">términos y condiciones</a></label>
    </div>
    <div class="total text-right font-bold text-lg mt-4">Total: $100</div>
    <button class="w-full py-3 mt-4 bg-yellow-500 text-white rounded-full hover:bg-yellow-600">Pagar</button>
  </div>

  <!-- Resumen del producto -->
  <div class="product-summary flex-1 max-w-lg bg-white dark:bg-gray-800 text-black dark:text-white p-5 border border-gray-300 rounded-lg shadow-lg mt-5 lg:mt-0">
    <h3 class="text-xl font-bold mb-4">Resumen del producto</h3>
    <div class="product flex justify-between items-start mb-4">
      <span>Producto 1</span>
      <span>$50</span>
    </div>
    <div class="product flex justify-between items-start mb-4">
      <span>Producto 2</span>
      <span>$50</span>
    </div>
    <div class="details mt-4">Detalles adicionales del producto...</div>
    <div class="terms mt-20 mb-4">Condiciones...</div>
    <div class="total text-right font-bold text-lg mt-4">Total: $100</div>
  </div>
</div>

</x-app-layout>