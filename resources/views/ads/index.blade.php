@push('scripts')
    <script src="{{ mix('js/ads.js') }}" type="text/javascript"></script>
@endpush
<x-app-layout>
    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto lg:px-8 px-6 mt-2 ads-container">
        @foreach ($ads as $ad)
        <div class="cursor-pointer transform duration-500 hover:-translate-y-1 ad-card-wrapper">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-80 p-4" style="background-image: url({{ $ad->main_image }})">
                    <div class="flex justify-end">
                        <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="p-4 py-5">
                    <div class="flex justify-between">
                        <div class="text-indigo-500 text-base font-semibold">{{ $ad->city }}</div>
                    </div>
                    <h2 class="font-bold text-2xl">{{ $ad->dog_name }}</h2>
                </div>
                <div class="flex p-4 border-t border-gray-200 text-gray-700">
                    <div class="flex-1 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mr-3" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                            <line x1="16" y1="3" x2="16" y2="7"></line>
                            <line x1="8" y1="3" x2="8" y2="7"></line>
                            <line x1="4" y1="11" x2="20" y2="11"></line>
                            <line x1="11" y1="15" x2="12" y2="15"></line>
                            <line x1="12" y1="15" x2="12" y2="18"></line>
                        </svg>
                        <p><span class="text-gray-900 font-bold"></span> {{ $ad->normalized_dog_age }}</p>
                    </div>
                    <x-dog-size :size="rand(1,5)"></x-dog-size>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="hidden">
        {{ $ads->links() }}
    </div>
    <div class="page-load-status">
        <p class="infinite-scroll-request">Loading...</p>
        <p class="infinite-scroll-last">End of content</p>
        <p class="infinite-scroll-error">No more pages to load</p>
    </div>
</x-app-layout>
