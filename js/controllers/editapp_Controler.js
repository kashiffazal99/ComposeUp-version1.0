/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Edit-Customers-Address--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
editApp.controller("editAddress", function($scope, $http, $mdDialog){
	$scope.name = "addreasadfss";
	
//----Importing-json-File--------
  $http.get('js/json/address.json')
       .then(function(res){
          $scope.address = res.data;                
        });
//----Importing-json-File--------		


$scope.delete_address = function(id){
	$scope.result = "This is saved"+id;
	//window.location.assign('config/delete_address.php?ref='+id);
};

				////---------------------------------Deleting Sweet alert-----------------------------////	
	$scope.deleteConfirm =function(id){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this record after it is delete!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel ",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      //swal("Deleted!", "Your imaginary file has been deleted!", "success");
	  window.location.assign('config/delete_address.php?ref='+id);
    } else {
      swal("Cancelled", "Your record is safe", "error");
    }
	});
};
////---------------------------------Deleting Sweet alert-----------------------------////	
			
			
//------------View Sweet Alert-----------------//
$scope.ViewInfo = function(name,address,city,phone,mob,other) {
	swal({
		title: name+"<hr/>",
		text: "<table border='0' width='100%' align='center'><tr><th valign='top'>Address &nbsp;</th><td align='left'>"+  address +"<br/><br/></td></tr>	<tr><th align='right' valign='top'>City </th><td align='left'>"+ city +"<br/><br/></td></tr><tr><th align='right' valign='top'>Phone # </th><td align='left'>"+ phone +"<br/><br/></td></tr><tr><th align='right' valign='top'>Mobile # </th><td align='left'>"+ mob +"<br/><br/></td></tr><tr><th align='right' valign='top'>Others # </th><td align='left'>"+ other +"</td></tr></table><hr/>",
		html: true
	});
};
//------------View Sweet Alert-----------------//
			
			
			
			
});

editApp.controller("editpayCancel", function($scope, $http, $mdDialog){
	$scope.name = "Pay Edit Cancell";
	 	
		//----Importing-json-File--------
		$http.get('js/json/payorder_cancellation.json')
       .then(function(res){
          $scope.payOrderCancel = res.data;                
        });
		//----Importing-json-File--------
		
		
		//Angular Material Confirm Box-----------------
			$scope.showConfirm = function(ev,id) {
			var confirm = $mdDialog.confirm()
			.title('Are you sure to delete this record?')
			.content('')
			.ariaLabel('Lucky day')
			.ok('Yes')
			.cancel('No')
			.targetEvent(ev);
			$mdDialog.show(confirm).then(function() {
			$scope.alert = window.location.assign('config/view_pagesPHP/deletePayCancellation.php?ref='+id);
			}, function() {
			$scope.alert = '';
			});
			};
		//Angular Material Confirm Box-----------------
		
		

});


 editApp.controller("editpayOrderLetter", function($scope, $http, $mdDialog){
	$scope.name = "Pay Order Letter Edit";
	
	//----Importing-json-File--------
	$http.get('js/json/payOrderLetterList.json')
       .then(function(res){
          $scope.POL = res.data;                
        });
	//----Importing-json-File--------
	
	
		////---------------------------------Deleting Sweet alert-----------------------------////	
	$scope.deleteConfirm =function(id){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this record after it is delete!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel ",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      //swal("Deleted!", "Your imaginary file has been deleted!", "success");
	  window.location.assign('config/deleteAddData/deletePayOrderLetter.php?id='+id);
    } else {
      swal("Cancelled", "Your record is safe", "error");
    }
	});
};
////---------------------------------Deleting Sweet alert-----------------------------////	
	
	
});
 
 
 editApp.controller("gstEditCtrl", function($scope, $http, $mdDialog){
	$scope.name = "GST Edit";
	
	
	 	 
		  	//----Importing-json-File--------
	$http.get('js/json/gst.json')
       .then(function(res){
          $scope.gst = res.data;                
        });
	//----Importing-json-File--------
	
	
		$scope.deleteConfirm =function(id){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this record after it is delete!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel ",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      //swal("Deleted!", "Your imaginary file has been deleted!", "success");
	  window.location.assign('config/deleteAddData/gstDelete.php?id='+id);
    } else {
      swal("Cancelled", "Your record is safe", "error");
    }
	});
};
	
	
});
 

editApp.controller("miscellaneous", function($scope, $http, $mdDialog){
	$scope.name = "miscellaneous-Kashif";
	
 	//----Importing-json-File--------
	$http.get('js/json/bankAddressFormat.json')
       .then(function(res){
          $scope.BankAF = res.data;                
        });
	//----Importing-json-File--------

	
 	//----Importing-json-File--------
	$http.get('js/json/shipping.json')
       .then(function(res){
          $scope.shipping = res.data;                
        });
	//----Importing-json-File--------	
	
	 	//----Importing-json-File--------
	$http.get('js/json/acTitle.json')
       .then(function(res){
          $scope.acTitle = res.data;                
        });
	//----Importing-json-File--------		

 	//----Importing-json-File--------
	$http.get('js/json/bankAccTtitle.json')
       .then(function(res){
          $scope.ac_title_number = res.data;                
        });
	//----Importing-json-File--------	 

	//----Importing-json-File--------
	$http.get('js/json/company_reg.json')
       .then(function(res){
          $scope.company_reg = res.data;                
        });
	//----Importing-json-File--------		
	
	//----Importing-json-File--------
	$http.get('js/json/exporter_info.json')
       .then(function(res){
          $scope.exporter_info = res.data;                
        });
	//----Importing-json-File--------	
	
	////---------------------------------Deleting Sweet alert-----------------------------////	
	$scope.deleteConfirm =function(id,type){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this record after it is delete!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel ",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      //swal("Deleted!", "Your imaginary file has been deleted!", "success");
	  window.location.assign('config/deleteAddData/delete_miscellaneous.php?id='+id+'&type='+type);
    } else {
      swal("Cancelled", "Your record is safe", "error");
    }
	});
};
////---------------------------------Deleting Sweet alert-----------------------------////	

$scope.ViewInfo = function(c_name,addr1,addr2,gstReg,cnic,ntn){
	swal({
		title: c_name+"<hr/>",
		text: addr1 +"<br/>"+ addr2 +'<br/><br/><table border="0" align="center"><tr><th>GST Reg No. &nbsp;</th><td align="left">'+  gstReg +'</td></tr>	<tr><th align="right">CNIC No.</th><td align="left">'+ cnic +'</td></tr><tr><th align="right">NTN No.</th><td align="left">'+ ntn +'</td></tr></table><hr/>',
		html: true
	});
};

	
	
});



editApp.controller("userAccount", function($scope, $http, $mdDialog){
	$scope.name = "userAccount";
	});