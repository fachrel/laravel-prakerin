<!-- resources/views/livewire/components/input-field.blade.php -->

<div>
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium
        @if ($errors->has($name))
            text-red-700 dark:text-red-500
        @else
            text-gray-900 dark:text-white
        @endif">
        {{ $label }}
    </label>
    <input wire:model="{{ $model }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $label }}">
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
    @enderror
</div>
