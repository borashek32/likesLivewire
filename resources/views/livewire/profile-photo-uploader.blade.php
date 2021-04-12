<div>
    <form action="#" wire:submit.prevent="storePhoto" class="flex flex-col justify-between items-center">
        <img src="@if ($photo) {{ $photo->temporaryUrl() }} @else {{ auth()->user()->profilePhoto() }} @endif"
             alt="{{ auth()->user()->name }}"
        class="w-12 h-12 rounded-full mr-4 mb-3">

        @if($photo)
            <button type="submit" class="w-full text-xs text-indigo-500 block text-center cursor-pointer" style="margin-left: -8px;">
                Confirm
            </button>

            <button wire:click.prevent="$set('photo', null)" class="w-full text-xs text-indigo-500 block text-center cursor-pointer"
                style="margin-left: -8px;">
                Cancel
            </button>
        @else
            <label for="photo" class="w-full text-xs text-indigo-500 block text-center" style="margin-left: -8px;">
                Change
            </label>
        @endif

        @error('photo')
            <span class="font-semibold text-pink-500 text-xs mt-2">
                {{ $message }}
            </span>
        @enderror

        <input wire:model="photo" type="file" name="photo" id="photo" class="sr-only">
    </form>
</div>
