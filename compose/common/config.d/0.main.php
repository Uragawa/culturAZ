<?php 
use MapasCulturais\i;

$_SERVER['SERVER_NAME'] = 'culturaz.santoandre.sp.gov.br';

return [
    'app.siteName' => 'CulturAZ Santo André',
    'app.siteDescription' => 'CulturaZ Santo André',

    'app.geoDivisionsHierarchy' => [
        'bairro' => 'Bairro',
    ],

    'namespaces' => array(
        'MapasCulturais\Themes' => THEMES_PATH,
        'MapasCulturais\Themes\BaseV1' => THEMES_PATH . 'BaseV1/',
        'Subsite' => THEMES_PATH . 'Subsite/',
    ),
];