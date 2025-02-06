<div x-data="{ open: false }" class="pt-6">
    <dt>
        <button @click="open = !open" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
            <span class="text-base font-semibold leading-7">{{ $question }}</span>
            <span class="ml-6 flex h-7 items-center">
                <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
            </span>
        </button>
    </dt>
    <dd x-show="open" class="mt-2 pr-12">
        <p class="text-base leading-7 text-gray-600 dark:text-gray-300">{{ $slot }}</p>
    </dd>
</div>