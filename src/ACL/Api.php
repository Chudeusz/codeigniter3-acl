<?php

namespace Acl;

class Api {

    public $CI;
    /**
     * ACLModel constructor.
     */
    public function __construct()
    {
        log_message('info', 'ACL model is loaded now.');
    }

    public function api($api)
    {
        switch ($api){
            case 'test':
                return json_encode(array(
                    'status' => 'ok',
                    'message' => 'Test ok'
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