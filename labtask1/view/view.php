<html>
    <head>
        <h1>Registration Form </h1>
</head>
<body>
<form action="../contorl/contorl.php" method="POST">
<table>

<tr>
<td>First Name:</td><td> <input type="text" name="fname" ></td></tr>

<tr>
<td>Last Name:</td><td> <input type="text" name="lname" ></td></tr>

<tr>
<td>Age:</td><td> <input type="number" name="age" ></td></tr>
<tr>

<td>Designation:</td><td><input type="radio" name="Designation">Junior Programmer
<input type="radio" name="Designation">Senior Programmer
<input type="radio" name="Designation">Project Lead
</td></tr>

<tr><td>Preferred language </td>
<td><input type="checkbox" name="java">java
<input type="checkbox" name="PHP">PHP
<input type="checkbox" name="Cplusplus">C++
</td></tr>

<tr>
<td>E-mail:</td><td> <input type="text" name="email" ></td></tr>
</tr>

<tr>
<td>Enter your password</td><td><input type="password"></td>
</tr>

<tr>
<td>Please choose a file</td><td><button type="submit"> Choose File</submit></td><td>No file chosen </td>
</tr>

<tr><td><button type="submit"> Submit</submit>
<button type="reset"> Reset</reset></td></tr>

</table>
</form>
</body>
</html>



