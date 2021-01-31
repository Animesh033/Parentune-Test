<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tab extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $blogs;

    public $experts;


    public function __construct($blogs = null, $experts = null)
    {
        $this->experts = $experts;
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tab');
    }
}
