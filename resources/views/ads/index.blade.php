@push('scripts')
    <script src="{{ mix('js/announce/index.js') }}" type="text/javascript"></script>
@endpush
<x-app-layout>
    <div class="max-w-5xl mx-auto mt-4 flex bg-white rounded-full shadow-xl items-center pr-2">
        <select class="flex-auto rounded-full border-0 py-4 hover:bg-gray-100 hover:border-0 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-0 focus:bg-gray-100">
            <option value="" disabled selected>Regione</option>
            @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </select>
        <div class="border-r h-6"></div>
        <input type="text" class="flex-auto rounded-full border-0 py-4 hover:bg-gray-100 hover:border-0 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-0 focus:bg-gray-100" placeholder="Razza">
        <div class="border-r h-6"></div>
        <select class="flex-auto rounded-full border-0 py-4 hover:bg-gray-100 hover:border-0 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-0 focus:bg-gray-100">
            <option value="" disabled selected>Sesso</option>
            <option value="m">Maschio</option>
            <option value="f">Femmina</option>
        </select>
        <div class="border-r h-6"></div>
        <input type="text" class="flex-auto rounded-full border-0 py-4 hover:bg-gray-100 hover:border-0 transition-colors duration-300 ease-in-out focus:outline-none focus:ring-0 focus:bg-gray-100" placeholder="Età">
        <button type="submit" class="bg-purple-500 rounded-full text-white p-2 w-12 h-12 flex items-center justify-center hover:bg-purple-400">
            <i data-feather="search"></i>
        </button>
    </div>
    <div class="grid grid-cols-4 gap-4 max-w-7xl mx-auto lg:px-8 px-6 mt-8 ads-container">
        @foreach ($ads as $ad)
        <a href="{{ route('ads.show', ['annunci' => $ad->slug]) }}" class="ad-card-wrapper">
        <div class="cursor-pointer transform duration-500 hover:-translate-y-1">
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
                        <div class="text-indigo-500 text-base font-semibold">{{ $ad->region->name }}</div>
                    </div>
                    <h2 class="font-bold text-2xl inline-flex items-center">
                        {{ $ad->dog_name }}
                        @if($ad->dog_gender === 'm')
                        <svg class="h-6 w-6 ml-2 text-blue-500" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9,9C10.29,9 11.5,9.41 12.47,10.11L17.58,5H13V3H21V11H19V6.41L13.89,11.5C14.59,12.5 15,13.7 15,15A6,6 0 0,1 9,21A6,6 0 0,1 3,15A6,6 0 0,1 9,9M9,11A4,4 0 0,0 5,15A4,4 0 0,0 9,19A4,4 0 0,0 13,15A4,4 0 0,0 9,11Z" />
                        </svg>
                        @endif
                    </h2>
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
        </a>
        @endforeach
    </div>
    <div class="hidden">
        {{ $ads->links() }}
    </div>
</x-app-layout>
