<?php
/**
 * SocialAssetBirman Class
 *
 * @author Serge Larin <serge.larin@gmail.com>
 * @link https://github.com/amnah/yii2-user
 * @copyright 2015 Assayer Pro Company
 * @license http://opensource.org/licenses/LGPL-3.0
 */

namespace assayerpro\SocialLikes;
/**
 * SocialAssetBirman AssetBundle for SocialLikes widget skin
 *
 * @package assayerpro\SocialLikes\SocialLikes
 */
class SocialAssetBirman extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/social-likes/dist';
    public $baseUrl = '@web';
    public $css = [
        'social-likes_birman.css',
    ];
    public $depends = [
       'assayerpro\SocialLikes\SocialAssetJs',
    ];
}
