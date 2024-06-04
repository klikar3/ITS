@echo OFF
:: in case DelayedExpansion is on and a path contains ! 
setlocal DISABLEDELAYEDEXPANSION
C:\php\php-8.2.4\php.exe "%~dp0composer.phar" %*
