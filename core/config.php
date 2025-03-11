<?php

// config "server"
define("WEBURL", "http://admin-abraham.com");
define("DIROOT", dirname(__DIR__));
define("EMPRESA", "YMCA ABRAHAM VALDELOMAR");

// config "timezone"
date_default_timezone_set('America/Lima');
setlocale(LC_TIME, "spanish");

// config "database"
define("BD_HOST", "localhost");
define("BD_NAME", "web_valdelomar");
define("BD_USER", "valdelomar");
define("BD_PASS", "cC9gM3kM9hzW2z");
define("BD_DRIVER", "psql");