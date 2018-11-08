var myApp = angular.module('MyApp');
    myApp.controller('MyController', function($scope, $filter, MyService) {
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
        $scope.show_itumalo_content;
        $scope.current_nuu;
        $scope.nuu_view = false;
        $scope.pitonuu_view = false;

        $scope.load = function() {

            MyService.load().then(function(data) {

                    $scope.itumalos = data.itumalos;
                    $scope.motus = data.motus;
                    $scope.nuus_filtered = $scope.nuus = data.nuus;
                    $scope.pitonuus_filtered = $scope.pitonuus = data.pitonuus;
                    $scope.selected_motu = $scope.motus[0];
                    $scope.safeApply();
                },
                function(result) {

                    //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
                });
        };

        $scope.onChangeSearch = function() {

            $scope.nuus_filtered = [];
            if($scope.search_text && $scope.search_text.length > 2) {

                $scope.nuus_filtered = $scope.filterArray($scope.nuus, $scope.search_text);

                $scope.changeMotu();

                if ($scope.selected_itumalo && $scope.selected_itumalo.id) {

                    $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus_filtered);
                }
            }
        };

        $scope.onChangeMotu = function() {

            if($scope.selected_motu) {

                if($scope.selected_motu.id) {

                    $scope.nuus_filtered = $scope.nuus;

                    $scope.setItumalos($scope.selected_motu.id);
                    $scope.selected_itumalo = $scope.itumalos_filtered[0];
                }

                $scope.changeMotu();
            }
        };

        $scope.changeMotu = function() {

            if($scope.selected_motu.id) {

                $scope.nuus_filtered = $scope.filterNuusByMotuId($scope.selected_motu.id, $scope.nuus_filtered);
            }
        };

        $scope.onChangeItumalo = function() {

            if ($scope.selected_itumalo.id) {

                $scope.nuus_filtered = $scope.filterNuusByItumaloId($scope.selected_itumalo.id, $scope.nuus);
            }
        };

        $scope.onClickItumaloContents = function() {

            $scope.show_itumalo_content = !$scope.show_itumalo_content;
        };

        $scope.onNuu = function(nuu) {

            //$scope.nuu_view = true;
            $scope.selected_nuu = nuu;
            $scope.pitonuus_filtered = $scope.selected_nuu.pitonuus;
            //$scope.setPitonuus(nuu.motu_id);
        };

        $scope.onPitonuu = function(pitonuu) {

            // $scope.nuu_view = false;
            // $scope.pitonuu_view = true;
            $scope.current_nuu = $scope.selected_nuu;
            pitonuu.expanded = !pitonuu.expanded;
            $scope.selected_pitonuu = pitonuu;
        };

        $scope.onBack = function() {

            // $scope.nuu_view = false;
            // $scope.pitonuu_view = false;
            $scope.selected_nuu = null;
            $scope.onChangeItumalo();
        };

        $scope.onBackToNuu = function() {

            // $scope.nuu_view = true;
            // $scope.pitonuu_view = false;
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

        $scope.filterNuusByMotuId = function(motu_id, nuus) {

            let nuus_filtered = [];
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

            let nuus_filtered = [];
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

            let temp_nuus = [];
            for(var i = 0; i < nuus.length; i++) {

                let nuu = nuus[i];
                if($scope.myFilter(nuu, search_term)) {

                    temp_nuus.push(nuu);
                }
            }
            return temp_nuus;
        };


        $scope.myFilter = function(nuu, search_term){

            let match = $scope.searchMatch(nuu, search_term);

            if(!match && nuu.pitonuus){

                for(let i = 0; i < nuu.pitonuus.length; i++) {

                    match = $scope.searchMatch(nuu.pitonuus[i], search_term);
                    if(match) {

                        break;
                    }
                }
            }

            return match;
        };

        $scope.searchMatch = function(nuu, search_term) {

            let found = false;

            if(search_term && search_term.length > 2 && nuu.content) {

                let term = search_term.toLowerCase();
                for(var i = 0; i < nuu.content.length; i++) {

                    let content = nuu.content[i];
                    for (var k in content) {

                        if (content.hasOwnProperty(k)) {

                            let lines = content[k];
                            for(var j = 0; j < lines.length; j++) {

                                let str = lines[j].toLowerCase();
                                let term1 = " " + term + " ";
                                found = (str.indexOf(term1) > -1);
                                if(found) {

                                    break;
                                }

                                term1 = "(" + term + ")";
                                found = (str.indexOf(term1) > -1);
                                if(found) {

                                    break;
                                }

                                term1 = "(" + term + ",";
                                found = (str.indexOf(term1) > -1);
                                if(found) {

                                    break;
                                }

                                term1 = " " + term + ")";
                                found = (str.indexOf(term1) > -1);
                                if(found) {

                                    break;
                                }

                                erm1 = " " + term + ",";
                                found = (str.indexOf(term1) > -1);
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
            }

            return found;
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
