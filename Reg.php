<html>
        <head>
				<style>
						.color
						{
							color:white;
						}

						#reg
						{
							position: relative;
							top: 150px;
						}

				</style>
        </head>

        <body background="images (2).jpeg">
		

				<center>
					<form action="abc.php" id="reg">
						<table hight="30%">
					     

	
							<tr bgcolor="#cbcbc">
							<th colspan="2">Registration Form </th>
							</tr>

							<tr>
							<td class="color">Name :</td>
							<td><input type="text" placeholder="Name" required></td>
							</tr>

							<tr>
							<td class="color">Age :</td>
							<td><input type="text" placeholder="Age" required></td>
							</tr>

							<tr>
							<td class="color">Sex :</td>
							<td><input type="radio" name="sex" value="male"  required >male<br>
							<input type="radio" name="sex" value="female"  required>female</td>
							</tr>

							<tr>
							<td class="color">Email :</td>
							<td><input type="text" placeholder="E-mail" required></td>
							</tr>

                            <tr>
							<td class="color">Password :</td>
							<td><input type="password" placeholder="Password" required ></td>
							</tr>

						</table>
							<br>
                        <button type="submit" class="bottom">Registration</button>
					
						<button type="login" class="bottom" href="Login.php">Login</button>			
					
					</form>
					
				</center>
		</body>
</html>