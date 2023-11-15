@props(['letters'])

<div class="flex flex-wrap gap-x-2 items mb-4">
    @foreach($letters as $letter => $symbol)
        <div class="flex flex-col items-center p-1 border border-white/30">
            <span class="capitalize mb-2 font-bold">{{ $letter }}</span>
            <span class="material-symbols-outlined character">{{ $symbol }}</span>
        </div>
    @endforeach
</div>
