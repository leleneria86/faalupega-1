<?php

?>

<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-route.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

<script src="js/apps/myApp.js"></script>
<script src="js/model/as.js"></script>
<script src="js/controllers/my_controller.js"></script>
<script src="js/services/MyService.js"></script>

<div ng-app="MyApp" ng-controller="MyController" data-ng-init="load()">

    <div class="col-sm-2" ng-hide="selected_grandchild">

        <div>
            <br/>
            <input ng-model="search_text" type="text" placeholder="Search" ng-change="onChangeEvent()">
        </div>
        <br/>
        <div>
            <select id="parentSelect" name="parentSelect" class="form-control"
                    ng-model="selected_parent"
                    ng-change="onChangeParent()"
                    ng-options="parent.name for parent in parents" style="width:200px">
            </select>
        </div>

        <div ng-show="selected_parent.content.length > 0">
            <br/>
            {{selected_parent.content}}
        </div>

        <div ng-show="children_filtered.length > 0">
            <br/>
            <select id="childSelect" name="childSelect" class="form-control"
                    ng-model="selected_child"
                    ng-change="onChangeEvent()"
                    ng-options="child.name for child in children_filtered" style="width:200px">
            </select>
            <span ng-show="selected_child && !show_child_content" style="cursor:pointer" ng-click="onClickChildContents()"><i class="fa fa-expand"></i></span>
            <span ng-show="selected_child && show_child_content" style="cursor:pointer" ng-click="onClickChildContents()"><i class="fa fa-compress"></i></span>
        </div>

        <div ng-show="show_child_content && selected_child.content.length > 0">
            <br/>
            <div ng-repeat="line in selected_child.content">
                {{line}}
            </div>
        </div>

        <br/>
        <div ng-show="selected_child || search_text" ng-repeat="grandchild in grandchildren_filtered | filter:{parent_id:selected_child.id,content:search_text}">
            <span ng-click="onGrandchild(grandchild);" style="color:blue;cursor:pointer;font-size: large">{{grandchild.name}}</span>
        </div>
    </div>

    <div class="col-sm-12" ng-show="selected_grandchild">
        <br/>
        <div ng-repeat="content in selected_grandchild.content">
            <div ng-repeat="(key,lines) in content">
                <br/>
                <strong>{{key}}</strong>
                <div ng-repeat="line in lines">
                    {{line}}
                </div>
            </div>
        </div>
        <br/>
        <span ng-click="onBack();" style="color:blue;cursor:pointer">Back</span>
    </div>
</div>

</body>
</html>