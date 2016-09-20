<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : SEO
  |--------------------------------------------------------------------------
  |
  | Here you may define all of the blog meta tags and SEO for your
  | application. These will be used for web scraping and open
  | graph tags on sites such as Facebook and Twitter.
  |
  */
  'title'           => 'I Code For',
  'subtitle'        => '.........I Code For..........',
  'description'     => 'Blog',
  'author'          => '凯文',
  'seo'             => 'minimal,blogging,app',

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : Blog Posts
  |--------------------------------------------------------------------------
  |
  | Pretty self-explanatory here. Indicate how many posts you would like
  | to appear on each page. If you are using Disqus, specify the
  | identifier in your .env file.
  |
  */
  'posts_per_page'  => 6,
  'disqus_name' => env('DISQUS_NAME', null),

  /*
  |--------------------------------------------------------------------------
  | Canvas Configuration : Media Uploads
  |--------------------------------------------------------------------------
  |
  | Specify what type of storage you would like for your application. Just
  | as a reminder, your uploads directory MUST be writable by the
  | web server for the uploading to function properly.
  |
  | Supported: "local"
  |
  */
  'uploads'         => [
    'storage'       => 'local',
    'webpath'       => '/uploads/',
  ],

  'trim_width'  => 40,
];
