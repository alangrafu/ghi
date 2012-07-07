<?

$conf['endpoint']['local'] = 'http://localhost:3030/ghi/query';
$conf['endpoint']['fact'] = 'http://factforge.net/sparql';
$conf['home'] = '/var/www/ghi/lodspeakr/';
$conf['basedir'] = 'http://alia/ghi/';
$conf['debug'] = false;

/*ATTENTION: By default this application is available to
 * be exported and copied (its configuration)
 * by others. If you do not want that, 
 * turn the next option as false
 */ 
$conf['export'] = true;

#If you want to add/overrid a namespace, add it here
$conf['ns']['local']   = 'http://data.kasabi.com/dataset/global-hunger-index/';
$conf['ns']['base']   = 'http://alia/ghi/';
$conf['ns']['gn']   = 'http://sws.geonames.org/';

$conf['mirror_external_uris'] = $conf['ns']['local'];

$conf['disableComponents'] = false;
$conf['root'] = 'countries';
?>
