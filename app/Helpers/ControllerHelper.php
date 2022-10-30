<?php

use Illuminate\Http\Request;

if(! function_exists("check_empty_request")){
    function empty_request($requestData){
        foreach ($requestData as $data) {
            if(empty($data) || is_null($data)) return true;
        }
        return false;
    }
}

if(!function_exists("request_to_array")){
    function request_to_array(Request $request){
        $arr = [];
        $request = $request->all();
        unset($request["_token"]);
        foreach ($request as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }
}
?>