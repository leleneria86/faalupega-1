// var myApp = angular.module('MyApp');
// myApp.controller('MyController', function($scope, $filter, MyService) {
//     $scope.name = null;
//     $scope.itumalos;
//     $scope.itumalos_filtered;
//     $scope.selected_itumalo;
//     $scope.nuus;
//     $scope.nuus_filtered;
//     $scope.selected_nuu;
//     $scope.selected_pitonuu;
//     $scope.pitonuus_filtered;
//     $scope.motus;
//     $scope.selected_motu;
//     $scope.search_text = null;
//     $scope.show_motu_content;
//     $scope.show_itumalo_content;
//     $scope.current_nuu;
//     $scope.nuu_view = false;
//     $scope.pitonuu_view = false;
//     $scope.exact_match = false;
//     $scope.name_only = true;
//     $scope.mode = 'active';

//     $scope.load = function() {

//         MyService.load().then(function(data) {

//                 $scope.itumalos = data.itumalos;
//                 $scope.motus = data.motus;
//                 $scope.nuus_filtered = $scope.nuus = data.nuus;
//                 $scope.pitonuus_filtered = $scope.pitonuus = data.pitonuus;
//                 $scope.selected_motu = $scope.motus[0];
//                 $scope.safeApply();
//             },
//             function(result) {

//                 //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
//             });
//     };

//     $scope.isSearchable = function() {

//         return (($scope.search_text && $scope.search_text.length > 1));
//     };

//     $scope.onChangeEvent = function() {

//         $scope.nuus_filtered = [];

//         $scope.filterNuus();
//     };

//     $scope.onChangeMotu = function() {

//         $scope.setItumalos($scope.selected_motu.id);
//         $scope.selected_itumalo = $scope.itumalos_filtered[0];

//         $scope.filterNuus();
//     };

//     $scope.filterNuus = function() {

//         if($scope.isSearchable()) {

//             $scope.nuus_filtered = $scope.filterArray($scope.nuus, $scope.search_text);
//         }

//         if($scope.selected_motu.id) {

//             if($scope.nuus_filtered.length == 0) {

//                 $scope.nuus_filtered = $scope.filterNuusByMotuId($scope.selected_itumalo.id, $scope.nuus);
//             } else {

//                 $scope.nuus_filtered = $scope.filterNuusByMotuId($scope.selected_motu.id, $scope.nuus_filtered);
//             }
//         }

//         if ($scope.selected_itumalo && $scope.selected_itumalo.id) {

//             if($scope.nuus_filtered.length == 0) {

//                 $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus);
//             } else {

//                 $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus_filtered);
//             }
//         }
//     };

//     $scope.onClickItumaloContents = function() {

//         $scope.show_itumalo_content = !$scope.show_itumalo_content;
//     };

//     $scope.onClickMotuContents = function() {

//         $scope.show_motu_content = !$scope.show_motu_content;
//     };

//     $scope.onNuu = function(nuu) {

//         $scope.selected_nuu = nuu;
//         $scope.pitonuus_filtered = $scope.selected_nuu.pitonuus;
//     };

//     $scope.onPitonuu = function(pitonuu) {

//         $scope.current_nuu = $scope.selected_nuu;
//         pitonuu.expanded = !pitonuu.expanded;
//         $scope.selected_pitonuu = pitonuu;
//     };

//     $scope.onBack = function() {

//         $scope.selected_nuu = null;
//         $scope.onChangeEvent();
//     };

//     $scope.onBackToNuu = function() {

//         $scope.selected_pitonuu = null;
//         $scope.selected_nuu = $scope.current_nuu;
//     };

//     $scope.setItumalos = function(motu_id) {

//         $scope.itumalos_filtered = [{id:0, name:"All", content:"",motu_id:null}];
//         for(var i = 0; i < $scope.itumalos.length; i++) {

//             if($scope.itumalos[i].motu_id == motu_id) {

//                 $scope.itumalos_filtered.push($scope.itumalos[i]);
//             }
//         }
//     };

//     $scope.getMotuNameById = function(id) {

//         for(var i = 0; i < $scope.motus.length; i++) {

//             if(id == $scope.motus[i].id) {

//                 return $scope.motus[i].name;
//             }
//         }
//     };

//     $scope.getItumaloNameById = function(id) {

//         for(var i = 0; i < $scope.itumalos.length; i++) {

//             if(id == $scope.itumalos[i].id) {

//                 return $scope.itumalos[i].name;
//             }
//         }
//     };

//     $scope.filterNuusByMotuId = function(motu_id, nuus) {

//         let nuus_filtered = [];
//         if(motu_id > 0) {

//             for (var i = 0; i < nuus.length; i++) {

//                 if (nuus[i].motu_id == motu_id) {

//                     nuus_filtered.push(nuus[i]);
//                 }
//             }
//         }
//         return nuus_filtered;
//     };

//     $scope.filterNuusByItumaloId = function(motu_id, nuus) {

//         let nuus_filtered = [];
//         if(motu_id > 0) {

//             for (var i = 0; i < nuus.length; i++) {

//                 if (nuus[i].itumalo_id == motu_id) {

//                     nuus_filtered.push(nuus[i]);
//                 }
//             }
//         }
//         return nuus_filtered;
//     };

//     $scope.filterArray = function(nuus, search_term) {

//         let temp_nuus = [];
//         for(var i = 0; i < nuus.length; i++) {

//             let nuu = nuus[i];
//             if($scope.myFilter(nuu, search_term)) {

//                 temp_nuus.push(nuu);
//             }
//         }
//         return temp_nuus;
//     };


//     $scope.myFilter = function(nuu, search_term){

//         let match = $scope.searchMatch(nuu, search_term);

//         if(!match && nuu.pitonuus){

//             for(let i = 0; i < nuu.pitonuus.length; i++) {

//                 match = $scope.searchMatch(nuu.pitonuus[i], search_term);
//                 if(match) {

//                     break;
//                 }
//             }
//         }

//         return match;
//     };

//     $scope.searchMatch = function(nuu, search_term) {

//         let found = false;

//         if($scope.name_only) {

//             let str = nuu.name.toLowerCase();
//             if($scope.exact_match) {

//                 found = $scope.exactValue(str, search_term);
//             } else {

//                 if (str.indexOf(search_term) > -1) {

//                     found = true;
//                 }
//             }
//         } else {

//             found = $scope.filterContent(nuu.content, search_term);
//         }

//         return found;
//     };

//     $scope.filterContent = function(contents, term) {

//         let found = false;
//         for(var i = 0; i < contents.length; i++) {

//             let content = contents[i];
//             for (var k in content) {

//                 if (content.hasOwnProperty(k)) {

//                     let lines = content[k];
//                     for(var j = 0; j < lines.length; j++) {

//                         let str = lines[j].toLowerCase();
//                         if($scope.exact_match) {

//                             found = $scope.exactValueInString(str, term);
//                         } else {

//                             if (str.indexOf(term) > -1) {

//                                 found = true;
//                             }
//                         }

//                         if(found) {

//                             break;
//                         }
//                     }
//                 }
//                 if(found) {

//                     break;
//                 }
//             }
//             if(found) {

//                 break;
//             }
//         }
//         return found;
//     };

//     $scope.exactValueInString = function(str, term) {

//         if(str === term) {

//             return true;
//         }

//         let term1 = " " + term + " ";
//         if (str.indexOf(term1) > -1) {

//             return true;
//         }

//         term1 = "(" + term + ")";
//         if (str.indexOf(term1) > -1) {

//             return true;
//         }

//         term1 = "(" + term + ",";
//         if (str.indexOf(term1) > -1) {

//             return true;
//         }

//         term1 = " " + term + ")";
//         if (str.indexOf(term1) > -1) {

//             return true;
//         }

//         term1 = " " + term + ",";
//         if (str.indexOf(term1) > -1) {

//             return true;
//         }

//         return false;
//     };

//     $scope.exactValue = function(str, term) {

//         if(str === term) {

//             return true;
//         }

//         let term1 = " " + term + " ";
//         if(str === term1) {

//             return true;
//         }

//         term1 = "(" + term + ")";
//         if(str === term1) {

//             return true;
//         }

//         term1 = "(" + term + ",";
//         if(str === term1) {

//             return true;
//         }

//         term1 = " " + term + ")";
//         if(str === term1) {

//             return true;
//         }

//         term1 = " " + term + ",";
//         if(str === term1) {

//             return true;
//         }

//         return false;
//     };

//     $scope.safeApply = function(fn) {
//         var phase = this.$root.$$phase;
//         if(phase === '$apply' || phase === '$digest') {
//             if(fn && (typeof(fn) === 'function')) {
//                 fn();
//             }
//         } else {
//             this.$apply(fn);
//         }
//     };
// });

var myApp = angular.module('MyApp');
myApp.controller('MyController', function($scope, $filter, MyService, $rootScope) {
    $scope.name = null;
    $scope.itumalos;
    $scope.itumalos_filtered;
    $scope.selected_itumalo;
    $scope.nuus;
    $scope.nuus_filtered;
    $scope.selected_nuu;
    $scope.selected_pitonuu;
    $scope.pitonuus_filtered;
    $scope.motus;
    $scope.selected_motu;
    $scope.search_text = null;
    $scope.show_motu_content;
    $scope.show_itumalo_content;
    $scope.current_nuu;
    $scope.nuu_view = false;
    $scope.pitonuu_view = false;
    $scope.exact_match = false;
    $scope.name_only = true;
    $scope.mode = 'login';
    $scope.jwt = null;
    $scope.user = null;
    $scope.message = null;

    $scope.load = function() {

        $scope.user = new User();
        if($scope.jwt) {

            $scope.mode = 'active';
            MyService.load().then(function (data) {

                    $scope.itumalos = data.itumalos;
                    $scope.motus = data.motus;
                    $scope.nuus_filtered = $scope.nuus = data.nuus;
                    $scope.pitonuus_filtered = $scope.pitonuus = data.pitonuus;
                    $scope.selected_motu = $scope.motus[0];
                    $scope.safeApply();
                },
                function (result) {

                    //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
                });
        }
    };

    $scope.onLoginUser = function() {

        if($scope.user.email == 'lele' && $scope.user.password == 'lelepass') {
            
            $scope.jwt = "good-token";
            $scope.load();
        } else {
            
            $scope.message = 'Login Failed';
        }
        $scope.safeApply();

        $scope.message = null;
        MyService.loginUser($scope.user.email, $scope.user.password).then(function (data) {

                if(data.success) {

                    $scope.jwt = data.jwt;
                    $scope.load();
                } else {

                    $scope.message = data.message;
                }
                $scope.safeApply();
            },
            function (result) {

                //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
            });
    };

    $scope.showRegisterButton = function() {

        return ($scope.user
            && $scope.user.first_name && $scope.user.first_name.length > 0
            && $scope.user.last_name && $scope.user.last_name.length > 0
            && $scope.user.email && $scope.user.email.length > 0
            && $scope.user.username && $scope.user.username.length > 0
            && $scope.user.password && $scope.user.password.length > 0);
    };

    $scope.gotoRegisterView = function() {

        $scope.mode = "register";
        $scope.safeApply();
    };

    $scope.gotoLoginView = function() {

        $scope.user = new User();
        $scope.mode = "login";
        $scope.safeApply();
    };

    $scope.onRegisterUser = function() {

        $scope.user.first_name = 'kon';
        $scope.user.last_name = 'doe';
        $scope.user.email = 'fululele@gmail.com';
        $scope.user.password = 'konpass';

        var emailIsValid = $scope.validateEmail($scope.user.email);
        if(!emailIsValid) {

            $scope.message = "Invalid Email";
            $("#register_email").focus();
            //$scope.safeApply();
            return;
        }

        var param = {first_name: $scope.user.first_name,
            last_name: $scope.user.last_name,
            email: $scope.user.email,
            password: $scope.user.password};
        MyService.registerUser(param).then(function (data) {

                $scope.gotoLoginView();
                $scope.safeApply();
            },
            function (result) {

                //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
            });
    };

    $scope.verifyEmail = function() {

        window.location = 'http://mytest.com/services/api/verifyemail.php?vercode=' + encodeURIComponent('5j#7z19h');
    };

    $scope.isRegisterMode = function() {

        return ($scope.mode == "register");
    };

    $scope.isActiveMode = function() {

        return ($scope.mode == "active");
    };

    $scope.isLoginMode = function() {

        return ($scope.mode == "login");
    };

    $scope.isSearchable = function() {

        return (($scope.search_text && $scope.search_text.length > 1));
    };

    $scope.onChangeEvent = function() {

        MyService.checkToken($scope.jwt).then(function (data) {

                if(data.success) {

                    $scope.nuus_filtered = [];

                    $scope.filterNuus();
                } else {

                    $scope.mode = "login";
                }
            },
            function (result) {

                if(result.data.message) {

                    $scope.message = result.data.message;
                }
            });
    };

    $scope.onChangeMotu = function() {

        MyService.checkToken($scope.jwt).then(function (data) {

            if(data.success) {

                $scope.setItumalos($scope.selected_motu.id);
                $scope.selected_itumalo = $scope.itumalos_filtered[0];

                $scope.filterNuus();
            } else {

                $scope.mode = "login";
            }
        },
        function (result) {

            if(result.data.message) {

                $scope.message = result.data.message;
            }
            $scope.mode = "login";
            $scope.safeApply();
        });
    };

    $scope.filterNuus = function() {

        if($scope.isSearchable()) {

            $scope.nuus_filtered = $scope.filterArray($scope.nuus, $scope.search_text);
        }

        if($scope.selected_motu.id) {

            if($scope.nuus_filtered.length == 0) {

                $scope.nuus_filtered = $scope.filterNuusByMotuId($scope.selected_itumalo.id, $scope.nuus);
            } else {

                $scope.nuus_filtered = $scope.filterNuusByMotuId($scope.selected_motu.id, $scope.nuus_filtered);
            }
        }

        if ($scope.selected_itumalo && $scope.selected_itumalo.id) {

            if($scope.nuus_filtered.length == 0) {

                $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus);
            } else {

                $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus_filtered);
            }
        }
    };

    $scope.onClickItumaloContents = function() {

        $scope.show_itumalo_content = !$scope.show_itumalo_content;
    };

    $scope.onClickMotuContents = function() {

        $scope.show_motu_content = !$scope.show_motu_content;
    };

    $scope.onNuu = function(nuu) {

        $scope.selected_nuu = nuu;
        $scope.pitonuus_filtered = $scope.selected_nuu.pitonuus;
    };

    $scope.onPitonuu = function(pitonuu) {

        $scope.current_nuu = $scope.selected_nuu;
        pitonuu.expanded = !pitonuu.expanded;
        $scope.selected_pitonuu = pitonuu;
    };

    $scope.onBack = function() {

        $scope.selected_nuu = null;
        $scope.onChangeEvent();
    };

    $scope.onBackToNuu = function() {

        $scope.selected_pitonuu = null;
        $scope.selected_nuu = $scope.current_nuu;
    };

    $scope.setItumalos = function(motu_id) {

        $scope.itumalos_filtered = [{id:0, name:"All", content:"",motu_id:null}];
        for(var i = 0; i < $scope.itumalos.length; i++) {

            if($scope.itumalos[i].motu_id == motu_id) {

                $scope.itumalos_filtered.push($scope.itumalos[i]);
            }
        }
    };

    $scope.validateEmail = function(email) {

        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    $scope.getMotuNameById = function(id) {

        for(var i = 0; i < $scope.motus.length; i++) {

            if(id == $scope.motus[i].id) {

                return $scope.motus[i].name;
            }
        }
    };

    $scope.getItumaloNameById = function(id) {

        for(var i = 0; i < $scope.itumalos.length; i++) {

            if(id == $scope.itumalos[i].id) {

                return $scope.itumalos[i].name;
            }
        }
    };

    $scope.filterNuusByMotuId = function(motu_id, nuus) {

        var nuus_filtered = [];
        if(motu_id > 0) {

            for (var i = 0; i < nuus.length; i++) {

                if (nuus[i].motu_id == motu_id) {

                    nuus_filtered.push(nuus[i]);
                }
            }
        }
        return nuus_filtered;
    };

    $scope.filterNuusByItumaloId = function(motu_id, nuus) {

        var nuus_filtered = [];
        if(motu_id > 0) {

            for (var i = 0; i < nuus.length; i++) {

                if (nuus[i].itumalo_id == motu_id) {

                    nuus_filtered.push(nuus[i]);
                }
            }
        }
        return nuus_filtered;
    };

    $scope.filterArray = function(nuus, search_term) {

        var temp_nuus = [];
        for(var i = 0; i < nuus.length; i++) {

            var nuu = nuus[i];
            if($scope.myFilter(nuu, search_term)) {

                temp_nuus.push(nuu);
            }
        }
        return temp_nuus;
    };


    $scope.myFilter = function(nuu, search_term){

        var match = $scope.searchMatch(nuu, search_term);

        if(!match && nuu.pitonuus){

            for(var i = 0; i < nuu.pitonuus.length; i++) {

                match = $scope.searchMatch(nuu.pitonuus[i], search_term);
                if(match) {

                    break;
                }
            }
        }

        return match;
    };

    $scope.searchMatch = function(nuu, search_term) {

        var found = false;

        if($scope.name_only) {

            var str = nuu.name.toLowerCase();
            if($scope.exact_match) {

                found = $scope.exactValue(str, search_term);
            } else {

                if (str.indexOf(search_term) > -1) {

                    found = true;
                }
            }
        } else {

            found = $scope.filterContent(nuu.content, search_term);
        }

        return found;
    };

    $scope.filterContent = function(contents, term) {

        var found = false;
        for(var i = 0; i < contents.length; i++) {

            var content = contents[i];
            for (var k in content) {

                if (content.hasOwnProperty(k)) {

                    var lines = content[k];
                    for(var j = 0; j < lines.length; j++) {

                        var str = lines[j].toLowerCase();
                        if($scope.exact_match) {

                            found = $scope.exactValueInString(str, term);
                        } else {

                            if (str.indexOf(term) > -1) {

                                found = true;
                            }
                        }

                        if(found) {

                            break;
                        }
                    }
                }
                if(found) {

                    break;
                }
            }
            if(found) {

                break;
            }
        }
        return found;
    };

    $scope.exactValueInString = function(str, term) {

        if(str === term) {

            return true;
        }

        var term1 = " " + term + " ";
        if (str.indexOf(term1) > -1) {

            return true;
        }

        term1 = "(" + term + ")";
        if (str.indexOf(term1) > -1) {

            return true;
        }

        term1 = "(" + term + ",";
        if (str.indexOf(term1) > -1) {

            return true;
        }

        term1 = " " + term + ")";
        if (str.indexOf(term1) > -1) {

            return true;
        }

        term1 = " " + term + ",";
        if (str.indexOf(term1) > -1) {

            return true;
        }

        return false;
    };

    $scope.exactValue = function(str, term) {

        if(str === term) {

            return true;
        }

        var term1 = " " + term + " ";
        if(str === term1) {

            return true;
        }

        term1 = "(" + term + ")";
        if(str === term1) {

            return true;
        }

        term1 = "(" + term + ",";
        if(str === term1) {

            return true;
        }

        term1 = " " + term + ")";
        if(str === term1) {

            return true;
        }

        term1 = " " + term + ",";
        if(str === term1) {

            return true;
        }

        return false;
    };

    $scope.safeApply = function(fn) {
        var phase = this.$root.$$phase;
        if(phase === '$apply' || phase === '$digest') {
            if(fn && (typeof(fn) === 'function')) {
                fn();
            }
        } else {
            this.$apply(fn);
        }
    };
});

