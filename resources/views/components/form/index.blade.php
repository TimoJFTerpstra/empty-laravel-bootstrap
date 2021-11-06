<!-- Be present above all else. - Naval Ravikant -->
<div class="container">
    <div class="card mt-3">
        @if ( isset( $title ) )
            <div class="card-header">
                <h3>{{ $title }}</h3>
                <p>{{ $desc ?? null }}</p>
            </div>
        @endif
        <div class="card-body">
            <form wire:submit.prevent="submit">

                {{ $form }}

                <button type="submit" class="btn btn-primary">{{ __( 'submit' ) }}</button>
            </form>
        </div>
    </div>
</div>
