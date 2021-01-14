<?php

if (!function_exists('api_token'))
{
    /**
     * 取得當前登入使用者的 API Token
     *
     * @return string
     */
    function api_token()
    {
        $token = '';
        if (Auth::user())
        {
            $token = Auth::user()->api_token;
        }
        return $token;
    }
}
