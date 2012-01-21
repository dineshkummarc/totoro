<?php

$config = array(
  'author_name' => 'John Doe',
  'base_url' => empty($_ENV['BATO_ENV']) ? "http://localhost/bato" : "http://your-production-url.com",
  'blog_title' => "My Blog",
  'blog_description' => "This is a brand new Bato Blog.",
  'theme' => 'default',
  'posts_dir' => './posts',
  'cache_dir' => './cache',
  'max' => 150,
  'posts_per_page' => 2,
  'date.timezone' => 'America/Montreal', // see: http://www.php.net/manual/fr/timezones.php
  // 'disqus_shortname' => '', // subscribe to disqus.com to get your shortname
);
