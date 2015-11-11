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
                <h4>TaskrMastr Login</h4>
                <div id="form_error">
                    <? if ($_GET['error'] == 'loginAuth'): ?>
                        <p id="error">Email or password is incorrect. Please try again.</p>
                        <p>Forgot your password? Reset here.</p>
                    <? endif; ?>
                </div>

                <div class="login_form">
                    <form method="POST" action="/users/p_login">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="submit" value="Login" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div id="footer">
        Copyright &copy 2015 TaskrMastr. All Rights Reserved.
    </div>
</div>

