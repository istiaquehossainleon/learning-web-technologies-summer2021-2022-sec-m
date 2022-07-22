<html>

<head>
    <title>dot_tripPlanner</title>
</head>

<body>
    <form method="post" action="checkLogin.php">
        <fieldset>
            <legend>Travel Guide Login</legend>
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="login" value="Log In">
                        <button type="submit" formaction="createNewAccount.php">Create New Account</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>
