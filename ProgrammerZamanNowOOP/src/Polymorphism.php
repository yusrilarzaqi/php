<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Yusril");
var_dump($company->programmer->name);
$company->programmer = new BackendProgrammer("Yusril");
var_dump($company->programmer->name);
$company->programmer = new FrontendProgrammer("Yusril");
var_dump($company->programmer->name);


sayHelloProgrammer(new Programmer("Yusril"));
sayHelloProgrammer(new BackendProgrammer("Yusril"));
sayHelloProgrammer(new FrontendProgrammer("Yusril"));
