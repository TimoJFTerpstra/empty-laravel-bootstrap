<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class uploadimage extends Component
{
    public $key;
    public $source;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $key, $source)
    {
        $this->key = $key;
        $this->source = $source;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.uploadimage');
    }
}
