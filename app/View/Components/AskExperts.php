<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AskExperts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $experts;

    public function __construct($experts=null)
    {
        $this->experts = $experts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ask-experts');
    }
}
