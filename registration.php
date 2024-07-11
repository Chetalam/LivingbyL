<h1>Registration</h1>
<?php include('header.php'); ?>
<?php require_once("templates/db_connect.php"); ?>

      <h1> Would you like to register?</h1>
    <p>Registration is not a force on your hand to build a home.<br></br>
        It is simply a way of guaranteeing yourself fast and efficient service if and when you decide you want to embark in this new journey.<br></br>
        We would love it if you could consider embarking on this exciting journey with us.
        <table >
            
            <tr>
                <th>Name</th>
                <th>House Type</th>
                <th>Location</th>
                <th>Budget</th>
            </tr>

            <tr>
                <td>Estella Mwikali</td>
                <td>Contemporary</td>
                <td>Argyle Avenue</td>
                <td>300,000,000</td>
            </tr>

            <tr>
                <td>Chelsea Kanini</td>
                <td>Country</td>
                <td>Swile City</td>
                <td>400,000,000</td>
            </tr>

            <tr>
                <td>Allan Maxwell</td>
                <td>Mediterranean</td>
                <td>Venezuelan Beach</td>
                <td>50,000,000</td>
            </tr>

            <tr>
                <td>Julian Ndegwa</td>
                <td>Victorian</td>
                <td>The Alps</td>
                <td>30,000,000</td>
            </tr>
 
        </table>

        <form>
            Full name : </br>
            <input type="text" name="fullname"/><br/><br/><br/> 
            Budget : </br>
            <input type="text" name="budget"/><br/><br/><br/>
            Password :</br> 
            <input type="password" name="password"/><br/><br/><br/>
            Date of Birth :</br>
            <input type="date" name="dateofbirth"/>/><br/><br/><br/>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="prefer not to say">Prefer not to say</option>
            </select><br/><br/><br/>
            Description:</br>
            <textarea rows="5" cols="50" name="description" placeholder="Enter description here..."></textarea></br>
            <input type="submit" name="Submit" value="Submit"/>
            </form>
    

    </p>

<?php include ('footer.php'); ?>