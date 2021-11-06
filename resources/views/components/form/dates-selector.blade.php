<!-- When there is no desire, all things are at peace. - Laozi -->
<div class="mb-3">
    <label for="{{ $key }}" class="form-label">{{ __( $label ) }}</label>
    <input type="text" name="{{ $key }}" value="{{ $data }}" class="form-control daterange" id="{{ $key }}" wire:model.defer="{{ $key }}" >
    <x-jet-input-error for="{{ $key }}" class="mt-2" />
</div>
