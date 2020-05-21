<?php
/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 5/20/20
 * Time: 11:48 PM
 */

namespace App;


class Get_api_curs
{

    public function swow_curs(){

        $curs = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
        $curs = json_decode($curs,true);

        foreach ($curs as $curss){
            if($curss['ccy'] == 'BTC'){
                continue;
            }

            echo  $curss['ccy'] . ' - buy ' . $curss['buy'] . ', sale ' . $curss['sale'] . '<br>';
        }


    }
}