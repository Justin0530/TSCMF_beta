<?php

class WBaseController extends Controller {


    function __construct()
    {

    }


    public function missingMethod($parameters = array())
    {
        print_r($parameters);
        echo 'asdf';
        exit;
    }

}
