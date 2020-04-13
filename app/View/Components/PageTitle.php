<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageTitle extends Component
{
    /**
     * First Line.
     *
     * @var string
     */
    public $title;

    /**
     * Second Line.
     *
     * @var string
     */
    public $sub;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $sub)
    {
        $this->title = $title;
        $this->sub = $sub;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.page-title');
    }
}
