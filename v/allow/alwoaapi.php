<?php
require_once __DIR__ . '/../../m/amal_ha.PHP';

class qw extends amal_ha
{
    public function __construct()
    {
        parent::__construct();
        echo ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['vaziyat'] == 'save') ?  $this->update('post', $_POST['id'], 4, 1) :  $this->dell('post', $_POST['id']);
    }
}
$R = new qw();
