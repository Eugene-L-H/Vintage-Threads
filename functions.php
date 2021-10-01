<?php

// Determines the page displayed on the title tab
function tab_page($uri) {
  switch ($uri) {
    case '/vintage-threads/index.php':
      echo 'Home |';
      break;
    case '/vintage-threads/about-us.php':
      echo 'About Us |';
      break;
    case '/vintage-threads/shop.php':
      echo 'Shop |';
      break;
    case '/vintage-threads/blog.php':
      echo ' News |';
      break;
    case '/vintage-threads/login.php':
      echo 'Login |';
      break;
    case '/vintage-threads/search.php':
      echo 'Search |';
      break;

    default:
      echo '';
  }
}

function bodyClass($uri) {
  switch ($uri) {
    case '/vintage-threads/about-us.php':
      echo 'about-us';
      break;
    case '/vintage-threads/shop.php':
      echo 'shop';
      break;
    case '/vintage-threads/blog.php':
      echo 'blog';
      break;
    case '/vintage-threads/login.php':
      echo 'login';
      break;
    case '/vintage-threads/search.php':
      echo 'search';
      break;

    default:
      echo 'homepage';
  }
}
