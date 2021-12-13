# k0-magento-es_CL
# Magento 2.4.x Spanish Language Pack Chile version 0.1.4

Spanish translation for Magento 2.4 - es_CL (Spanish Chile).

Traduction of Magento 2.4 to Spanish Chile.

## Supported versions
* Magento v2.4.x branch 2.4.x

## Links
* Github: https://github.com/k0derz-alex/k0-magento-es_CL

## Installation
In progress ...

Extract command as root :
su -m apache -c "php bin/magento i18n:collect-phrases -o /tmp/Temp_24x.csv -m" 

Split the files to translate :
php -f Script.php Temp_24x.csv 

Update command as root :
su -m apache -c "php bin/magento i18n:pack -m merge -d /tmp/es_CL.csv es_CL"

Always in the directory of Magento Site

## Process to Translate
In progress ...

Production file is "es_CL.csv"
## End
