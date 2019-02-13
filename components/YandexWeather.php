<?php

namespace app\components;

//use yii\httpclient\Client;

class YandexWeather extends \yii\httpclient\Client
{
    public $baseUrl = 'https://api.weather.yandex.ru/v1/informers';
    public $lang = 'ru_RU';

    public function getWeather ($lat, $lon)
    {
        $apiKey = '60f7cadb-cd5f-4711-a7b6-de405b8a9b02';
        //$apiKey = '60f7cadb-cd5f-4711-a7b6-de405';


        $response = $this->get ('/', [
            'lat' => $lat,
            'lon' => $lon,
            'lang' => $this->lang
        ], ['X-Yandex-API-Key' => $apiKey])->send ();

        if ($response->isOk) {
            return $response->getData ();
        }

        return [];
    }

}