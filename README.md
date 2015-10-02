yii2-social-likes
=================
[![PHP version](https://badge.fury.io/ph/assayer-pro%2Fyii2-social-likes.svg)](http://badge.fury.io/ph/assayer-pro%2Fyii2-social-likes)

Yii2 widget for Social Likes: share buttons with counters for popular social networks.
Beautiful share buttons with counters for popular social networks: Facebook, Twitter, Google+, Pinterest, Vkontakte, etc. Uses jQuery.

Yii2 wrapper for http://sapegin.github.io/social-likes/

Usage
-----
```php
use assayerpro\SocialLikes\SocialLikes;
...
echo SocialLikes::widget([
  'skin' => 'birman',
  'buttons' => [
    'facebook' => [
      'title' => 'Share link on Facebook',
      'name' => 'Facebook',
      'show' => true,
    ],
    'twitter' => [
      'title' => 'Share link on Twitter',
      'name' => 'Twitter',
      'show' => true,
    ],
    'plusone' => [
      'title' => 'Share link on Google+',
      'name' => 'Google+',
      'show' => true,
  ],
]);
```


