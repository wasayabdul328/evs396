<?php

namespace App\Helpers;


class ApiService{


    public function sendApiRequest($method, $segment , $params = [], $debug = false){

        $url = env('API_URL') . $segment;

        $curl = curl_init();
        $options = array();

        switch($method){

            case 'POST':
                $options = array(
                    CURLOPT_URL => $url,
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => $params,
                    CURLOPT_RETURNTRANSFER => !empty($debug) ? 0 : 1
                );
            break;

        }

        curl_setopt_array($curl, $options);
        $result = curl_exec($curl);

        curl_close($curl);


        return $result;

    }


}


