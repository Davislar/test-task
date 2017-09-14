<?php
$rules = [];
$rules[] = [
    'pattern'=>'',
    'route'=>'site/index',
    'suffix'=>'',
];
$rules[] = [
    'pattern'=>'show',
    'route'=>'/show/default/index',
    'suffix'=>'',
];
$rules[] = [
    'pattern'=>'api',
    'route'=>'/api/default/index',
    'suffix'=>'',
];
$rules[] = [
    'pattern'=>'savereport',
    'route'=>'/api/default/savereport',
    'suffix'=>'',
];
return $rules;