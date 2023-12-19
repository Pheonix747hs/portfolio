<div class="container mx-auto mt-4 max-h-screen overflow-hidden" style="z-index: 2">
    <div class="flex flex-wrap -mx-4">
        @foreach ($cardDataArray as $card)
            <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/3 px-4 mb-4">
                <div class="flex flex-col h-full p-4 bg-slate-700 shadow-md dark:bg-neutral-700 rounded-lg pointer-events-auto" style="--tw-bg-opacity: 1;background-color: rgb(51 65 85 / var(--tw-bg-opacity))">
                    <div class="flex-shrink-0 mb-4">
                        <img class="w-full h-32 object-cover rounded" src="{{ $card->image }}" alt="Card Image">
                    </div>
                    <div class="flex-grow mb-4">
                        <h2 class="text-xl font-semibold text-neutral-800 dark:text-neutral-200">{{ $card->title }}</h2>
                        <p class="text-neutral-600 dark:text-neutral-300">{{ $card->info }}</p>
                    </div>
                    <div class="flex-shrink-0 self-end">
                        <a href="{{ $card->url }}" class="bg-blue-500 text-white px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-blue-600 transform hover:scale-105">Go to</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
