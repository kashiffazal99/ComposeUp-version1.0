/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Home-Page-------------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("homeCtrl", function($scope){
	$scope.name = "kashif";
});


/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Customers-Address--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("custAddress", function($scope, $http,$mdDialog){
	$scope.name = "address";
	
//----Importing-json-File--------
  $http.get('js/json/address.json')
       .then(function(res){
          $scope.address = res.data;                
        });
//----Importing-json-File--------		

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

/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Pay-Order-Cancellation--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("payCenCtrl", function($scope,$http){
	$scope.name = "Pay Cancel";

 	//----Importing-json-File--------
	$http.get('js/json/payorder_cancellation.json')
       .then(function(res){
          $scope.payOrderCancel = res.data;                
        });
	//----Importing-json-File--------	

	
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

		
	 //DATE-PICKER-----------------
		 $scope.monthSelectorOptions = {
            start: "year",
            depth: "year"
          };
          $scope.getType = function(x) {
            return typeof x;
          };
          $scope.isDate = function(x) {
            return x instanceof Date;
          };
		 //DATE-PICKER----------------- 
	

});




/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Pay-Order-Letter--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("payOrderLetterCtrl", function($scope,$http){
	$scope.name = "PayOrderLetter";

	//----Importing-json-File--------
	$http.get('js/json/shipping.json')
       .then(function(res){
          $scope.shipping = res.data;                
        });
	//----Importing-json-File--------	 
-
	
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
	
//------------------------Add-Remove-Pay-Order-Letter--------------------
	var count = 0;
	$scope.ShowTr = function(){
	if(!(count >= 90)){
		$scope.counter = (count = (count+10));
		$scope.kk = $scope.counter;
	}
	}
	$scope.HideTr = function(){
		if(!(count <= 0)){
		$scope.counter = (count = (count-10));
		$scope.kk = $scope.counter;
	}
	}
	$scope.get = function(){
	$scope.kk = parseInt($scope.nCount);
	$scope.counter = parseInt($scope.nCount);
	count = parseInt($scope.nCount);
	}
	//------------------------Add-Remove-Pay-Order-Letter--------------------
	
	
	 //DATE-PICKER-----------------
		 $scope.monthSelectorOptions = {
            start: "year",
            depth: "year"
          };
          $scope.getType = function(x) {
            return typeof x;
          };
          $scope.isDate = function(x) {
            return x instanceof Date;
          };
		 //DATE-PICKER----------------- 
	
});


/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Pay-Order-Letter-List--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("payOrderLetterList", function($scope,$http){
	$scope.name = "PayOrderLetter--List";
	
	 	//----Importing-json-File--------
	$http.get('js/json/payOrderLetterList.json')
       .then(function(res){
          $scope.POL = res.data;                
        });
	//----Importing-json-File--------


});




/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------GST Return--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("gstReturn", function($scope,$http){
	$scope.name = "GST Return";
	
	
		
		 //DATE-PICKER-----------------
		 $scope.monthSelectorOptions = {
            start: "year",
            depth: "year"
          };
          $scope.getType = function(x) {
            return typeof x;
          };
          $scope.isDate = function(x) {
            return x instanceof Date;
          };
		 //DATE-PICKER----------------- 
		 
		 
	
	 	//----Importing-json-File--------
		$http.get('js/json/company_reg.json')
       .then(function(res){
          $scope.company = res.data;                
        });
	//----Importing-json-File--------	

 	//----Importing-json-File--------
		$http.get('js/json/exporter.json')
       .then(function(res){
          $scope.exporter = res.data;                
        });
	//----Importing-json-File--------	

	
		//Setting Default Values for Taxes
		$scope.insurance = 1;
		$scope.landing = 1;
		$scope.it_tax = 2;
		$scope.cus_duty = 0;
		
		//$scope.Dollar_rate = 0"";
		//$scope.bank_rate = 101.50;
		//$scope.wt = 19500;
		
		$scope.sale_tax = 0;
		$scope.cus_duty = 0;
		$scope.ast_tax = 0;
		
		
		
		
});
/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------GST Return--------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/




/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------GST Return P S-------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("gstReturnPS", function($scope,$http){
	$scope.name = "GST Return P S";
	
			 //DATE-PICKER-----------------
		 $scope.monthSelectorOptions = {
            start: "year",
            depth: "year"
          };
          $scope.getType = function(x) {
            return typeof x;
          };
          $scope.isDate = function(x) {
            return x instanceof Date;
          };
		 //DATE-PICKER----------------- 
		 
		  	//----Importing-json-File--------
	$http.get('js/json/gst.json')
       .then(function(res){
          $scope.gst = res.data;                
        });
	//----Importing-json-File--------
	
		 	//----Importing-json-File--------
		$http.get('js/json/company_reg.json')
       .then(function(res){
          $scope.company = res.data;                
        });
	//----Importing-json-File--------	

	
});

/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------GST Return P S-------------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/	



/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------Cheques-Creating----------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("bankCtrl", function($scope){
	$scope.bank_name = "Cheques";
	
	$scope.get = function(){
		alert("asdf");
	}
	
	
	
	
});

/*-----------------------------------------------------------------------------------------------------------*/
/*-------------------------------------------About Us----------------------------------------*/
/*-----------------------------------------------------------------------------------------------------------*/
offApp.controller("aboutCtrl", function($scope){
	$scope.name = "about.php";
});
