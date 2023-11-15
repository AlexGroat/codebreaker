<div class="my-8 flex flex-col items-center gap-10">
    <form class="justify-center" action="">
        <textarea wire:model.live="message" name="" cols="30" rows="10"
                  class="bg-white/10
        text-white py-2 px-3 rounded"></textarea>
    </form>

    <div class="text-white text-center flex flex-row gap-x-[35px]">
        @foreach(explode(' ', $message) as $word)
            <div class="word">
                @foreach(str_split($word) as $character)
                    <span class="material-symbols-outlined character">{{
            $this->letters[strtolower($character)] ?? $character
            }}</span>
                @endforeach
            </div>
        @endforeach
    </div>

    <x-legend :letters="$this->letters" />
</div>
