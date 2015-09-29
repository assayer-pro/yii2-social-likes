<?php
/**
 * SocialAssetJs Class
 *
 * @author Serge Larin <serge.larin@gmail.com>
 * @link https://github.com/amnah/yii2-user
 * @copyright 2015 Assayer Pro Company
 * @license http://opensource.org/licenses/LGPL-3.0
 */

namespace assayerpro\SocialLikes\SocialLikes;

/**
 * SocialAssetJs Class
 *
 * @package assayerpro\SocialLikes\SocialLikes
 */
class SocialAssetJs extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/social-likes';
    public $baseUrl = '@web';
    public $js = [
        'social-likes.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
