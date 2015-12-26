// Code goes here
angular.module('animate', ["ngAnimate", "ngRoute"]).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/view1', {templateUrl: 'views/view1.html'}).
      when('/view2', {templateUrl: 'views/view2.html'}).
      otherwise({redirectTo: '/'});
}])
.animation('.reveal-animation', function() {
  return {
    enter: function(element, done) {
      element.css('display', 'none');
      element.fadeIn(500, done);
      return function() {
        element.stop();
      }
    },
    leave: function(element, done) {
      element.fadeOut(500, done)
      return function() {
        element.stop();
      }
    }
  }
})



