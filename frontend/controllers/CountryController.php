<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Country;



class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$countries = Country::find()->all();
        return $this->render('index', ['countries'=> $countries]);
    }

    public function actionCreate()
    {
        $model = new Country();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('create', ['model'=> $model]);


    }

}
