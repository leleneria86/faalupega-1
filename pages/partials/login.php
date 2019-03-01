<?PHP

?>

<section>
    <div class="container">
        <div class="col-sm-12">
                    <h1 class="title">
                Tusi Fa'alupega
            </h1>
            <div>
                <span class="text-danger">* </span>
                <label class="control-label" for="login_email">Email</label>
                <input required type="text" style="width:200px" class="form-control" ng-model="user.email" id='login_email' placeholder="Email"/>
            </div>
            <div>
                <span class="text-danger">* </span>
                <label class="control-label" for="login_password">Password</label>
                <input required type="password" style="width:200px" class="form-control" ng-model="user.password" id='login_password' placeholder="Password"/>
            </div>
            <div>
                <br/>
                <button class="button is-primary" id="login_user_btn" ng-click="onLoginUser()">Log In</button>
            </div>
            <div>
                <a ng-click="gotoRegisterView()">Register</a>
            </div>
            <div>
                <span class="text-danger">{{login_message}}</span>
            </div>
        </div>
    </div>
</section>
