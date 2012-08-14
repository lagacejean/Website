<?php
/* 
   This is a library of function to avoid code duplication
   in website files.
*/
function choose_language($get, $session){
  /* Determine the language of the website.
   *
   * There is two ways to deternine the website
   * language. One is by the url with the special
   * variable $_GET['lang'] and the other is with
   * the special variable $_SESSION['lang']. Since
   * users can have direct access to the url, the
   * modification of the $_GET['lang'] variable
   * must have higher priority. For security, input
   * values are never returned directly.
   *
   * :param $get: $_GET array.
   * :param $session: $_SESSION array.
   *
   * :return: 'FR' or 'EN' capitalized.
   */
  if(isset($get['lang'])){
    $capitalized = strtoupper($get['lang']);
    if(strcmp($capitalized, 'FR') == 0) $lang = 'FR';
    else $lang = 'EN';
  }
  elseif(isset($session['lang'])){
    $capitalized = strtoupper($session['lang']);
    if(strcmp($capitalized, 'FR') == 0) $lang = 'FR';
    else $lang = 'EN';
  }
  else $lang = 'EN';
  return $lang;
}

function choose_content($get){
  /* Determine what content the website should
   * expose.
   *
   * There is only one way to determine what content
   * we must show. This is done directly by the url
   * accessible with the $_GET['content'] variable.
   *
   * :param $get: $_GET array.
   *
   * :return: File content name to show without
   *          the extension.
   */
  if(isset($get['content'])){
    $lower = strtolower($get['content']);
    if(0 == strcmp($lower, 'home') ||
       0 == strcmp($lower, 'about') ||
       0 == strcmp($lower, 'committee') ||
       0 == strcmp($lower, 'schedule') ||
       0 == strcmp($lower, 'speaker') ||
       0 == strcmp($lower, 'inscription') ||
       0 == strcmp($lower, 'blog') ||
       0 == strcmp($lower, 'sponsors') ||
       0 == strcmp($lower, 'contact') ||
       0 == strcmp($lower, 'travel') ||
       0 == strcmp($lower, 'accommodation') ||
       0 == strcmp($lower, 'faq')
       ) return $lower;
    else{
      return '404';
    }
  }
  return 'home';
}
?>