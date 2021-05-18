<?php


class AdminPage extends Page
{
    public function __construct($page)
    {
        $this->template = 'admin_template.php';
        parent::__construct($page);
    }
}