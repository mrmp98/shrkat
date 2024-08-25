<?php
require_once __DIR__ .  '/../vendor/autoload.php';
require_once __DIR__ . '/../m/amal_ha.PHP';
class qw  extends amal_ha
{
    public $faker;
    public function __construct()
    {
        parent::__construct();
        $this->faker = Faker\Factory::create();
    }
    public function name()
    {
        return $this->faker->name;
    }
    public function adres()
    {
        return $this->faker->address;
    }
    public function number()
    {
        return  $this->faker->birthNumber;
    }
    public function email()
    {
        return   $this->faker->email;
    }
    public function password()
    {
        return $this->faker->password;
    }
    public function phone()
    {
        return '09' .  rand(100000000, 999999999);
    }
    public function insert()
    {
        for ($i = 0; $i <= 1000; $i++) {
            // $this->add_to_abot($table_name, $name, $password, $email, $phon, $semat) ;
        }
    }
}
$qw = new qw();
