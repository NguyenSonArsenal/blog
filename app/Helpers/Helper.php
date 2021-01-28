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