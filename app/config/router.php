<?php

$this->get('/', function () {
    echo 'HOME!!!!!';
});

$this->get('/home', function () {
    echo 'Estou aqui na HOME!!!!!';
});

$this->get('/categoria', 'MyController@method');
