'use strict';

angular.module('myApp.dailyForm', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/dailyForm', {
    templateUrl: 'view1/dailyForm.html',
    controller: 'dailyFormCtrl'
  });
}])

.controller('dailyFormCtrl', DailyForm);


function DailyForm($scope) {

    	$scope.dailyForm = {
    		seenBy: ['Sessional Staff',
    						'Psychologist',
    						'CSS']
    	};

    	$scope.selection = 'Seen By';

        $scope.setselection = function(item)
        {
            $scope.selection = item;
        }

}