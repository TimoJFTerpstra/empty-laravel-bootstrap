<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
<div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
    <!-- Profile Photo File Input -->
    <input type="file" class="hidden"
                wire:model="{{ $key }}"
                x-ref="{{ $key }}"
                x-on:change="
                        photoName = $refs.{{ $key }}.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.{{ $key }}.files[0]);
                " />

    <x-jet-label for="{{ $key }}" value="{{ __('Photo') }}" class="hidden" />

    <div class="row">
        <div class="offset-1 col-10 col-md-5 d-flex justify-content-center align-items-center">
            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A New Photo') }}
            </x-jet-secondary-button>
        </div>
        <div class="offset-1 col-10 offset-md-0 col-md-5 d-flex justify-content-center align-items-center border rounded mt-3">
            <!-- Current Profile Photo -->
            <img x-show="! photoPreview" src="{{ asset($source) }}" alt="{{ $key }}" class="image-preview">

            <!-- New Profile Photo Preview -->
            <div class="image-preview new" x-show="photoPreview"
                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
            </div>
        </div>
    </div>

    <x-jet-input-error for="photo" class="mt-2" />
</div>
