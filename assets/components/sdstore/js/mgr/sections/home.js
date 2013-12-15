sdStore.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'sdstore-panel-home'
			,renderTo: 'sdstore-panel-home-div'
		}]
	}); 
	sdStore.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(sdStore.page.Home,MODx.Component);
Ext.reg('sdstore-page-home',sdStore.page.Home);