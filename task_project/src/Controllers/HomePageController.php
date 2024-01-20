<?php

declare(strict_types=1);

namespace Mindaugas\TaskProject\Controllers;

Use Smarty;

class HomePageController
{
    public function __construct(private Smarty $smarty)
    {

    }
    public function index()
    {
    $this->smarty->display('./src/views/homepage.tpl');
    }
}