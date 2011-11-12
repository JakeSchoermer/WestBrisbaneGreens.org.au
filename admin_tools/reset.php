<?php

$pwd = 'password';

define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
require_once DRUPAL_ROOT . '/' . variable_get('password_inc', 'includes/password.inc');

drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

header("Content-Type: text/plain; charset=utf-8");

echo user_hash_password($pwd);

?>