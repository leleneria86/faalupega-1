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
        $scope.search_text;
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

        $scope.onChangeMotu = function() {

            if($scope.selected_motu) {

                $scope.setItumalos($scope.selected_motu.id);
                $scope.selected_itumalo = $scope.itumalos_filtered[0];
                $scope.onChangeItumalo();
            }
        };

        $scope.onChangeItumalo = function() {

            if ($scope.selected_itumalo) {

                $scope.setNuus($scope.selected_itumalo.id);
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

        $scope.setNuus = function(motu_id) {

            $scope.nuus_filtered = [];
            if(motu_id > 0) {

                for (var i = 0; i < $scope.nuus.length; i++) {

                    if ($scope.nuus[i].motu_id == motu_id) {

                        $scope.nuus_filtered.push($scope.nuus[i]);
                    }
                }
            }
        };

        // $scope.setPitonuus = function(motu_id) {
        //
        //     $scope.pitonuus_filtered = [];
        //     if(motu_id > 0) {
        //
        //         for (var i = 0; i < $scope.pitonuus.length; i++) {
        //
        //             if ($scope.pitonuus[i].motu_id == motu_id) {
        //
        //                 $scope.pitonuus_filtered.push($scope.pitonuus[i]);
        //             }
        //         }
        //     }
        // };


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

    myApp.filter('filterChild', function() {
        return function(dataArray, searchTerm){
            if(!dataArray ) {
                return;
            }
            /* when term is cleared, return full array*/
            if( !searchTerm){
                return dataArray;
            }else{
                /* otherwise filter the array */
                var term=searchTerm.toLowerCase();
                return dataArray.filter(function(item){

                    var match = false;
                    if(item.id !== null &&
                        item.name.toLowerCase().indexOf(term) > -1
                    )
                    {
                        match = true;
                    }
                    return match;
                });
            }
        }
    });
