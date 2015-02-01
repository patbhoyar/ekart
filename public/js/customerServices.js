angular.module('ekart')
        .service('customerService',['$http', function($http){
            var urlBase = '/laravelAngular/ekart/public/user';
            
            this.getAllCustomers = function(){
                return $http.get(urlBase);
            };
            
            this.addCustomer = function(customer){
                return $http.post(urlBase+'/store', customer);
            };
            
            this.editCustomer = function(customer){
                return $http.put(urlBase+'/update', customer);
            };
            
            this.deleteCustomer = function(id){
                return $http.delete(urlBase+'/destroy', id);
            };
            
        }]);