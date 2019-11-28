# k0-magento-es_CL
# Magento 2.3.3 Spanish Language Pack Chile version 0.1.1

Spanish translation for Magento 2. Translation es_CL (Spanish Chile).

Traduction de Magento 2 Spanish Chile.

## Supported versions
* Magento v2.3.0 branch 2.3.0
* Magento v2.3.3 branch 2.3.3

## Links
* Github: https://github.com/k0derz-alex/k0-magento-es_CL

## Installation
In progress ...

Extract command as root :
su -m apache -c "php bin/magento i18n:collect-phrases -o /tmp/es_CL.csv -m" 

Update command as root :
su -m apache -c "php bin/magento i18n:pack -m merge -d /tmp/es_CL.csv es_CL"

Always in the directory of Magento

## End