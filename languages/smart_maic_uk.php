<?php
$dictionary=array(
'SMART_MAIC_ENDPOINT'=>'Адреса API',
'SMART_MAIC_METHOD'=>'HTTP-метод',
'SMART_MAIC_TOKEN'=>'Токен доступу',
'SMART_MAIC_REGION'=>'Регіон / маршрут',
'SMART_MAIC_TRACKING'=>'Номер відправлення',
'SMART_MAIC_PAYLOAD'=>'Шаблон POST-запиту',
'SMART_MAIC_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'SMART_MAIC_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}