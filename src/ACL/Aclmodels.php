<?php

namespace Acl;

class Aclmodels {

    public $CI;
    public $kamil;
    /**
     * ACLModel constructor.
     */
    public function __construct()
    {
        log_message('info', 'ACL model is loaded now.');
    }

    public function test()
    {
        return json_encode(array(
            'status' => 'ok',
            'message' => 'Test ok'
        ));
    }
}