<div class="mt-12 flex justify-center">
    <form action="">
        <textarea wire:model.live="message" name="" cols="30" rows="10"
                  class="bg-white/10
        text-white py-2 px-3 rounded"></textarea>
    </form>

    <div class="text-white text-center mt-2 flex flex-row gap-x-[35px]">
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
</div>
