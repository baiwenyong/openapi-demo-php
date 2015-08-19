<?php

namespace api;

class User
{
    public static function getUserInfo($accessToken, $code)
    {
        $response = \util\Http::get("/user/getuserinfo", 
            array("access_token" => $accessToken, "code" => $code));
        return json_encode($response);
    }
}