<?php

/**
 * Get config project in config/config.php
 */

use Illuminate\Support\Arr;
use App\Http\Supports\Url as UrlSupports;

if (!function_exists('getConfig')) {
    function getConfig($key, $default = '')
    {
        return config('config.' . $key, $default);
    }
}

/**
 * Get constant project in config/constant.php
 */
if (!function_exists('getConstant')) {
    function getConstant($key, $default = '')
    {
        return config('constant.' . $key, $default);
    }
}

if (!function_exists('transMessage')) {
    function transMessage($key, $default = '')
    {
        return empty(trans('messages.' . $key)) ? $default : trans('messages.' . $key);
    }
}

if (!function_exists('transTitle')) {
    function transTitle($key, $default = '')
    {
        return empty(trans('titles.' . $key)) ? $default : trans('titles.' . $key);
    }
}

// password
if (!function_exists('genPassword')) {

    function genPassword($value)
    {
        if ($value && Hash::needsRehash($value)) {
            return Hash::make($value);
        }
        return $value;
    }
}

if (!function_exists('delFlagOn')) {
    function delFlagOn()
    {
        return getConfig('del_flag.active', 0);
    }
}

if (!function_exists('delFlagOff')) {
    function delFlagOff()
    {
        return getConfig('del_flag.disable', 1);
    }
}

if (!function_exists('transMessage')) {
    function transMessage($key, $default = '')
    {
        return empty(trans('messages.' . $key)) ? $default : trans('messages.' . $key);
    }
}

/* Redirect */
if (!function_exists('backSystemError')) {
    function backSystemError($msg = '')
    {
        $msg = empty($msg) ? transMessage('system_error') : $msg;
        return redirect()->back()->with('notification_error', $msg);
    }
}

if (!function_exists('backSuccess')) {
    function backSuccess($msg = '')
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->back()->with('notification_error', $msg);
    }
}

if (!function_exists('backRouteSuccess')) {
    function backRouteSuccess($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_success', $msg);
    }
}

if (!function_exists('backRouteError')) {
    function backRouteError($routeName = '', $msg = '', $params = [])
    {
        $msg = empty($msg) ? transMessage('success') : $msg;
        return redirect()->route($routeName, $params)->with('notification_error', $msg);
    }
}
/* End redirect */

if (!function_exists('arrayGet')) {
    function arrayGet($array, $key, $default = null)
    {
        return Arr::get($array, $key, $default);
    }
}

if (!function_exists('getBackUrl')) {

    function getBackUrl()
    {
        return UrlSupports::getBackUrl();
    }
}

if (!function_exists('addBackUrl')) {

    function addBackUrl($routeName, $params = [])
    {
        return UrlSupports::addbackurl($routeName, $params);
    }
}

if (!function_exists('viewBackend')) {
    function viewBackend($path, $params = [])
    {
        return view(getConstant('BACKEND_AREA') . '.' . ltrim($path, '.'), $params);
    }
}

if (!function_exists('viewFrontend')) {
    function viewFrontend($path, $params = [])
    {
        return view(getConstant('FRONTEND_AREA') . '.' . ltrim($path, '.'), $params);
    }
}

if (!function_exists('statusOn')) {
    function statusOn()
    {
        return getConfig('status.active', 0);
    }
}

if (!function_exists('statusOff')) {
    function statusOff()
    {
        return getConfig('status.disable', 1);
    }
}

if (!function_exists('statusOnAlias')) {
    function statusOnAlias()
    {
        return getConfig('status_alias.active');
    }
}

if (!function_exists('statusOffAlias')) {
    function statusOffAlias()
    {
        return getConfig('status_alias.disable');
    }
}

if (!function_exists('genderBoy')) {
    function genderBoy()
    {
        return getConfig('gender.boy', 1);
    }
}

if (!function_exists('genderGirl')) {
    function genderGirl()
    {
        return getConfig('gender.girl', 0);
    }
}

if (!function_exists('genderBoyAlias')) {
    function genderBoyAlias()
    {
        return getConfig('gender_alias.boy');
    }
}

if (!function_exists('genderGirlAlias')) {
    function genderGirlAlias()
    {
        return getConfig('gender_alias.girl');
    }
}

if (!function_exists('toSql')) {

    function toSql($query)
    {
        return sql_binding($query->toSql(), $query->getBindings());
    }
}

if (!function_exists('sql_binding')) {

    function sql_binding($sql, $bindings)
    {
        $boundSql = str_replace(['%', '?'], ['%%', '%s'], $sql);
        foreach ($bindings as &$binding) {
            if ($binding instanceof \DateTime) {
                $binding = $binding->format('\'Y-m-d H:i:s\'');
            } elseif (is_string($binding)) {
                $binding = "'$binding'";
            }
        }
        $boundSql = vsprintf($boundSql, $bindings);
        return $boundSql;
    }
}
