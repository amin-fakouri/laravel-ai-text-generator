<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">

    <div class="w-full max-w-2xl bg-white rounded-xl shadow-md p-6">

        <h2 class="text-2xl font-bold text-gray-800 mb-5">
             دستیار هوش مصنوعی (AI Assistant)
        </h2>

        <div class="flex flex-col sm:flex-row gap-3">

            <input
                type="text"
                wire:model="prompt"
                wire:keydown.enter="generate"
                placeholder="سؤالت را بنویس... (Ask your question...)"
                class="flex-1 rounded-lg border border-gray-300 px-4 py-3
                       text-gray-700 outline-none
                       focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
            >

            <button
                wire:click="generate"
                class="rounded-lg bg-blue-600 px-6 py-3
                       font-medium text-white
                       hover:bg-blue-700 transition"
            >
                ارسال (Send)
            </button>

        </div>

        @if($response)
            <div class="mt-5 rounded-lg bg-blue-50 border border-blue-100 p-4">

                <div class="font-semibold text-blue-700 mb-2">
                    پاسخ هوش مصنوعی (AI Response)
                </div>

                <p class="text-gray-700">
                    {{ $response }}
                </p>

            </div>
        @endif

    </div>

</div>
