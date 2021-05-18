<?php


class Page
{
    public $template;
    public $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function render(){
        include_once $this->template;
    }
}