var app = angular.module('app',[]);
app.controller("controller",function ($scope,$http) {
  $scope.testing = 'active';
  $scope.post_test = function() {
			$http.post('../controller/service_category.php?action=post_test',{
				'value': 'Post Works! :D'
			}).
			success(function(data, status, headers, config) {
				 $scope.show_post = data;
				 console.log($scope.show_post);
				 console.log('Success.');
			 }).
			 error(function(data, status, headers, config) {
				 console.log('Error.');
			 });
	};
  $scope.get_test = function() {
		  $http.get('../controller/service_category.php?action=get_test').
			 success(function(data, status, headers, config) {
				 $scope.show_get = data;
         console.log($scope.show_get);
				 console.log('Success.');
			 }).
			 error(function(data, status, headers, config) {
				 console.log('Error.');
			 });
	};
});
