<?php 
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
class Allowing extends amal_ha
 {
    public function __construct()
    {
        parent::__construct(); 
    }
    public function dide_shodan()
    {
        print_r(
            "<tr>
            <th>
    <i style='border: 5px solid red ;  ' class='bi bi-x'></i>
    <i style='border: 5px solid red ; margin-left: 30px;' class='bi bi-check-lg'></i>
            </th>
            <th>متنش</th>
            <th>ممشاهده</th>
            <th>تایتلش</th>
            <th>نویسنده</th>
            <th>تاریخ انتشار</th>
        </tr>"
        ) ; 
    }

}