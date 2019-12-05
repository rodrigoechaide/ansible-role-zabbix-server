<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = '{{db_engine}}';
$DB['SERVER']   = '{{ZBX_DB_IP}}';
$DB['PORT']     = '0';
$DB['DATABASE'] = '{{db_name}}';
$DB['USER']     = '{{db_user}}';
$DB['PASSWORD'] = '{{db_password}}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '{{ZBX_SERVER_IP}}';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = '{{zabbix_server_name}}';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
