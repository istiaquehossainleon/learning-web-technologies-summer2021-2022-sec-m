<html>

<head>
    <title>dot_tripPlanner</title>
</head>

<body>
    <form method="post" action="signUpData_sql.php">
        <fieldset>
            <legend>Sign Up</legend>
            <p>It's quick and easy.</p>
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="name" name="fname" value=""></td>
                </tr>
                <tr>
                    <td>Sure Name</td>
                    <td><input type="name" name="sname" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
						<td>Date of Birth</td>
						<td><input type="date" name="dob" value="" ></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
								<input type="radio" name="gender" value="" > Male
								<input type="radio" name="gender" value="" > Female
								<input type="radio" name="gender" value="" > other
								
						</td>
               
                <tr>
                   
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Sign Up">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>
