<?php

if (!function_exists('getBackendPagination')) {
    function getBackendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.backend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('backendRouter')) {
    /**
     * @param $routeName
     * @param array $params
     * @return mixed
     */
    function backendRouter($routeName, $params = [])
    {
        return route( getConstant('BACKEND_ROUTE_NAME_PREFIX') .'.' . $routeName, $params);
    }
}
