
Ext.onReady(function (){
 var form = Ext.create('Ext.form.Panel', {
	    title: 'Manage Rooms',
	    bodyPadding: 5,
	    width: 300,
	    url: 'management/createRooms',
	    layout: 'anchor',
	    defaults: {
	        anchor: '100%'
	    },
	    defaultType: 'textfield',
	    items: [
		    
		    {
		        fieldLabel: 'Block',
		        name: 'blockNname',
		        allowBlank: false,
		        editable : false,
		    },{
		        fieldLabel: 'Num Rooms',
		        name: 'numberOfRooms',
		        allowBlank: false,
		        editable : false,
		    },
		    {
		        fieldLabel: 'Num of Matts',
		        name: 'numberOfMattresses',
		        allowBlank: false,
		        editable : false,
		    },
		    {
		        fieldLabel: 'Num Of Beds',
		        name: 'numberOfBeds',
		        allowBlank: false,
		        editable : false,
		    },
		    {
		    	xtype: 'combo',
	    	    fieldLabel: 'Room Type',
			    store: Ext.create("Ext.data.Store",{
			    	fields: ['value', 'name'],
				    data : [
				        {"value":"male", "name":"Male"},
				        {"value":"female", "name":"Female"}
				    ]
			    }),
			    queryMode: 'local',
			    displayField: 'name',
			    valueField: 'value',
			    allowBlank: false,
			    editable : false,
			    name : 'roomType',
		    }
		   
	    ],

	    // Reset and Submit buttons
	    buttons: [{
	        text: 'Reset',
	        handler: function() {
	            this.up('form').getForm().reset();
	        }
	    }, {
	        text: 'Submit',
	        formBind: true, //only enabled once the form is valid
	        disabled: true,
	        handler: function() {
	            var form = this.up('form').getForm();
	            if (form.isValid()) {
	            	
	            	//var myMask = new Ext.LoadMask(grid, {msg:"Please wait..."});
					//myMask.show();
					Ext.MessageBox.show({
			           msg: 'Saving payment, please wait...',
			           progressText: 'Saving...',
			           width:300,
			           wait:true,
			           waitConfig: {interval:200},
			           icon:'ext-mb-download', //custom class in msg-box.html
			           //animateTarget: 'mb7'
			       	});

	                form.submit({
	                    success: function(form, action) {
	                    	form.reset();
	                    	Ext.MessageBox.hide();
	                    	Ext.MessageBox.show({
	                    		title: 'Success',
							    msg: action.result.msg,
							    width: 300,
							    buttons: Ext.Msg.OK,
							    icon: Ext.window.MessageBox.INFO
	                    	});
	                       	
	                       	
	                    },
	                    failure: function(form, action) {
	                        Ext.Msg.alert('Failed', action.result.msg);
	                        Ext.MessageBox.show({
	                    		title: 'Failure',
							    msg: "Something went wrong please try again",
							    width: 300,
							    buttons: Ext.Msg.OK,
							    icon: Ext.window.MessageBox.ERROR
	                    	});
	                    }
	                });
	            }
	        }
	    }],
	    //renderTo: 'the_rooms'
});
		var store = Ext.create('Ext.data.Store', {
		    storeId:'roomStore',
		    fields:[ 'room', 'camper',"roomType"],
		    autoLoad : true,
		    pageSize: 250,
		    proxy: {
		        type: 'ajax',
		        api: {
		        	read : 'rooms/getRoomsAsJson'
		        },
		        reader: {
		            type: 'json',
		            root: 'data'
		        }
		    }
		});

		var grid = Ext.create('Ext.grid.Panel', {
		    title: 'Rooms',
		    store: Ext.data.StoreManager.lookup('roomStore'),
		    columns: [
		        { header: 'Camper',  dataIndex: 'camper' ,flex: 1},
		        { header: 'Room Name',  dataIndex: 'room' ,flex: 1},
		        { header: 'Room Type',  dataIndex: 'roomType' ,flex : 1},
		      
		        //{ header: '',  dataIndex: '' ,width : 100},
		    ],
		    height: 600,
		    width: 599,
		    
		    dockedItems: [{
		        xtype: 'pagingtoolbar',
		        store: Ext.data.StoreManager.lookup('roomStore'),   // same store GridPanel is using
		        dock: 'bottom',
		        displayInfo: true
		    }],
		    renderTo: "rooms_grid"
		});

		var url = "myprint/print_rooms";
		$("#printRoomListMale").click(function (){
			
			var a = window.open(url + "/male", "print_window", 'height=600,width=720', false);
			a.focus();

		});
		$("#printRoomListFemale").click(function (){
			
			var a = window.open(url + "/female", "print_window", 'height=600,width=720', false);
			a.focus();

		});

		$("#processRoomAllocation").click(function (){
			Ext.MessageBox.show({
	           msg: 'Processing, please wait...',
	           progressText: 'Saving...',
	           width:300,
	           wait:true,
	           waitConfig: {interval:200},
	           icon:'ext-mb-download', //custom class in msg-box.html
	           //animateTarget: 'mb7'
	       	});

			$.ajax({
				url : 'rooms/processRooms',
				type : 'post',
				data : {},
				dataType : 'json',
				success : function (){
					Ext.MessageBox.hide();
						grid.store.load({
                       		callback: function(records, operation, success) {
									grid.view.refresh();
									Ext.MessageBox.hide();
									//icon: Ext.window.MessageBox.INFO
									//myMask.hide();
							}
                       	})
				},
				failure : function (){

				}
			})
		});
		
});
