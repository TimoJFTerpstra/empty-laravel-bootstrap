<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<div class="card mt-5 ">
    @isset( $title )
        <div class="card-header bg-primary text-header">
            <h3>{{ $title }}</h3>
            @isset($desc)
                <p>{{ $desc }}</p>
            @endisset
        </div>
    @endisset
    <div class="mt-2 card-body">
        <table class="bootstrap-table">
            <thead>
              <tr>
                {{ $head }}
              </tr>
            </thead>
            <tbody>
                {{ $body }}
            </tbody>
        </table>
    </div>
</div>
