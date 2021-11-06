<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class select extends Component
{
    public $key;
    public $label;
    public $data;
    public $selected;
    public $id;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $key, $label, $data, $selected, $id = "id", $name = "name")
    {
        $this->key = $key;
        $this->label = $label;
        $this->data = $data;
        $this->selected = $selected;
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select', [
            "data" => $this->data,
        ]);
    }
}
