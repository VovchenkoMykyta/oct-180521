<?php


class FrontPage extends Page
{
   public function __construct($page)
   {
       $this->template = 'front_template.php';
       parent::__construct($page);
   }
}