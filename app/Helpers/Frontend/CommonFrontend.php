<?php

if (!function_exists('getFrontendPagination')) {
    function getFrontendPagination($perPage = '')
    {
        $perPage = empty($perPage) ? getConfig('pagination.frontend', 20) : $perPage;
        return $perPage;
    }
}

if (!function_exists('frontendRouter')) {
    /**
     * @param $routeName
     * @param array $params
     * @return mixed
     */
    function frontendRouter($routeName, $params = [])
    {
        return route(getConstant('FRONTEND_ROUTE_NAME_PREFIX') . '.' . $routeName, $params);
    }
}
