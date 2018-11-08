var myApp = angular.module('MyApp');
    myApp.controller('MyController', function($scope, $filter, MyService) {
        $scope.name = null;
        $scope.children;
        $scope.children_filtered;
        $scope.selected_child;
        $scope.grandchildren;
        $scope.grandchildren_filtered;
        $scope.selected_grandchild;
        $scope.parents;
        $scope.selected_motu;
        $scope.search_text;
        $scope.show_child_content;

        $scope.load = function() {

            MyService.load().then(function(data) {

                    $scope.children = data.children;
                    $scope.parents = data.parents;
                    $scope.grandchildren_filtered = $scope.grandchildren = data.grandchildren;
                    $scope.selected_motu = $scope.parents[0];
                    $scope.safeApply();
                },
                function(result) {

                    //$.growlUI('Oops<i class="fa fa-exclamation text-danger"></i>', 'There was an error loading the list of features.');
                });
        };

        $scope.onChangeParent = function() {

            if($scope.selected_motu) {

                $scope.setChildren($scope.selected_motu.id);
                $scope.selected_child = $scope.children_filtered[0];
                $scope.onChangeEvent();
            }
        };

        $scope.onChangeEvent = function() {

            if ($scope.selected_child) {


                $scope.setGrandChildren($scope.selected_child.id);
            }
        };

        $scope.onClickChildContents = function() {

            $scope.show_child_content = !$scope.show_child_content;
        };

        $scope.onGrandchild = function(grandchild) {

            $scope.selected_grandchild = grandchild;
        };

        $scope.onBack = function() {

            $scope.selected_grandchild = null;
            $scope.onChangeEvent();
        };

        $scope.setChildren = function(parent_id) {

            $scope.children_filtered = [{id:0, name:"All", content:"",parent_id:null}];
            for(var i = 0; i < $scope.children.length; i++) {

                if($scope.children[i].parent_id == parent_id) {

                    $scope.children_filtered.push($scope.children[i]);
                }
            }
        };

        $scope.setGrandChildren = function(parent_id) {

            $scope.grandchildren_filtered = [];
            if(parent_id > 0) {

                for (var i = 0; i < $scope.grandchildren.length; i++) {

                    if ($scope.grandchildren[i].parent_id == parent_id) {

                        $scope.grandchildren_filtered.push($scope.grandchildren[i]);
                    }
                }
            }
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
