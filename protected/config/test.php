<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			
			'db'=>array(
        'connectionString' =>  
'mysql:host=localhost;dbname=trackstar_test',
        'emulatePrepare' => true,
        'username' => '[your db username]',
        'password' => '[your db password]',
        'charset' => 'utf8',
         ),
    
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
		),
	)
);
