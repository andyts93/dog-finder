@push('scripts')
    <script src="{{ mix('js/announce/show.js') }}" type="text/javascript"></script>
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/announce/show.css') }}">
@endpush
<x-app-layout>
    <div class="max-w-7xl mx-auto lg:px-8 px-6 mt-2">
        <div class="bg-white rounded-xl p-4 shadow-xl">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-8">
                    <div>
                        {!! nl2br($ad->description) !!}
                    </div>
                </div>
                <div class="col-span-4">
{{--                    <img src="https://picsum.photos/1000" class="rounded-2xl">--}}
                    <div id="l-map" class="bg-black h-96 rounded-2xl shadow-md"></div>
                    <div class="text-indigo-500 text-base font-semibold">{{ $ad->city }}</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    document.onload
    renderMap({{ $ad->latitude }}, {{ $ad->longitude }});
</script>
