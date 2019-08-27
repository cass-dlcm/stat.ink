<?php
/**
 * @copyright Copyright (C) 2015-2019 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@fetus.jp>
 */

declare(strict_types=1);

namespace app\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@node/@fortawesome/fontawesome-free';
    public $css = [
        'css/all.min.css',
    ];
    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*',
        ],
    ];
}
