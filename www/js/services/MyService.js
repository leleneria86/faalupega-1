// var myApp = angular.module('MyApp');

// myApp.factory('MyService', function($http)
// {
// 	var service = {};

//     service.load = function() {

//         return $http.get('/services/testapi.php').then(

//             function(result) {

//                 if (result.data) {

//                     var data = result.data;

//                     return data;
//                 } else {

//                     return $q.reject();
//                 }
//             });
//     };

//     return service;
// });

var myApp = angular.module('MyApp');

myApp.factory('MyService', function($http, $q)
{
	var service = {};

    service.registerUser = function(user) {

        return $http.post('/services/api/register.php', user).then(
            function (result) {

                if (result.data) {

                    var data = result.data;

                    return data;
                } else {

                    return $q.reject();
                }
            });
    };

    service.loginUser = function(email, pass) {

        return $http.get("/services/api/login.php?email=" + email + "&pass=" + pass).then(
            function (result) {

                if (result.data) {

                    return result.data;
                } else {

                    return $q.reject();
                }
            });
    };

    service.checkToken = function(jwt) {

        return $http.get("/services/api/checktoken.php?jwt=" + jwt).then(
            function (result) {

                if (result.data) {

                    return result.data;
                } else {

                    return $q.reject();
                }
            });
    };


    service.load = function() {

        return $http.get('/services/api/nuuapi.php').then(

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


