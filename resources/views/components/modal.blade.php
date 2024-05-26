@props(['name', 'title', 'height'])

<div x-data="{ show : false , name : '{{ $name }}', modalHeight: '{{ $height ?? "min-h-[250px]" }}'}"
    x-show="show"
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    style="display:none;" class="fixed z-50 inset-0" x-transition.duration>

    {{-- Gray Background --}}
    <div x-on:click="$dispatch('close-modal')" style="transition-duration: 0s;" class="fixed inset-0 bg-gray-800 opacity-60"></div>

    {{-- Modal Body --}}
    <div x-bind:class="modalHeight" class="bg-white dark:bg-gray-700 rounded-lg m-auto fixed inset-0 max-w-xl overflow-y-auto min-h-[250px] h-[100px]">

        {{-- Fixed Header --}}
        @if (isset($title))
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 sticky top-0 bg-white dark:bg-gray-700">
                <div class="text-xl font-semibold text-gray-900 dark:text-white">{{ $title }}</div>
                <button x-on:click="$dispatch('close-modal')" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        {{-- Scrollable Content --}}
        <div class="overflow-y-auto">
            {{ $body }}
        </div>
    </div>
</div>
