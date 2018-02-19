<?php

namespace Acl;

class Api {

    public $CI;
    /**
     * Api constructor.
     */
    public function __construct()
    {
        log_message('info', 'Api is loaded now.');
    }

    public function api($api)
    {
        switch ($api){
            case 'test':
                return json_encode(array(
                    'status' => 'ok',
                    'message' => 'Wpisano poprawny warunek'
                ));
                break;
            default:
                return json_encode(array(
                    'status' => 'error',
                    'message' => 'Nie podano warunku lub jest niepoprawny.'
                ));
                break;

        }


    }
}