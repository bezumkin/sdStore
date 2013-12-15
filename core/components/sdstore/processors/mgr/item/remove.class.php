<?php
/**
 * Remove an Item
 */
class sdStoreItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'sdStoreItem';
	public $classKey = 'sdStoreItem';
	public $languageTopics = array('sdstore');

}

return 'sdStoreItemRemoveProcessor';