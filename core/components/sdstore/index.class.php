<?php

/**
 * Class sdStoreMainController
 */
abstract class sdStoreMainController extends modExtraManagerController {
	/** @var sdStore $sdStore */
	public $sdStore;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('sdstore_core_path', null, $this->modx->getOption('core_path') . 'components/sdstore/');
		require_once $corePath . 'model/sdstore/sdstore.class.php';

		$this->sdStore = new sdStore($this->modx);

		$this->addCss($this->sdStore->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->sdStore->config['jsUrl'] . 'mgr/sdstore.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			sdStore.config = ' . $this->modx->toJSON($this->sdStore->config) . ';
			sdStore.config.connector_url = "' . $this->sdStore->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('sdstore:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends sdStoreMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}