<?php

namespace app\controllers;

use app\components\YandexWeather;
use app\models\City;
use Yii;
use yii\helpers\ArrayHelper;

class CityController extends \yii\web\Controller
{
    /**
     * @return string
     */
    public function actionIndex ()
    {
        $post = Yii::$app->request->post ('City');
        $cityID = isset($post['id']) ? $post['id'] : City::find()->min('id');
        $city = City::findOne ($cityID);

        if ($city->updated < time() - 60*60*2) {
            $api = new YandexWeather();
            $weather = $api->getWeather ($city->latitude , $city->longitude);
            if ($weather) {
                $city->weather = serialize ($weather);
                $city->updated = time();
                $city->save ();
                Yii::$app->session->setFlash('success', "Данные загружены из внешнего сервиса и актуализированы");
            } else {
                Yii::$app->session->setFlash('danger', "Ошибка загрузки данных из внешнего сервиса");
            }
        }

        if (!isset($weather)) $weather = unserialize ($city->weather );

        $cityList = ArrayHelper::map (City::find ()->all (), 'id', 'name');

        return $this->render ('index', [
            'model' => $city,
            'cityList'  => $cityList,
            'weather' => $weather
        ]);
    }

}
