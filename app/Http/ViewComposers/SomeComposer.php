<?php


use Illuminate\Contracts\View\View;

class SomeComposer
{
    public function compose(View $view)
    {
        $view->with('recipes', '$recipes');
    }
}
