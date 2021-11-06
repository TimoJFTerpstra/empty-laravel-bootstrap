<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
<div class="mb-3">
    <label for="{{ $key }}" class="form-label">{{ __( $label ) }}</label>
    <input type="{{ $type != null ? $type : "text" }}" class="form-control" id="{{ $key }}" wire:model.defer="{{ $key }}" >
    <x-jet-input-error for="{{ $key }}" class="mt-2" />
</div>
