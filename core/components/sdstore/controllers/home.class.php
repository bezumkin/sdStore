<?php
/**
 * The home manager controller for sdStore.
 *
 */
class sdStoreHomeManagerController extends sdStoreMainController {
	/* @var sdStore $sdStore */
	public $sdStore;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('sdstore');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->sdStore->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->sdStore->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->sdStore->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "sdstore-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->sdStore->config['templatesPath'] . 'home.tpl';
	}
}