<?php 
require_once(dirname(__FILE__).'/../../config_instalador.php');

return array (
  'parameters' => 
  array (
    'database_host' => DB_SERVIDOR,
    'database_port' => '',
    'database_name' => DB_NOME,
    'database_user' => DB_USUARIO,
    'database_password' => DB_SENHA,
    'database_prefix' => PREFIXO.'__',
    'database_engine' => 'InnoDB',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => 'txACkRYTcvBDL02igaucmsVBsZTaVEJOa83dkKcBm6xEoJRhbH9UZpye',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2019-07-04',
    'locale' => 'pt-PT',
    'cookie_key' => '0PEgYqTTOtItxapDcsQX5qZKxUpzPVg4C6U1Ov2PTbvoDOJivNz801i9',
    'cookie_iv' => 'fKm6QkSX',
    'new_cookie_key' => 'def000006339889c1b98c8624386c69e157f43adb478e1da28902a0c0246334ad6750768672c1b1cfd06cdad459c0565e1a589ac1f3febc05d1de0d1d9e1fd79a89ab3cd',
  ),
);