<?PHP

?>

<div>
    <div class="col-sm-12">
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="given_name">First Name</label>
            <input required type="text" style="width:260px" class="form-control" ng-model="user.first_name" id='register_first_name' placeholder="First"/>
        </div>
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="given_name">Last Name</label>
            <input required type="text" style="width:260px" class="form-control" ng-model="user.last_name" id='register_last_name' placeholder="Last"/>
        </div>
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="email"><span id="emaillabel">Email</span></label>
            <input required type="text" style="width:260px" class="form-control" ng-model="user.email" id='register_email' placeholder="Email Address"/>
        </div>
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="given_name">Password</label>
            <input required type="password" style="width:160px" class="form-control" ng-model="user.password" id='register_password' placeholder="Password"/>
        </div>
        <div>
            <button class="button is-primary" id="register_user_btn" ng-click="onRegisterUser()">Register</button>
        </div>
        <div>
            <span class="text-danger">{{message}}</span>
        </div>
    </div>
</div>
