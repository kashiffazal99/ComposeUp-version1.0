var offApp = angular.module('offApp', ['ngMaterial','ngRoute','ngAnimate','kendo.directives']);

offApp.config(function ($routeProvider){
    $routeProvider
		.when('/',
        {
			controller: 'homeCtrl',
            templateUrl: 'views/home.html'
        })
		.when('/checkCreat',
        {
			controller: 'bankCtrl',
            templateUrl: 'views/check_creat.html'
        })
		.when('/address',
        {
			controller: 'custAddress',
            templateUrl: 'views/address.php'
        })
		.when('/pay_cancel',
        {
			controller: 'payCenCtrl',
            templateUrl: 'views/payorder_cancel.php'
        })
		.when('/payOrder',
        {
			controller: 'payOrderLetterCtrl',
            templateUrl: 'views/payOrder.php'
        })
		.when('/payOrder_List',
        {
			controller: 'payOrderLetterList',
            templateUrl: 'views/payOrderList.php'
        })
		.when('/gstReturn',
        {
			controller: 'gstReturn',
            templateUrl: 'views/gst.php'
        })
		.when('/gstReturnPS',
        {
			controller: 'gstReturnPS',
            templateUrl: 'views/gst_print_Summary.php'
        })
		.when('/about',
        {
			controller: 'aboutCtrl',
            templateUrl: 'views/about.php'
        })
		.otherwise( { redirectTo: '/' } );
});
/////////////////Animation for NG-VIEW --------------/////////////
offApp.animation('.reveal-animation', function() {
  return {
    enter: function(element, done) {
      element.css('display', 'none');
      element.fadeIn(100, done);
      return function() {
        element.stop();
      }
    },
    leave: function(element, done) {
      element.fadeOut(0, done)
      return function() {
        element.stop();
      }
    }
  }
})

