<?php

use Illuminate\Http\Request;

if(! function_exists("check_empty_request")){
    function check_empty_request($requestData){
        foreach ($requestData as $data) {
            if(empty($data) || is_null($data)) return false;
        }
        return true;
    }
}

if(!function_exists("request_to_array")){
    function request_to_array(Request $request){
        $arr = [];
        unset($request["_token"]);
        foreach ($request as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }
}
?>