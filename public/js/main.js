angular.module('ekart', ['ngRoute'])
        .config(['$routeProvider', function($rp){
            $rp
            .when('/', {
                templateUrl:'/laravelAngular/ekart/public/partials/index.php',
                controller: 'IndexController'
            })  
            .when('/user/add', {
                templateUrl:'/laravelAngular/ekart/public/partials/addEditCustomer.php',
                controller: 'AddController'
            })  
        }])
        .controller('IndexController', ['$scope', 'customerService', function($scope, customerService){
            customerService.getAllCustomers().success(function(data){
                $scope.customers = data;
            }); 
        }])
        .controller('AddController', ['$scope', 'customerService', function($scope, customerService){
//                customerService.addCustomer().success(function(data){
//                    $scope.customers = data;
//                }); 
        }])
        .controller('EditController', ['$scope', 'customerService', function($scope, customerService){
//                customerService.addCustomer().success(function(data){
//                    $scope.customers = data;
//                }); 
        }]);