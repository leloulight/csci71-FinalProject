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
                    <form class="navbar-form pull-right" method="POST" action="/index/login">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="submit" value="Login" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div id="content">
        <div class="jumbotron">
            <h1>Welcome to TaskrMastr!</h1>
            <p>Revolutionizing the way you manage your tasks.</p>
        </div>

        <div class="container">
            <div class="col-md-6">
                <div class="app_info">
                    <h2>Manage tasks like never before</h2>
                    <div class="app_info_one">
                        <img src="../uploads/task.png" />
                        <span>Create and monitor your tasks</span>
                    </div>
                    <br />
                    <div class="app_info_two">
                        <img src="../uploads/share.png" />
                        <span>Share tasks with others</span>
                    </div>
                    <br />
                    <div class="app_info_three">
                        <img src="../uploads/email.png" />
                        <span>Receive email and phone notifications</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="signup_home">
                    <h2>Sign Up</h2>
                    <p>It's free and always will be.</p>
                    <form method="POST" action="/index/signup" id="signup_form">
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