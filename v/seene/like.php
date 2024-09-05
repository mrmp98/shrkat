<?php
require_once __DIR__ . '/../../m/amal_ha.PHP';

class qw extends amal_ha
{
    public function __construct()
    {
        parent::__construct();




        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['vaz'] == 'true') {

                $this->update('post', $_POST['id'], 5, $this->selekt(7, $_POST['id'])[0]['count_like'] + 1);
            } else {

                $this->update('post', $_POST['id'], 5, $this->selekt(7, $_POST['id'])[0]['count_like'] - 1);
            }
        }
    }
}
$R = new qw();
