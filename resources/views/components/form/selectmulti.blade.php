<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
<div class="mb-3">
    <label for="{{ $key }}" class="form-label">{{ __( $label ) }}</label>
    <select class="form-select select-multiple" wire:model.defer="{{ $key }}" multiple>
        @foreach ( $data as $item)
            <option value="{{ $item->{$id} }}"
                @foreach ($selected as $select)
                    @if ( $select->{$id} == $item->{$id} )
                        selected
                    @endif
                @endforeach
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
