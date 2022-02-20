<?php

use Illuminate\Support\Facades\Log;

if(! function_exists("checkEmptyRequest")){
    function check_empty_request($requestData){
        Log::debug($requestData);
        foreach ($requestData as $data) {
            if(empty($data) || is_null($data)) return false;
        }
        return true;
    }
}
?>