<?php
$dictionary=array(
'SMART_MAIC_ENDPOINT'=>'API endpoint',
'SMART_MAIC_METHOD'=>'HTTP method',
'SMART_MAIC_TOKEN'=>'Access token',
'SMART_MAIC_REGION'=>'Region / route',
'SMART_MAIC_TRACKING'=>'Tracking number',
'SMART_MAIC_PAYLOAD'=>'POST payload template',
'SMART_MAIC_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'SMART_MAIC_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}