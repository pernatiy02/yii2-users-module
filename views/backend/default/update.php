<?php

/**
 * @var yii\base\View $this View
 * @var vova07\users\models\User $user User
 * @var vova07\users\models\User $profile Profile
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use vova07\control\Widget;

$this->title = Yii::t('users', 'BACKEND_UPDATE_TITLE');

echo Widget::widget([
    'title' => $this->title,
    'url' => ['update', 'id' => $user['id']],
    'modelId' => $user['id'],
    'items' => [
        'create' => [
            'visible' => true
        ],
        'cancel' => [
            'visible' => true
        ]
    ]
]);

echo $this->render('_form', [
    'user' => $user,
    'profile' => $profile,
    'roleArray' => $roleArray,
    'statusArray' => $statusArray
]);