<?php

namespace frontend\controllers;
use frontend\models\Country;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$countries = Country::find()->all();
        return $this->render('index', ['countries'=> $countries]);
    }

}
