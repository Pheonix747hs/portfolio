<style>
    .content2 {
        padding: 20px;
    }
</style>

<div class="container mx-auto my-8 pointer-events-none" style="z-index: 2; position: relative;">
    <div class="flex flex-wrap -mx-4">
        @foreach ($cardDataArray as $card)
            
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4" style="max-height: 100%">
                    <div class="max-w-sm bg-gray-800 border border-gray-700 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 pointer-events-auto">
                        <a>
                            <img class="rounded-t-lg w-full h-40 object-cover object-center" src="{{ $card->image }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-gray-900 pointer-events-auto">{{ $card->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-300 dark:text-gray-400 pointer-events-auto">{{ $card->info }}</p>
                            <a href="{{ $card->url }}" target="_blank" rel="noopener noreferrer" class="pointer-events-auto inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Visit Git Repo
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            
        @endforeach
    </div>
</div>
