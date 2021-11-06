<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<div class="mb-3">
    <label for="{{ $key }}" class="form-label">{{ __( $label ) }}</label>
    <input type="text" name="{{ $key }}" value="{{ $data }}" class="form-control dateselector" id="{{ $key }}" wire:model.defer="{{ $key }}" >
    <x-jet-input-error for="{{ $key }}" class="mt-2" />
</div>
