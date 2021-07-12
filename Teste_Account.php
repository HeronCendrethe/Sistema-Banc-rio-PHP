<?php
require_once 'Account.php';

$AccountOne = new Account();

$AccountOne->deposit(500);
echo $AccountOne->getbalance();