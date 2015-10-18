<?php

/**
 * Social Likes code generation widget
 *
 * Beautiful share buttons with counters for popular social networks:
 * Facebook, Twitter, Google+, Pinterest, Vkontakte, etc. Uses jQuery.
 * Based on http://sapegin.github.io/social-likes/ru/
 *
 * @copyright © Serge Larin <serge.larin@gmail.com> 2014
 * @license http://opensource.org/licenses/MIT MIT
 *
 */

/**
 * Social Likes widget class.
 *
 * @author Serge Larin
 */
namespace assayerpro\SocialLikes;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * SocialLikes widget
 *
 * @package assayerpro\SocialLikes\SocialLikes
 */
class SocialLikes extends Widget
{
    /**
     * @var string The skin (classic, flat, birman). By default, classic.
     */
    public $skin = 'classic';

    /**
     * @var string look (horizontal, vertical, single). By default, horizontal
     */
    public $look = 'horizontal';
    /**
     * @var string single title
     */
    public $singleTitle = 'Поделиться';
    /**
     * @var boolean show counters. By default, true
     */
    public $showCounters = true;
    /**
     * @var string URL. When buttons used on different page
     */
    public $url = '';
    /**
     * @var string Title. When differs from current page's title
     */
    public $title = '';

    /**
     * @var boolean. Icons only.
     */
    public $iconsOnly = false;
    /**
     * @var string.
     */
    public $twitterVia = '';

    /**
     * @var string.
     */
    public $twitterRelated = '';

    /**
     * @var string.
     */
    public $pinterestMedia = '';
    /**
     * @var boolean. Show counters even when number is 0. Default: false;
     */
    public $zeroes = false;
    /**
     * @var hash. Buttons configuration
     */

    public $buttons = [
        'facebook' => [
            'title' => 'Поделиться ссылкой на Фейсбуке',
            'name' => 'Facebook',
            'show' => true,
        ],
        'twitter' => [
            'title' => 'Поделиться ссылкой в Твиттере',
            'name' => 'Twitter',
            'show' => true,
        ],
        'mailru' => [
            'title' => 'Поделиться ссылкой в Моём мире',
            'name' => 'Мой мир',
            'show' => true,
        ],
        'vkontakte' => [
            'title' => 'Поделиться ссылкой во Вконтакте',
            'name' => 'Вконтакте',
            'show' => true,
        ],
        'odnoklassniki' => [
            'title' => 'Поделиться ссылкой в Одноклассниках',
            'name' => 'Одноклассники',
            'show' => true,
        ],
        'plusone' => [
            'title' => 'Поделиться ссылкой в Гугл-плюсе',
            'name' => 'Google+',
            'show' => true,
        ],
        'pinterest' => [
            'title' => 'Поделиться ссылкой на Пинтересте',
            'name' => 'Pinterest',
            'show' => true,
        ],
    ];

    /**
     * skinAssets
     *
     * @var hash. skinAssets classes
     * @access public
     */
    public $skinAssets = [
        'classic' => 'assayerpro\SocialLikes\SocialAssetClassic',
        'flat' => 'assayerpro\SocialLikes\SocialAssetFlat',
        'birman' => 'assayerpro\SocialLikes\SocialAssetBirman',
    ];

    /**
     * Initializes the widget.
     */
    public function init ()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $htmlClass = 'social-likes' .
            ($this->look == 'horizontal' || empty($this->look)?'':' social-likes_'.$this->look) .
            ($this->iconsOnly?' social-likes_notext':'');

        $options = array_filter([
            'class' => $htmlClass,
            'data-zeroes' => $this->zeroes?'yes':'no',
            'data-title' => $this->title,
            'data-counters' => $this->showCounters?'yes':'no',
            'data-url' => $this->url,
            'data-single-title' => $this->look == 'single'?$this->singleTitle:'',
        ]);

        $asset = $this->skinAssets[$this->skin];
        $asset::register($this->getView());

        return Html::tag('div', $this->renderItems(), $options);
    }

    /**
     * Renders widget items.
     */
    public function renderItems()
    {
        $items = '';
        foreach ($this->buttons as $class => $button) {
            if ($button['show']) {
               $items .= $this->renderItem($button,$class) ;
            }
        }
        return $items;
    }

    /**
     * Renders a widget's item.
     * @param string|array $item the item to render.
     * @return string the rendering result.
     * @throws InvalidConfigException
     */
    public function renderItem($item, $class)
    {
        $options = [
            'class' => $class,
            'title' => $item['title']
        ];

        $name = $this->iconsOnly?'':$item['name'];
        return Html::tag('div', $name, $options);
    }
}

