<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class dates_selector extends Component
{
    public $key;
    public $label;
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $key, $label, $data)
    {
        $this->key = $key;
        $this->label = $label;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.dates-selector');
    }
}
