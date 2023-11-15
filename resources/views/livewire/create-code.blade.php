<div class="my-8 flex flex-col items-center gap-10">
    <form class="justify-center print:hidden" action="">
        <textarea wire:model.live="message" name="" cols="30" rows="10"
                  class="bg-white/10
        text-white py-2 px-3 rounded"></textarea>
    </form>

    <div class="text-center flex flex-row flex-wrap gap-x-[35px] w-full
    gap-y-2">
        @foreach(explode(' ', $message) as $word)
            <div class="inline-flex gap-x-2 word">
                @foreach(str_split($word) as $character)
                    <div>
                        <span class="material-symbols-outlined character">{{
                            $this->letters[strtolower($character)] ?? $character
                        }}
                        </span>

                        <div style="background-color: darkgrey" class="bg-gray-200
                        border-gray-950 w-12
                        h-12">
                        </div>
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>

    <x-legend :letters="$this->letters" />
</div>
