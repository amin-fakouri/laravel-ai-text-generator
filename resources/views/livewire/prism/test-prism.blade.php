<div class="max-w-2xl mx-auto p-4 sm:p-6">
    <form wire:submit="text_generate" class="flex flex-col gap-3">
        <textarea
            wire:model="text"
            rows="4"
            class="w-full bg-gray-100 border border-gray-200 rounded-xl p-3 text-sm sm:text-base
                   outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent
                   resize-none transition"
            placeholder="Write anything.. / هر چیزی بنویس.."
        ></textarea>

        <button
            type="submit"
            wire:loading.attr="disabled"
            wire:target="text_generate"
            class="self-end bg-sky-600 hover:bg-sky-700 disabled:bg-sky-400
                   disabled:cursor-not-allowed text-white font-medium px-5 py-2 rounded-xl
                   transition cursor-pointer flex items-center gap-2"
        >
            <span wire:loading.remove wire:target="text_generate">Generate / تولید</span>
            <span wire:loading wire:target="text_generate" class="flex items-center gap-2">
                <svg class="animate-spin h-4 w-4" viewBox="0 0 24 24" fill="none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                Generating... / در حال تولید...
            </span>
        </button>
    </form>

    @if ($ans)
        <div class="mt-4 bg-gray-50 border border-gray-200 rounded-xl p-4" dir="rtl">
            <p class="text-sm sm:text-base leading-relaxed whitespace-pre-line">{{ $ans }}</p>
        </div>
    @endif
</div>
