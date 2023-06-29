<?php

namespace Controller;

class BaseController
{
    public function render($path): bool|string
    {
        ob_start();
        include($path);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}