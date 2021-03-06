<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class color extends Component
{
    public $key;
    public $label;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $key, $label, $value)
    {
        $this->key = $key;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.color');
    }
}
