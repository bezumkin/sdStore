sdStore.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('sdstore')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('sdstore_items')
				,items: [{
					html: _('sdstore_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'sdstore-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	sdStore.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(sdStore.panel.Home,MODx.Panel);
Ext.reg('sdstore-panel-home',sdStore.panel.Home);
