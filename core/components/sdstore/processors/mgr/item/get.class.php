<?php
/**
 * Get an Item
 */
class sdStoreItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'sdStoreItem';
	public $classKey = 'sdStoreItem';
	public $languageTopics = array('sdstore:default');
}

return 'sdStoreItemGetProcessor';