<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class input extends Component
{
    public $key;
    public $label;
    public $type;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $key, $label, $type = null)
    {
        $this->key = $key;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
