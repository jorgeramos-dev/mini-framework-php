<?php

$this->get('/', function () {
    echo 'HOME!!!!!';
});


$this->get('/categoria', 'TesteController@teste');
