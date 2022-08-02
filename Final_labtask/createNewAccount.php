<html>

<head>
    <title>dot_tripPlanner</title>
    <script>
        function validateForm() {
        let fname = document.getElementsByTagfname["createNewAccount"]["fname"].value;
        let sname = document.getElementsByTagsname["createNewAccount"]["sname"].value;
        let email = document.getElementsByTagemail["createNewAccount"]["email"].value;
        let password = document.getElementsByTagpassword["createNewAccount"]["password"].value;
        let cpassword = document.getElementsByTagcpassword["createNewAccount"]["cpassword"].value;
        let dob = document.getElementsByTagdob["createNewAccount"]["dob"].value;
        let gender = document.getElementsByTaggender["createNewAccount"]["gender"].value;
        if (fname == "" || sname == "" || email == "" || password == "" || cpassword == "" || dob == "" || gender == "") {
        alert("Please fill-out your personal data!");
        return false;
  }
}
</script>
</head>

<body>
    <form name="createNewAccount" method="post" action="signUpData_sql.php" onsubmit="return validateForm()">
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
                    <td>Confirm Password</td>
                    <td><input type="password" name="cpassword" value=""></td>
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
