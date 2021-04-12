<div>
    <form action="#" wire:submit="store()">
        <div class="mb-3">
            <label for="body" class="sr-only">Post body</label>
            <textarea wire:model.defer="body" name="body" id="body" cols="30" rows="3" placeholder="Share something..."
            class="border-2 w-full border-gray-200 rounded-lg @error('body') border-pink-500 @enderror"></textarea>

            @error('body')
                <span class="text-pink-500 text-sm font-semibold ">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <button type="submit" class="h-10 px-4 text-center text-white bg-indigo-500 font-medium
        rounded-lg font-semibold">Post it</button>
    </form>
</div>
