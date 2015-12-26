var editApp = angular.module('editApp', ['ngMaterial', 'ngRoute','ngAnimate']);

editApp.config(function ($routeProvider){
    $routeProvider
		.when('/address',
        {
			controller: 'editAddress',
            templateUrl: 'views/editDB/addressEdit.php'
        })
		.when('/payCancelEdit',
        {
			controller: 'editpayCancel',
            templateUrl: 'views/editDB/payCancelEdit.php'
        })
		.when('/gstEdit',
        {
			controller: 'gstEditCtrl',
            templateUrl: 'views/editDB/gstEdit.php'
        })
		.when('/miscellaneous',
        {
			controller: 'miscellaneous',
            templateUrl: 'views/editDB/miscellaneous.php'
        })
		.when('/payOrderLetterEdit',
        {
			controller: 'editpayOrderLetter',
            templateUrl: 'views/editDB/payOrderLetterEdit.php'
        })
		.when('/userAccount',
        {
			controller: 'userAccount',
            templateUrl: 'views/editDB/userAccount.php'
        })
		.otherwise( { redirectTo: '/' } );
});
/////////////////Animation for NG-VIEW --------------/////////////
editApp.animation('.reveal-animation', function() {
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
