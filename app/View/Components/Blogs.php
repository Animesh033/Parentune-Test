<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Blogs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $blogs;

    public function __construct($blogs=null)
    {
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.blogs');
    }
}
