<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css"  href="../ww.admin/login/login.css" />
    </head>
    <body>
        <div id="header"></div>
    <div class="tabs">,
        <ul>
            <li><a href="#tab1">Login</a></li>
            <li><a href="#tabs">Forgotten password</a></li>
        </ul>
        <div id="tab1">
            <form method="post"
                  action="../ww.incs/login.php?redict=<?php echo $_SERVER['PHP_SELF'];?>">
                <table>
                    <tr><th>email</th><td>
                            <input id="email" name="email" type="email" />
                        </td></tr>
                    <tr><th>password</th><td>
                            <input type="password" name="password"
                        </td></tr>
                    <tr><th colspan="2" align="right">
                            <input name="action" type="submit" value="login" class="login" />
                        </th> </tr>
                </table>
            </form>
        </div>
        <div id = "tab2">
            <form method = "post"
                action="../ww.incs/forgotten-password.php?redict=<?php echo $_SERVER['PHP_SELF'];?>">
                <table>
                    <tr><th>email</th><td>
                            <input  id="email" name="email" type="text" />
                        </td></tr>
                    <tr><th colspan="2" align="right">
                            <input name="Action" type="submit" value="resent my password" class="login" />
                        </th> </tr>
                </table>
            </form>
        </div>
    </div>
    </body>
</html>