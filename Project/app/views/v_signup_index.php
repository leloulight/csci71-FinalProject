<div id="wrapper">
    <div id="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-logo" href="/">
                        <img alt="Brand" src="../uploads/logo.png" class="logo">
                    </a>
                    <a class="navbar-brand" href="/">TaskrMastr</a>
                </div>

                <div class="navbar-collapse">

                </div>
            </div>
        </nav>
    </div>

    <div id="content">
        <div class="login_container">
            <div class="container">
                <h4>TaskrMastr Sign Up</h4>
                <div id="form_error">
                    <? if ($_GET['error'] == 'email_exists'): ?>
                        <p id="error">Email address already exists.</p>
                        <p>Use another email address or recover account.</p>
                    <? elseif ($_GET['error'] == 'empty_fields'): ?>
                        <p id="error">Fields Error.</p>
                        <p>Please fill out all fields.</p>
                    <? elseif ($_GET['error'] == 'username_exists'): ?>
                        <p id="error">Username already exists.</p>
                        <p>Please enter another usernmae.</p>
                    <? endif; ?>
                </div>

                <div class="login_form">
                    <form method="POST" action="/users/p_signup" id="signup_form">
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                        <input type="submit" value="Sign Up" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div id="footer">
        Copyright &copy 2015 TaskrMastr. All Rights Reserved.
    </div>
</div>

