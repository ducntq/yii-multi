<?php
return array(
    '' => 'site/default/index',
    'admin/<controller:\w+>/<action:\w+>'=>'admin/<controller>/<action>',
    '<controller:\w+>/<action:\w+>'=>'site/<controller>/<action>',
);