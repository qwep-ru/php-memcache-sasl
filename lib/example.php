<?php

include('MemcacheSASL.php');

$m = new MemcacheSASL;
$m->addServer('185.96.86.124', '11211');
$m->setSaslAuthData('memcache_user', 'MemcachedHardPasswordForaccessItNow');
var_dump($m->add('test', '123'));
$m->delete('test');
