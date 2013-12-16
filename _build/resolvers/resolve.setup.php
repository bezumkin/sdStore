<?php

if ($object->xpdo) {
	/* @var modX $modx */
	$modx =& $object->xpdo;

	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			if (!$provider = $modx->getObject('transport.modTransportProvider', array('service_url:LIKE' => '%simpledream%'))) {
				$provider = $modx->newObject('transport.modTransportProvider', array(
					'name' => 'Simple Dream',
					'service_url' => 'http://store.simpledream.ru/extras/',
					'username' => !empty($options['email']) && preg_match('/.+@.+\..+/i', $options['email']) ? trim($options['email']) : '',
					'api_key' => !empty($options['key']) ? trim($options['key']) : '',
					'description' => 'Repository of Simple Dream',
					'created' => time(),
				));
				$provider->save();
			}
			break;
		case xPDOTransport::ACTION_UNINSTALL:
			break;
	}
}
return true;
