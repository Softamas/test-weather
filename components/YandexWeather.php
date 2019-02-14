<?php

namespace app\components;

use Yii;

/**
 * Class YandexWeather
 * Класс для работы с API Яндекс.Погода
 * @package app\components
 */
class YandexWeather extends \yii\httpclient\Client
{
    /**
     * Базовый URL API погоды (без параметров)
     * @var string
     */
    public $baseUrl = 'https://api.weather.yandex.ru/v1/informers';

    /**
     * Локаль (региональные настройки)
     * @var string
     */
    public $lang = 'ru_RU';

    /**
     * Получает данные через API Яндекс.Погода.
     * Автоматически конвертирует JSON в ассоциативный массив
     *
     * @param $lat - широта
     * @param $lon - долгота
     * @return array массив с данными погоды
     * @throws \yii\httpclient\Exception
     */
    public function getWeather ($lat, $lon)
    {
        $apiKey = Yii::$app->params['yandexApiKey'];

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