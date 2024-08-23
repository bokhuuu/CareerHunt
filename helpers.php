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
/**
 * 
 * Inspect a value and die
 * 
 * @param mixed
 * @return void
 * 
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
