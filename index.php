<?php

require_once "controller/template.controller.php";
require_once "controller/users.controller.php";
require_once "controller/categories.controller.php";
require_once "controller/products.controller.php";
require_once "controller/customers.controller.php";
require_once "controller/sales.controller.php";

require_once "model/users.model.php";
require_once "model/categories.model.php";
require_once "model/products.model.php";
require_once "model/customers.model.php";
require_once "model/sales.model.php";

$template = new TemplateController();
$template -> ctrTemplate();
