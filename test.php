<?php

//echo "hassa";exit;
require '../app/bootstrap.php';
require __DIR__ . '/TestApp.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$obj = $bootstrap->getObjectManager();
$state = $obj->get('Magento\Framework\App\State');
$state->setAreaCode('frontend');

/** @var \Magento\Framework\App\Http $app */
$app = $bootstrap->createApplication('TestApp');
$bootstrap->run($app);
