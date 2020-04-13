<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonWeiterlesen extends Component
{
    /**
     * The Route.
     *
     * @var string
     */
    public $route;

    /**
     * Create a new component instance.
     *
     * @param string $route
     * @return void
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button-weiterlesen');
    }
}
