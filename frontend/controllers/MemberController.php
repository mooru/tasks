<?php

namespace frontend\controllers;
use Yii;
use yiiwebController;
use frontend\models\Member;

class MemberController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $members = 'All ways and all days';
        return $this->render('index', ['members' => $members]);
    }

    public function actionMembers()
{
    $model = new frontend\models\Member();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('members', [
        'model' => $model,
    ]);
}

}


