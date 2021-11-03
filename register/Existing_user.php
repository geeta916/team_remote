<html>
    <head>
        <br><br>
        <title>Search data from Roll no</title>

        <style>
            body{
                background: rgb(169,114,207);
background: radial-gradient(circle, rgba(169,114,207,1) 9%, rgba(45,167,151,1) 31%, rgba(45,167,151,1) 56%, rgba(139,97,196,1) 89%) ;
            }
            table,th,td{
                border: 2px solid black;
                width: 1100px;
                background-color: aqua;
            }
            .btn{
                width: 20%;
                height: 5%;
                font-size: 22px ;
                padding: 0px;
            }
        </style>

    </head>
    <body>
        <center>
            <h1>Search a single data from database using Html and PHP.</h1>
            <br><br>
            <h2>Retrieve data from database .</h2>

            <div class = "container">
                <form action = "" method = "GET">
                <input type="text" required="" name="search"  placeholder="Search by id" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];} ?>">
				<button type="submit" >Search</button>
                </form>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Password</th>
                        
                    </tr><br><br>

                    <?php
					
                    include 'connection.php';
                    if(isset($_GET['search']))
                    {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM registered_users WHERE CONCAT(id) LIKE '%$filtervalues%'";
                        $query_run = mysqli_query($con,$query);
                        if (mysqli_num_rows($query_run) > 0)
                        {
                            foreach ($query_run as $ro) {
                    ?>
			<tr>
				<td ><?php echo $ro['id'];?></td>                
				<td ><?php echo $ro['name']; ?></td>
				<td ><?php echo $ro['mobile'];?></td>
				<td ><?php echo $ro['email'];?></td>
				<td ><?php echo $ro['password'];?></td>

			</tr>
			<?php
			}
			}
			else
			{
			?>
			<tr>
				<td colspan="20">Record not found on the table</td>
			</tr>
			<?php
			}
			}
			?>
                </table>
                <br><br>      
            </div>
            <br><br>
            <button type = "button" onclick = "window.location.href = 'index.php'">Back </button> 
        </center>
    </body>