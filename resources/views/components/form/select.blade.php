<!-- He who is contented is rich. - Laozi -->
<div class="mb-3">
    <label for="{{ $key }}" class="form-label">{{ __( $label ) }}</label>
    <select class="form-select select-single" wire:model.defer="{{ $key }}">
        @foreach ( $data as $item)
            <option value="{{ $item->{$id} }}"
                @if ( $selected->{$id} == $item->{$id} )
                    selected
                @endif
            >
                @if ( is_array( $name ) )
                    @foreach ( $name as $piece )
                        {{ $item[ $piece ] . " " }}
                    @endforeach
                @else
                    {{ $item[ $name ] }}
                @endif

            </option>
        @endforeach
    </select>
    <x-jet-input-error for="{{ $key }}" class="mt-2" />
</div>

