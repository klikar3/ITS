<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlsrv:server=sql-clust06Rep\REPORT;database=ITWarehouse',
    'username' => 'ITIntern',
    'password' => 'ItIntern4vsa!',
    'charset' => 'utf8',
	'tablePrefix' => 'tbl_',
    'on afterOpen' => function($event){
        $event->sender->createCommand("SET DATEFORMAT YMD ")->execute();
    }

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];


