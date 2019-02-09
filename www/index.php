<!-- <?php

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

    <div class="col-sm-12" ng-hide="selected_nuu">
        <div>
            <br/>
            <input ng-model="search_text" type="text" placeholder="Search" ng-change="onChangeEvent()">
            <input type="checkbox" ng-model="name_only" ng-change="onChangeEvent()"/>&nbspName
            <input type="checkbox" ng-model="exact_match" ng-change="onChangeEvent()"/>&nbspExact
        </div>
        <br/>
        <div class="input-group">
            <select id="motuSelect" name="motuSelect" class="form-control"
                    ng-model="selected_motu"
                    ng-change="onChangeMotu()"
                    ng-options="motu.name for motu in motus" style="width:160px">
            </select>
            &nbsp;
            <span ng-show="selected_motu.id != 0 && !show_motu_content" style="cursor:pointer" ng-click="onClickMotuContents()"><i class="fa fa-expand"></i></span>
            <span ng-show="selected_motu.id != 0 && show_motu_content" style="cursor:pointer" ng-click="onClickMotuContents()"><i class="fa fa-compress"></i></span>
        </div>

        <div ng-show="show_motu_content && selected_motu.content.length > 0">
            <br/>
            <div ng-repeat="line in selected_motu.content">
                {{line}}
            </div>
        </div>

        <div ng-show="itumalos_filtered.length > 0" class="input-group">
            <br/>
                <select id="itumaloSelect" name="itumaloSelect" class="form-control"
                        ng-model="selected_itumalo"
                        ng-change="onChangeEvent()"
                        ng-options="itumalo.name for itumalo in itumalos_filtered" style="width:160px">
                </select>
            &nbsp;
                <span ng-show="selected_itumalo.id != 0 && !show_itumalo_content" style="cursor:pointer" ng-click="onClickItumaloContents()"><i class="fa fa-expand"></i></span>
                <span ng-show="selected_itumalo.id != 0 && show_itumalo_content" style="cursor:pointer" ng-click="onClickItumaloContents()"><i class="fa fa-compress"></i></span>
        </div>

        <div ng-show="show_itumalo_content && selected_itumalo.content.length > 0">
            <br/>
            <div ng-repeat="line in selected_itumalo.content">
                {{line}}
            </div>
        </div>

        <br/>
        <div ng-show="search_text || (selected_motu.id && selected_itumalo.id)" ng-repeat="nuu in nuus_filtered">
            <span ng-click="onNuu(nuu);" style="color:blue;cursor:pointer;font-size: large">{{nuu.name}}</span> <span ng-show="!selected_itumalo.id"> - {{getItumaloNameById(nuu.itumalo_id)}}</span>
        </div>
    </div>

    <div class="col-sm-12" ng-if="selected_nuu">
        <br/>
        <div ng-repeat="content in selected_nuu.content">
            <div ng-repeat="(key,lines) in content">
                <br/>
                <strong>{{key}}</strong>
                <div ng-repeat="line in lines">
                    {{line}}
                </div>
            </div>
        </div>
        <br/>
        <div ng-repeat="pitonuu in pitonuus_filtered">
            <span ng-click="onPitonuu(pitonuu);" style="color:blue;cursor:pointer;font-size: large">{{pitonuu.name}}</span>
            <div ng-if="pitonuu.expanded" ng-repeat="content in pitonuu.content">
                <div ng-repeat="(key,lines) in content">
                    <br/>
                    <span ng-if="key != 'Fa\'alupega'"><strong>{{key}}</strong></span>
                    <div ng-repeat="line in lines">
                        {{line}}
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <br/>
        <span ng-click="onBack();" style="color:blue;cursor:pointer">Back</span>
    </div>
</div>

</body>
</html>

 -->
<?php
?>

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="js/apps/myApp.js"></script>
<script src="js/model/User.js"></script>
<script src="js/controllers/my_controller.js"></script>
<script src="js/services/MyService.js"></script>

<style>
    .listItem:hover {
        color: blue;
    }
</style>

<div ng-app="MyApp" ng-controller="MyController" data-ng-init="load()">

    <div class="col-sm-12" ng-show="isRegisterMode()">
        <?php require_once '../pages/partials/register.php' ?>
    </div>

    <div class="col-sm-12" ng-show="isLoginMode()">
        <?php require_once '../pages/partials/login.php' ?>
    </div>

    <div class="col-sm-12" ng-show="!selected_nuu && isActiveMode()">
        <div>
            <br/>
            <div class="columns">
                <div class="column">
                    <input ng-model="search_text" type="text" placeholder="Search" ng-change="onChangeEvent()">
                </div>
                <div class="column">
                    <input type="checkbox" ng-model="name_only" ng-change="onChangeEvent()"/>&nbspName
                    <input type="checkbox" ng-model="exact_match" ng-change="onChangeEvent()"/>&nbspExact
                </div>
            </div>
        </div>
        <br/>
        <div class="input-group">
            <select id="motuSelect" name="motuSelect" class="form-control"
                    ng-model="selected_motu"
                    ng-change="onChangeMotu()"
                    ng-options="motu.name for motu in motus" style="width:160px">
            </select>
            &nbsp;
            <span ng-show="selected_motu.id != 0 && !show_motu_content" style="cursor:pointer" ng-click="onClickMotuContents()"><i class="fa fa-expand"></i></span>
            <span ng-show="selected_motu.id != 0 && show_motu_content" style="cursor:pointer" ng-click="onClickMotuContents()"><i class="fa fa-compress"></i></span>
        </div>

        <div ng-show="show_motu_content && selected_motu.content.length > 0">
            <br/>
            <div ng-repeat="line in selected_motu.content">
                {{line}}
            </div>
        </div>

        <div ng-show="itumalos_filtered.length > 0" class="input-group">
            <br/>
                <select id="itumaloSelect" name="itumaloSelect" class="form-control"
                        ng-model="selected_itumalo"
                        ng-change="onChangeEvent()"
                        ng-options="itumalo.name for itumalo in itumalos_filtered" style="width:160px">
                </select>
            &nbsp;
                <span ng-show="selected_itumalo.id != 0 && !show_itumalo_content" style="cursor:pointer" ng-click="onClickItumaloContents()"><i class="fa fa-expand"></i></span>
                <span ng-show="selected_itumalo.id != 0 && show_itumalo_content" style="cursor:pointer" ng-click="onClickItumaloContents()"><i class="fa fa-compress"></i></span>
        </div>

        <div ng-show="show_itumalo_content && selected_itumalo.content.length > 0">
            <br/>
            <div ng-repeat="line in selected_itumalo.content">
                {{line}}
            </div>
        </div>

        <br/>
        <div ng-show="search_text || (selected_motu.id && selected_itumalo.id)" ng-repeat="nuu in nuus_filtered">
            <span ng-click="onNuu(nuu);" class="listItem" style="cursor:pointer;font-size: large">{{nuu.name}}</span> <span ng-show="!selected_itumalo.id"> - {{getItumaloNameById(nuu.itumalo_id)}}</span>
        </div>
    </div>

    <div class="col-sm-12" ng-if="selected_nuu">
        <br/>
        <span ng-click="onBack();" style="cursor:pointer"><i class="fa fa-arrow-left"></i></span>
        <div ng-repeat="content in selected_nuu.content">
            <div ng-repeat="(key,lines) in content">
                <br/>
                <strong>{{key}}</strong>
                <div ng-repeat="line in lines">
                    {{line}}
                </div>
            </div>
        </div>
        <br/>
        <div ng-repeat="pitonuu in pitonuus_filtered">
            <span ng-click="onPitonuu(pitonuu);" style="cursor:pointer;font-size: large">{{pitonuu.name}}</span>
            <div ng-if="pitonuu.expanded" ng-repeat="content in pitonuu.content">
                <div ng-repeat="(key,lines) in content">
                    <br/>
                    <span ng-if="key != 'Fa\'alupega'"><strong>{{key}}</strong></span>
                    <div ng-repeat="line in lines">
                        {{line}}
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
</div>

</body>
</html>


