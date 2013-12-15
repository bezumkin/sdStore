<?php
/**
 * Update an Item
 */
class sdStoreItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'sdStoreItem';
	public $classKey = 'sdStoreItem';
	public $languageTopics = array('sdstore');
	public $permission = 'update_document';
}

return 'sdStoreItemUpdateProcessor';