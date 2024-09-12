<x-app-layout>
    <div class="container mx-auto flex flex-wrap justify-between items-start p-5">
        <!-- Sección de pago -->
        <div class="payment-section flex-1 max-w-xl bg-white dark:bg-gray-800 text-black dark:text-white p-5 border border-gray-300 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">INNOCOURSE</h2>
            <hr class="mb-4">
            <div class="payment-methods space-y-4">
                <!-- Tarjeta de crédito -->
                <div class="payment-method flex justify-between items-center border border-gray-300 dark:border-gray-700 p-4 rounded-md bg-gray-50 dark:bg-gray-700">
                    <label class="flex items-center w-full">
                        <input type="radio" name="payment" value="credit" class="mr-3" onclick="showForm('credit-form')">
                        <span class="method-text flex-1">Tarjeta de crédito | Hasta en 6 cuotas de S/30 PEN</span>
                    </label>
                    <div class="card-logos flex items-center">
                        <img src="{{ Vite::image('visa.png') }}" alt="Visa" class="ml-2 h-6">
                        <img src="{{ Vite::image('mastercard.png') }}" alt="MasterCard" class="ml-2 h-6">
                    </div>
                </div>
                <!-- Tarjeta de débito -->
                <div class="payment-method flex justify-between items-center border border-gray-300 dark:border-gray-700 p-4 rounded-md bg-gray-50 dark:bg-gray-700">
                    <label class="flex items-center w-full">
                        <input type="radio" name="payment" value="debit" class="mr-3" onclick="showForm('debit-form')">
                        <span class="method-text flex-1">Tarjeta de débito</span>
                    </label>
                    <div class="card-logos flex items-center">
                        <img src="{{ Vite::image('visa.png') }}" alt="Visa" class="ml-2 h-6">
                        <img src="{{ Vite::image('mastercard.png') }}" alt="MasterCard" class="ml-2 h-6">
                    </div>
                </div>
                <!-- Yape / Plin -->
                <div class="payment-method flex justify-between items-center border border-gray-300 dark:border-gray-700 p-4 rounded-md bg-gray-50 dark:bg-gray-700">
                    <label class="flex items-center w-full">
                        <input type="radio" name="payment" value="yape" class="mr-3" onclick="showForm('yape-form')">
                        <span class="method-text flex-1">Yape / Plin</span>
                    </label>
                    <div class="card-logos flex items-center">
                        <img src="{{ Vite::image('yapeplin.png') }}" alt="Yape" class="ml-2 h-6">
                    </div>
                </div>
                <!-- Pago Efectivo -->
                <div class="payment-method flex justify-between items-center border border-gray-300 dark:border-gray-700 p-4 rounded-md bg-gray-50 dark:bg-gray-700">
                    <label class="flex items-center w-full">
                        <input type="radio" name="payment" value="efectivo" class="mr-3" onclick="showForm('efectivo-form')">
                        <span class="method-text flex-1">Pago Efectivo</span>
                    </label>
                    <div class="card-logos flex items-center">
                        <img src="{{ Vite::image('pagoefectivo.png') }}" alt="Pago Efectivo" class="ml-2 h-6">
                    </div>
                </div>
            </div>

            <!-- Formularios -->
            <div id="credit-form" class="payment-form hidden mt-4">
    <h3 class="text-lg font-bold mb-2">Datos de la tarjeta</h3>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Número de tarjeta">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Nombre en la tarjeta">
    <div class="flex space-x-2 mb-2">
        <input type="text" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="MM/AA">
        <input type="text" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="CVV">
    </div>
    
    <h3 class="text-lg font-bold mt-4 mb-2">Seleccionar cuotas</h3>
    <select class="w-full p-2 mb-4 border border-gray-300 rounded">
        <option value="" disabled selected>Cantidad de Cuotas</option>
        <option value="1">1 cuota</option>
        <option value="2">2 cuotas</option>
        <option value="3">3 cuotas</option>
        <option value="6">6 cuotas</option>
    </select>
    
    <h3 class="text-lg font-bold mt-4 mb-2">Datos de facturación y usuario</h3>
    <div class="form-group flex space-x-2 mb-2">
        <input type="text" id="nombre" name="nombre" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Nombre">
        <input type="text" id="apellido" name="apellido" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Apellido">
    </div>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Email">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Dirección">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Provincia">
    <div class="form-group flex space-x-2 mb-2">
        <select id="codigo-pais" name="codigo-pais" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Código de País</option>
            <option value="+51">+51 (Perú)</option>
            <option value="+1">+1 (EE.UU.)</option>
            <option value="+34">+34 (España)</option>
            <option value="+52">+52 (México)</option>
            <option value="+44">+44 (Reino Unido)</option>
        </select>
        <input type="text" id="numero-telefono" name="numero-telefono" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Teléfono">
    </div>
    <div class="form-group flex space-x-2 mb-2">
        <select id="tipo-documento" name="tipo-documento" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Tipo de Documento</option>
            <option value="DNI">DNI</option>
        </select>
        <input type="text" id="numero-documento" name="numero-documento" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Documento">
    </div>
            </div>
            <div id="debit-form" class="payment-form hidden mt-4">
    <h3 class="text-lg font-bold mb-2">Datos de la tarjeta</h3>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Número de tarjeta">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Nombre en la tarjeta">
    <div class="flex space-x-2 mb-2">
        <input type="text" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="MM/AA">
        <input type="text" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="CVV">
    </div>

    <h3 class="text-lg font-bold mt-4 mb-2">Datos de facturación y usuario</h3>
    <div class="form-group flex space-x-2 mb-2">
        <input type="text" id="nombre" name="nombre" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Nombre">
        <input type="text" id="apellido" name="apellido" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Apellido">
    </div>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Email">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Dirección">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Provincia">
    <div class="form-group flex space-x-2 mb-2">
        <select id="codigo-pais" name="codigo-pais" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Código de País</option>
            <option value="+51">+51 (Perú)</option>
            <option value="+1">+1 (EE.UU.)</option>
            <option value="+34">+34 (España)</option>
            <option value="+52">+52 (México)</option>
            <option value="+44">+44 (Reino Unido)</option>
        </select>
        <input type="text" id="numero-telefono" name="numero-telefono" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Teléfono">
    </div>
    <div class="form-group flex space-x-2 mb-2">
        <select id="tipo-documento" name="tipo-documento" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Tipo de Documento</option>
            <option value="DNI">DNI</option>
        </select>
        <input type="text" id="numero-documento" name="numero-documento" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Documento">
    </div>
            </div>
            <div id="yape-form" class="payment-form hidden mt-4">
    <h3 class="text-lg font-bold mb-2">Datos de facturación y usuario</h3>
    <div class="form-group flex space-x-2 mb-2">
        <input type="text" id="nombre" name="nombre" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Nombre">
        <input type="text" id="apellido" name="apellido" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Apellido">
    </div>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Email">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Confirmar Email">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Ingresa tu celular Yape">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Código de Aprobación">
</div>
            <div id="efectivo-form" class="payment-form hidden mt-4">
            <h3 class="text-lg font-bold mb-2">Datos de facturación y usuario</h3>
    <div class="form-group flex space-x-2 mb-2">
        <input type="text" id="nombre" name="nombre" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Nombre">
        <input type="text" id="apellido" name="apellido" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Apellido">
    </div>
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Email">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Dirección">
    <input type="text" class="w-full p-2 mb-2 border border-gray-300 rounded" placeholder="Provincia">
    <div class="form-group flex space-x-2 mb-2">
        <select id="codigo-pais" name="codigo-pais" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Código de País</option>
            <option value="+51">+51 (Perú)</option>
            <option value="+1">+1 (EE.UU.)</option>
            <option value="+34">+34 (España)</option>
            <option value="+52">+52 (México)</option>
            <option value="+44">+44 (Reino Unido)</option>
        </select>
        <input type="text" id="numero-telefono" name="numero-telefono" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Teléfono">
    </div>
    <div class="form-group flex space-x-2 mb-2">
        <select id="tipo-documento" name="tipo-documento" class="w-1/2 p-2 border border-gray-300 rounded">
            <option value="" disabled selected>Tipo de Documento</option>
            <option value="DNI">DNI</option>
        </select>
        <input type="text" id="numero-documento" name="numero-documento" class="w-1/2 p-2 border border-gray-300 rounded" placeholder="Número de Documento">
            </div>
        </div>
        </div>

        <!-- Resumen del producto -->
        <div class="product-summary flex-1 max-w-lg bg-white dark:bg-gray-800 text-black dark:text-white p-5 border border-gray-300 rounded-lg shadow-lg mt-5 lg:mt-0">
            <h3 class="text-xl font-bold mb-4">Tus productos</h3>
            <div class="product flex justify-between items-start mb-4">
                <span class="flex items-center">
                    <img src="{{ Vite::image('logocurso.png') }}" alt="Curso" class="h-6 mr-2">
                    Curso de Desarrollo Web
                </span>
                <span>S/. 180 PEN</span>
            </div>
            <div class="border-t border-gray-300 dark:border-gray-700 my-2"></div>
            <div class="text-sm">
                País de tributación: Perú<br>
                0% IVA 0,00 PEN
            </div>
            <button id="showCouponButton" class="w-full py-2 mt-4 bg-orange-400 text-white rounded-full hover:bg-orange-500 text-sm">¿Tienes un cupón?</button>
            <input id="couponInput" type="text" class="hidden mt-2 p-2 border border-gray-300 rounded-lg w-full" placeholder="Ingresa tu cupón">

            <!-- Terminos y condiciones  -->
            <div class="mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2"> Aceptar los términos y condiciones
                </label>
                <div class="flex justify-between items-center mt-2">
                    <span class="text-lg font-bold">Total: S/. 180 PEN</span>
                </div>
                <button class="w-full py-2 mt-4 bg-orange-400 text-white rounded-full hover:bg-orange-500 text-sm">Pagar</button>
            </div>
        </div>
        
    </div>
    <script>
        function showForm(formId) {
            const forms = document.querySelectorAll('.payment-form');
            forms.forEach(form => form.classList.add('hidden'));
            document.getElementById(formId).classList.remove('hidden');
        }

        document.getElementById('showCouponButton').addEventListener('click', function () {
            const couponInput = document.getElementById('couponInput');
            if (couponInput.classList.contains('hidden')) {
                couponInput.classList.remove('hidden');
            } else {
                couponInput.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>