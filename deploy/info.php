<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'bandwidth_viewer';
$app['version'] = '1.5.0';
$app['release'] = '1';
$app['vendor'] = 'Tim Burgess';
$app['packager'] = 'Tim Burgess';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('bandwidth_viewer_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('bandwidth_viewer_app_name');
$app['category'] = lang('base_category_reports');
$app['subcategory'] = lang('base_category_network');


/////////////////////////////////////////////////////////////////////////////
// Controllers
/////////////////////////////////////////////////////////////////////////////

$app['controllers']['bandwidth_viewer']['title'] = lang('bandwidth_viewer_app_name');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['core_requires'] = array(
    'app-base-core >= 1:1.4.22'
);

$app['delete_dependency'] = array(
    'app-bandwidth-viewer-core'
);
