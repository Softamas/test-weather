<?php

namespace app\controllers;

use app\models\City;
use Yii;

class CityController extends \yii\web\Controller
{
    /**
     * @return string
     */
    public function actionIndex ()
    {
        $post = Yii::$app->request->post ('City');
        $cityID = isset($post['id']) ? $post['id'] : 1;
        $city = City::findOne ($cityID);
        return $this->render ('index', [
            'model' => $city
        ]);
    }

}
