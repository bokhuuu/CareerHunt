<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 * 
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 * 
 */
function loadPartial($name)
{
    $partialPath =  basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '{$name}' not found!";
    }
}
