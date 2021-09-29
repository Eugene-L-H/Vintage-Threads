<?php

// Determines the page displayed on the title tab
function tab_page($uri) {
  switch ($uri) {
    case '/vintage-threads/':
      echo 'Home |';
      break;
  }
}
