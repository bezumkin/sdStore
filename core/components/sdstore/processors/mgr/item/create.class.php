<?php
/**
 * Create an Item
 */
class sdStoreItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'sdStoreItem';
	public $classKey = 'sdStoreItem';
	public $languageTopics = array('sdstore');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('sdStoreItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('sdstore_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'sdStoreItemCreateProcessor';