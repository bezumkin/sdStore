var sdStore = function(config) {
	config = config || {};
	sdStore.superclass.constructor.call(this,config);
};
Ext.extend(sdStore,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('sdstore',sdStore);

sdStore = new sdStore();