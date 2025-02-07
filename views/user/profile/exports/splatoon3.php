<?php

declare(strict_types=1);

use app\models\User;
use yii\helpers\Html;
use yii\web\View;

/**
 * @var User $user
 * @var View $this
 */

echo Html::tag(
  'h2',
  vsprintf('%s (%s)', [
    Html::encode(Yii::t('app', 'Export')),
    Html::encode(Yii::t('app', 'Splatoon 3')),
  ]),
) . "\n";

echo Html::tag(
  'p',
  implode('', [
    $this->render('splatoon3/statink-json', compact('user')),
  ]),
) . "\n";
