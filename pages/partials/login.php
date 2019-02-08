<?PHP

?>

<div>
    <div class="col-sm-12">
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="given_name">Email</label>
            <input required type="text" style="width:160px" class="form-control" ng-model="user.email" id='login_email' placeholder="Email"/>
        </div>
        <div>
            <span class="text-danger">* </span>
            <label class="control-label" for="given_name">Password</label>
            <input required type="password" style="width:160px" class="form-control" ng-model="user.password" id='login_password' placeholder="Password"/>
        </div>
        <div>
            <button class="button is-primary" id="login_user_btn" ng-click="onLoginUser()">Log In</button>
        </div>
        <div>
            <span ng-click="gotoRegisterView()" style="color:blue;cursor:pointer;font-size: large">Register</span>
        </div>
        <div>
            <span class="text-danger">{{login_message}}</span>
        </div>
    </div>
</div>
