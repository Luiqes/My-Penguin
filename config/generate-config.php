<?php
/************************************************************************\
| *																		*|
| *	Generate a json file to hold configuration settings for My-Penguin	*|
| *																		*|
\************************************************************************/

class Generate {
	public function Config() {
		try {
			$JSON = Array(
				'Settings' => Array(
					'HASH' => 'MD5',
					'DEBUG' => true
				),
				'MySQL' => Array(
					'HOST' => 'localhost',
					'USER' => 'luiqes',
					'PASS' => 'password',
					'NAME' => 'my-penguin',
					'TBLN' => 'penguins'
				),
			);
		file_put_contents('Config.json', json_encode($JSON));
		} catch (Exception $e) {
			echo 'Failed: ', $e->getMessage(), '\n';
		}
	}
}
new Generate();
Generate::Config();
?>
