<?php
//将此文件复制到config.inc.php并对该文件进行更改，以定制您的配置。
$config = array(
  'servers' => array(
    array(
      'name'   => 'env-test', // 可选参数
      'host'   => 'IP',
      'port'   => 6379,
      'filter' => '*',
      'scheme' => 'tcp', // 可选的。连接方案:tcp连接的tcp连接，unix通过unix域套接字连接
      'path'   => '', // 可选的。通往unix域套接字的路径。只使用"scheme"= >"unix"。例子:' /var/运行/复述/redis.sock '
      // 可选参数。redis身份验证，【注：无auth的需注释】
      // 'auth' => '' // 警告:密码以明文发送给Redis服务器。
    ),
    array(
      'name'   => 'env-pre', // 可选参数
      'host'   => 'IP',
      'port'   => 6379,
      'filter' => '*',
      'scheme' => 'tcp', // 可选的。连接方案。tcp连接的tcp连接，unix通过unix域套接字连接
      'path'   => '', // 可选的。通往unix域套接字的路径。只使用"scheme"= >"unix"。例子:' /var/运行/复述/redis.sock '
      // 可选参数。redis身份验证，【注：无auth的需注释】
      // 'auth' => '' // 警告:密码以明文发送给Redis服务器。
    ),
     array(
      'name'   => 'env-pro', // 可选参数
      'host'   => 'IP',
      'port'   => 6379,
      'filter' => '*',
      'scheme' => 'tcp', // 可选的。连接方案。tcp连接的tcp连接，unix通过unix域套接字连接
      'path'   => '', // 可选的。通往unix域套接字的路径。只使用"scheme"= >"unix"。例子:' /var/运行/复述/redis.sock '
      // 可选参数。redis身份验证，【注：无auth的需注释】
      'auth' => '' // 警告:密码以明文发送给Redis服务器。
    ),
  ),
 
  'seperator' => ':',
 
  // 取消注释以显示更少的信息，减少redis请求。推荐给一个非常繁忙的Redis服务器。
  //'faster' => true,
 
  // 取消注释以启用HTTP身份验证
  /*'login' => array(
    // Username => Password
    // 可以使用多个组合
    'admin' => array(
      'password' => 'adminpassword',
    ),
    'guest' => array(
      'password' => '',
      'servers'  => array(1) // 可选的服务器列表，该用户可以访问。
    )
  ),*/
 
  /*'serialization' => array(
    'foo*' => array( // Match like KEYS
      // 在保存到redis时调用函数
      'save' => function($data) { return json_encode(json_decode($data)); },
      // 从redis加载时调用的函数
      'load' => function($data) { return json_encode(json_decode($data), JSON_PRETTY_PRINT); },
    ),
  ),*/
 
  // 您可以忽略下面的设置
  'maxkeylen'           => 100,
  'count_elements_page' => 100,
  // 使用旧的键命令而不是扫描来获取所有的键
  'keys' => false,
  // 使用每个扫描命令获取多少个条目
  'scansize' => 1000
);