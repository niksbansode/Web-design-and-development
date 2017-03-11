angular
    .module('firstApplication', ['ngMaterial'])
    .controller('inputController', inputController);
     function inputController ($scope) {
           $scope.project = {
              comments: 'Comments',    
       };
} 