# Installation

* Install LODSpeaKr in a web directory as usual (e.g., /var/www/myGhi)
* `git clone` this repository
* Replace the components in /var/www/myGhi/lodspeakr/
* Copy default.settings.inc.php into as settings.inc.php and edit the first 3 lines to fit your system (i.e., location, namespace, and URL of the sparql endpoint)
* Give writing permission to the web server if necessary
* Load the data from the folder `data` of this repository into your triple store (in the default graph)
* Point your browser to the root of your installation, you should see the same interface as in `http://graves.cl/ghi`
