<?php

namespace page;

class info extends \system\resultable
{
    public function index ($get)
    {
        include_lang ("menu");
        include_lang ("info");

        $this->array["menu"] = "info/index";

        return true;
    }
}