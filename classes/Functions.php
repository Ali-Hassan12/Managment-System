<?php

class Functions
{
    public function redirect(string $filename)
    {
        header("location:${filename}");
    }

    public function formatArray(array $arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    public function loadComponent(string $component_name)
    {
        include "./components/${component_name}.php";
    }
}
