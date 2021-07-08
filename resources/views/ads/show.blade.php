@push('scripts')
    <script src="{{ mix('js/announce/show.js') }}" type="text/javascript"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/announce/show.css') }}">
@endpush
<x-app-layout>
    <div class="max-w-7xl mx-auto lg:px-8 px-6 mt-2">
        <div class="bg-white rounded-xl p-4 shadow-xl">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-8">
                    <h1 class="text-2xl mb-3">{{ $ad->dog_name }}</h1>
                    {!! nl2br($ad->description) !!}
                </div>
                <div class="col-span-4">
                    <img src="{{ $ad->main_image }}" class="rounded-2xl mb-2">
                    <div class="text-indigo-500 text-lg font-semibold">{{ $ad->region->name }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
