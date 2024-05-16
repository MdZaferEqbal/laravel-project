<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public $id;
    public $label;
    public $type;
    public $name;
    public $value = "";
    public $info = "";
    public $required = FALSE;
    public $minlength = NULL;
    public $maxlength = NULL;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $label, $type, $name, $value = null, $info = null, $required = FALSE, $minlength = NULL, $maxlength = NULL )
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        if(isset($value)) {
            $this->value = $value;
        }
        if(isset($info)) {
            $this->info = $info;
        }
        if(isset($required)) {
            $this->required = $required;
        }
        if(isset($minlength)) {
            $this->minlength = $minlength;
        }
        if(isset($maxlength)) {
            $this->maxlength = $maxlength;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
