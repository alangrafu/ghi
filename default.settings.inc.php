<?

$conf['endpoint']['local'] = 'http://localhost:3030/ghi/query'; //The URL of the endpoint where the data is stored
$conf['home'] = '/var/www/ghi/lodspeakr/'; // Change to the path of you LODSPeaKr installation. Remember to leave lodsapeakr/ at the end
$conf['basedir'] = 'http://alia/ghi/';  //What is the base of your installation from the web


#Don't edit anything beyond this point
$conf['ns']['local']   = 'http://data.kasabi.com/dataset/global-hunger-index/';
$conf['ns']['base']   = $conf['basedir'];
$conf['ns']['gn']   = 'http://sws.geonames.org/';

$conf['debug'] = false;
$conf['mirror_external_uris'] = $conf['ns']['local'];

$conf['disableComponents'] = false;
$conf['root'] = 'countries';
?>
