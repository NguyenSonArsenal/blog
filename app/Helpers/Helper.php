<?php

// Functions for THIS project
function getStatus($entity)
{
    $isActive = $entity->isActive() ? "btn-success" : "btn-danger";
    $html = '<button type="button" class="btn btn-xs ' . $isActive . '">' . $entity->getStatusAlias() . '</button>';
    return $html;
}

function getModule()
{
    $controller = strtolower(trim(class_basename(\Route::current()->controller)));
    $module = substr($controller, 0, - strlen('controller'));

    return $module;
}

function assetsFrontend($path = '')
{
    $http = isset($_SERVER['HTTPS']) ? "https://" : "http://";
    echo $http . $_SERVER['HTTP_HOST'] . "/frontend/" . ltrim($path, '/');
}

function getMenuActive($item)
{
    $requestUri = $_SERVER['REQUEST_URI'];

    if ($requestUri == '/') {
        $requestUri = 'home';
    }

    if (strContain($requestUri, 'v-blog')) {
        $requestUri = 'post';
    }

    echo strContain($requestUri, $item) ? "active" : "";
}

function strContain($str, $needle)
{
    return strpos($str, $needle) !== false;
}
