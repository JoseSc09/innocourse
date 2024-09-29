<label for="{{ $id }}"
    class="block mb-2 text-sm font-medium  {{ $errors->has($name == 'password_confirmation' ? 'password' : $name) ? 'text-red-500 dark:text-red-500' : 'text-gray-900 dark:text-white' }}">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'block w-full p-2.5 border rounded-lg text-sm focus:ring-1 text-gray-900 dark:text-white bg-gray-50 dark:bg-gray-600 ' . ($errors->has($name == 'password_confirmation' ? 'password' : $name) ? 'bg-red-50 border-red-400 focus:ring-red-400 focus:border-red-400 dark:focus:ring-red-500 dark:border-red-500 dark:focus:border-red-500 placeholder-red-400 dark:placeholder-red-500' : 'border-gray-300 focus:ring-blue-400 focus:border-blue-400 dark:border-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500')]) }}>
@error($name == 'password_confirmation' ? 'password' : $name)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error!
        </span>{{ $message }}</p>
@enderror
