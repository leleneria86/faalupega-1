var myApp = angular.module('MyApp');

myApp.factory('MyService', function($http)
{
	var service = {};

    service.load = function() {

        return $http.get('/services/testapi.php').then(

            function(result) {

                if (result.data) {

                    var data = result.data;

                    return data;
                } else {

                    return $q.reject();
                }
            });
    };

    return service;
});

