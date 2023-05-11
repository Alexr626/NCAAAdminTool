<!--CPSC 304 2020 WT2 Project -- NCAA Basketball Database -->

<html>
    <head>

        <title>CPSC 304 - NCAA Basketball Database</title>
        <style>
            body {
                font-family: 'Leelawadee', Arial;
                font-size:12px;
                font-weight:400;
                padding:20px 30px;
                position:relative;
                line-height:100%;
                background:#fff;
                background-color: #E7E7E7; 
                /* DDDDDA, E0ECDE, C2C8C5, BCE6FF */
            }
            #header {
                background-color: #fff;
                color: #363636;
                cursor: default;
                font-size: 1.5em;
                height: 4.5em;
                left: 0;
                line-height: 4.4em;
                position: fixed;
                text-transform: uppercase;
                top: 1em;
                width: 100%;
                z-index: 10000;
                z-index: 10001;
	        }
		    #header h1 {
                font-weight: 600;
                left: 2.25em;
                margin: 12px;
                padding:10px 0px 10px 20px;
                font-family:'Leelawadee', Arial;
                text-transform:uppercase;
                color:#363636;
            }

            #header nav {
                height: inherit;
                line-height: inherit;
                position: absolute;
                right: 1.25em;
                font-size:20px;
                margin: -12px;
                top: 0;
                vertical-align: middle;
            }

                #header nav ul {
                    list-style: none;
                    margin: 0;
                    padding-left: 0;
                }

                    #header nav ul li {
                        border-radius: 4px;
                        display: inline-block;
                        margin-left: 2.5em;
                        padding-left: 0;
                    }

                        #header nav ul li a {
                            -moz-transition: color 0.2s ease-in-out;
                            -webkit-transition: color 0.2s ease-in-out;
                            -ms-transition: color 0.2s ease-in-out;
                            transition: color 0.2s ease-in-out;
                            color: #666;
                            display: inline-block;
                            text-decoration: none;
                        }

                            #header nav ul li a:hover {
                                color: #363636;
                            }

                        #header nav ul li:first-child {
                            margin-left: 0;
                        }

                        #header nav ul li .button {
                            border-color: rgba(144, 144, 144, 0.25);
                            box-shadow: none;
                            height: 3em;
                            line-height: 2.9em;
                            margin-bottom: 0;
                            padding: 0 1.5em;
                            position: relative;
                            top: -0.075em;
                            vertical-align: middle;
                        }

            #header .container {
                position: relative;
            }

                #header .container h1 {
                    left: 0;
                }

                #header .container nav {
                    right: 0;
                }

            #header.alt {
                background-color: transparent;
                border: 0;
                box-shadow: none;
                height: 3.25em;
                line-height: 3.25em;
                position: absolute;
            }

                #header.alt h1 {
                    color: #000000;
                    left: 2.5em;
                    top: 2em;
                }

                    #header.alt h1 a {
                        color: #000;
                    }

                #header.alt nav {
                    right: 2em;
                    top: 2em;
                }

                    #header.alt nav a {
                        color: #000;
                    }

                        #header.alt nav a:active, #header.alt nav a:hover {
                            color: #000;
                        }

                #header.alt .button {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #ffffff !important;
                }
            h2 {
                font-family:'Leelawadee', Arial;
                text-transform:uppercase;
                font-weight:600;
                background:#E79796;
                /* background:#E8175D; */
                padding:10px 0px 10px 20px;
                color:#fff;
                letter-spacing:1px;
                clip-path: polygon(0% 0, 40% 0%, 40% 100%, 0% 100%);
            }
            footer {
                font-size:10px;
                text-align:center;
                width:100%;
                line-height:100%;
                position:absolute;
                bottom:0px;
                padding-top:20px;
                margin:0px;
            }
            .inline {
                display:flex;
                align-items:center;
                flex-wrap:wrap;
            }
            .inline form {
                margin:2px;
            }
            input[type=submit], input[type=reset], input[type=button] {
                background:#444;
                font-size:15px;
                padding:5px 12px;
                color:#fff;
                font-family:'Leelawadee', Arial;
                font-weight:600;
                text-transform:uppercase;
                transition:all 0.3s ease-in-out;
                letter-spacing:1.5px;
            }
            input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
                background:#AAC9C4;
            }
            input[type=text] {
                padding:10px 20px;
                font-family:Roboto, Arial;
                font-weight:400;
                border:1px solid #ccc;
            }
            .typefilter input {
                font-size:13px;
                padding:3px 8px;
                letter-spacing:1px;
                text-shadow:1px 1px 0px rgba(0,0,0,0.5);
            }
            .typefilter input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
                border:2px solid #222;
            }
            .left {
                width:34%;
                height:100%;
                position:absolute;
                top:0px; left:0px;
            }
            .right {
                width:64%;
                height:100%;
                position:absolute;
                top:0px; right:0;
                font-size:13px;
            }
            .hide-me { 
                display: none; 
            }
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }
            .content-table thead tr {
                background-color: #45ada8;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }
            .content-table th,
            .content-table td {
                padding: 12px 15px;
                font-size: 16px;
            } 
            .content-table tbody tr{
                border-bottom: 1px solid #dddddd;
            }
            .content-table tbody tr:hover {
                background-color:#f5f5f5;
                transform: scale(1.02);
            }
            .content-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }
            .content-table tbody tr:last-of-type {
                border-bottom: 2px solid #45ada8;
            }
            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }
        </style>

        <header id="header" class="alt">
            <h1><strong><a href="https://www.ncaa.com/">NCAA</a></strong> Basketball Database</h1>
            <nav id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="updateinfo.php">Make Data Changes</a></li>
                    <li><a href="ncaastats.php">NCAA Basketball Statistics</a></li>
                </ul>
            </nav>
        </header>

    </head>

    <body>
        <br></br>
        <br></br>
        <br></br>
        <hr/>

        <h2>Reset To Default</h2>
        <p style='font-size:15px;'><b>Only press this button if you wish to reset all of the tables.</b></p>

        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset Database" name="handleReset"></p>
        </form>

        <hr/>

        <h2>Select entire table (pick from drop-down below)</h2>
        <form method="GET" action="updateinfo.php">
            <input type="hidden" id="selectionQueryRequest" name="selectionQueryRequest">
            <label for="getTable" style='font-size:15px;'>Select Table</label>
            <select style = 'margin-left: 20px;' id="getTable" name="getTable">
                <option id="Game" value="Game">Game</option>
                <option id="Game Highlights" value="`Game Highlights`">Game Highlights</option>
                <option id="Headcoach" value="Headcoach">Coach</option>
                <option id="Mascot" value="Mascot">Mascot</option>
                <option id="NCAAteam" value="NCAAteam">Team</option>
                <option id="Player" value="Player">Player</option>
                <option id="Regular Season Game" value="`Regular Season Game`">Regular Season Game</option>
                <option id="Tournament Game`" value="`Tournament Game`">Tournament Game</option>
                <option id="Transactions" value="Transactions">Transaction</option>
                <option id="Venue" value="Venue">Venue</option>
            </select>
            <br></br>
            <input type="submit" value="Show Table" name="handleSelection">
        </form>

        <hr/>

        <h2>Insert values into player table</h2> 
        <p style='font-size:15px;'><b>The query inserts a new entry into the Player Table.</b></p>
        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            <label style='font-size:15px;'>Player ID: <input style='font-size:15px;' type="text" name="insPlayerID"><br/><br/></label>
            <label style='font-size:15px;'>Coach ID: <input style='font-size:15px;' type="text" name="insCoachID"><br/><br/></label>
            <label style='font-size:15px;'>Team ID: <input style='font-size:15px;' type="text" name="insTeamID"><br/><br/></label>
            <label style='font-size:15px;'>Player Name: <input style='font-size:15px;' type="text" name="insPlayerName"><br/><br/></label>
            <label style='font-size:15px;'>Height: <input style='font-size:15px;' type="text" name="insHeight"><br/><br/></label>
            <label style='font-size:15px;'>Jersey Num: <input style='font-size:15px;' type="text" name="insJerseyNum"><br/><br/></label>
            <input type="submit" value="Insert Data" name="handleInsertion"></p>
        </form>
        </div>

        <hr/>

        <h2>Update Information for Mascot Table</h2>
        <p style='font-size:15px;'><b>The query updates the mascot name and type.</b></p>
        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            <label style='font-size:15px;'>Old Mascot Name: <input style='font-size:15px;' type="text" name="oldMascotName"><br/><br/></label>
            <label style='font-size:15px;'>Old Mascot Type: <input style='font-size:15px;' type="text" name="oldMascotType"><br/><br/></label>
            <label style='font-size:15px;'>New Mascot Name: <input style='font-size:15px;' type="text" name="newMascotName"><br/><br/></label>
            <label style='font-size:15px;'>New Mascot Type: <input style='font-size:15px;' type="text" name="newMascotType"><br/><br/></label>
            <input type="submit" value="Update" name="handleUpdate"></p>
        </form>

        <hr />

        <h2>Delete Information from Game Table</h2>
        <p style='font-size:15px;'><b>This query deletes all records from all tables corresponding to the GameID entered.</b></p>
        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="deleteQueryRequest" name="deleteQueryRequest">
            <label style='font-size:15px;'>Game ID: <input style='font-size:15px;' type="text" name="gameID"><br/><br/></label>
            <input type="submit" value="Delete Record" name="handleDeletion"></p>
        </form>

	    <hr />

        <h2>Filtering Specific Records from Game Highlights Table (Selection)</h2>
        <p style='font-size:15px;'><b>This query filters records from the Game Highlights table, based on the X & Y Coordinates of which the event occured.</b></p>
        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="filterQueryRequest" name="filterQueryRequest">
            <label style='font-size:15px;'>X Coordinate (of basketball court): <input style='font-size:15px;' type="text" name="xCoord"><br/><br/></label>
            <label style='font-size:15px;'>Y Coordinate (of basketball court): <input style='font-size:15px;' type="text" name="yCoord"><br/><br/></label>
            <input type="submit" value="Filter Results" name="handleFiltering"></p>
        </form>

        <h2>Select Key Attributes from Venue Table (Projection)</h2>
        <p style='font-size:15px;'><b>The query projects pre-selected attributes are from the Venue table. The attributes are: Venue Name, Address, and City.</b></p>
        <form method="POST" action="updateinfo.php">
            <input type="hidden" id="projectQueryRequest" name="projectQueryRequest">
            <input type="submit" value="Get selected attributes" name="handleProjection"></p>
        </form>

	    <hr />
        
        <!-- Placeholder for output -->
	    <h2>Query Output Window</h2>

        <!-- Start of PHP -->
        <?php
        require './connect_db.php';
        $dbConnection = connectDB();

        function printResult($result) {

            // Print each of the column headings
            echo "<table class='content-table'>";
            $tmp = "<thead><tr>";
            while ($fieldinfo = $result->fetch_field()) {
                $tmp .= "<th>" . $fieldinfo->name . "</th>";
            }
            echo $tmp . "</tr></thead>";
            
            // Print each of the row contents
            foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
                $tmp2 = "<tbody><tr>";
                foreach($row as $value) {
                    $tmp2 .= "<td>" . $value . "</td>";
                }
                echo $tmp2 . "</tr></tbody>";
            }
            echo "</table>";
        }

        function handleResetRequest() {
            global $dbConnection;

            $query = '';
            $sqlScript = file('load_datasets.sql');
            foreach ($sqlScript as $line) {

                $startWith = substr(trim($line), 0 ,2);
                $endWith = substr(trim($line), -1 ,1);
                
                if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                    continue;
                }
                $query = $query . $line;
                if ($endWith == ';') {
                    mysqli_query($dbConnection, substr(trim($query), 0, -1)) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
                    $query= '';
                }
            }
            echo '<div style=font-size:20px;class="success-response sql-import-response">SQL database has reset successfully!</div>';
            $dbConnection -> commit();
        }

        function handleSelectionRequest() {
            global $dbConnection;

            if (isset($_GET['getTable'])) {
                $table = $_GET['getTable'];
            }

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT * from $table";
            $result = mysqli_query($dbConnection, $sql);
            echo "<span style='font-size:20px;'><b>Entire " . $table . " table has been selected:</b></span>";
            printResult($result);
            $dbConnection -> commit();
        }

        function handleInsertRequest() {
            global $dbConnection;

            if (isset($_POST['handleInsertion'])) {
                $insPlayerID = $_POST['insPlayerID'];
                $insCoachID = $_POST['insCoachID'];
                $insTeamID = $_POST['insTeamID'];
                $insPlayerName = $_POST['insPlayerName'];
                $insHeight = $_POST['insHeight'];
                $insJerseyNum = $_POST['insJerseyNum'];
            }
           
            $dbConnection -> select_db("ncaa");
            $sql = $dbConnection -> prepare("INSERT INTO player (`Player ID`, `Coach ID`, `Team ID`, `Player Name`, `Height`, `Jersey Num`) VALUES (?, ?, ?, ?, ?, ?)");
            $sql -> bind_param("iiissi", $insPlayerID, $insCoachID, $insTeamID, $insPlayerName , $insHeight, $insJerseyNum);
            $result = $sql->execute();
            if($result) {
                echo "<span style='font-size:20px;'><b>Record has been inserted</b></span>";
            }
            $dbConnection -> commit();

        }

        function handleUpdateRequest() {
            global $dbConnection;

            if (isset($_POST['handleUpdate'])) {
                $oldMascotName = $_POST['oldMascotName'];
                $oldMascotType = $_POST['oldMascotType'];
                $newMascotName = $_POST['newMascotName'];
                $newMascotType = $_POST['newMascotType'];
            }

            $dbConnection -> select_db("ncaa");
            if (empty($oldMascotType)) {
                $sql = "UPDATE mascot SET `Mascot Name` = '" . $newMascotName . "', `Mascot Type` =  '" . $newMascotType . "' WHERE `Mascot Name` = '" . $oldMascotName . "'"; 
            }
            else {
                $sql = "UPDATE mascot SET `Mascot Name` = '" . $newMascotName . "', `Mascot Type` =  '" . $newMascotType . "' WHERE `Mascot Name` = '" . $oldMascotName . "' AND `Mascot Type` ='" . $oldMascotType . "'";  
            }
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Record has been updated</b></span>";
            }
            $dbConnection -> commit(); 
        }

        function handleDeleteRequest() {
            global $dbConnection;

            if (isset($_POST['handleDeletion'])) {
                $gameID = $_POST['gameID'];
            }

            if (empty($gameID)) {
                echo "<span style='font-size:20px;'><b>Game ID text box must not be empty!</b></span>";
            }

            $dbConnection -> select_db("ncaa");

            $sql = "DELETE FROM `Regular Season Game` WHERE `Game ID` = $gameID";
            if(mysqli_query($dbConnection, $sql)) {  
                echo "<span style='font-size:20px;'><b>Game ID (FK) deleted successfully from Regular Season Game Table.<br></b></span><br>";  
            }
            else {  
                echo "Data Deletion Failed; ". mysqli_error($dbConnection);  
            }
            $sql2 = "DELETE FROM `Tournament Game` WHERE `Game ID` = $gameID";
            if(mysqli_query($dbConnection, $sql2)) {  
                echo "<span style='font-size:20px;'><b>Game ID (FK) deleted successfully from Tournament Game Table.<br></b></span><br>";  
            }
            else {  
                echo "Data Deletion Failed; ". mysqli_error($dbConnection);  
            }
            $sql3 = "DELETE FROM `Game Highlights` WHERE `Game ID` = $gameID";
            if(mysqli_query($dbConnection, $sql3)) {  
                echo "<span style='font-size:20px;'><b>Game ID (FK) deleted successfully from Game Highlights Table.<br></b></span><br>";  
            }
            else {  
                echo "Data Deletion Failed; ". mysqli_error($dbConnection);  
            }   
            $sql4 = "DELETE FROM plays_in WHERE `Game ID` = $gameID";
            if(mysqli_query($dbConnection, $sql4)) {  
                echo "<span style='font-size:20px;'><b>Game ID (FK) deleted successfully from Plays In Table.<br></b></span><br>"; 
            }
            else {  
                echo "Data Deletion Failed; ". mysqli_error($dbConnection);  
            }    
            $sql5 = "DELETE FROM game WHERE `Game ID` = $gameID";
            if(mysqli_query($dbConnection, $sql5)) {  
                echo "<span style='font-size:20px;'><b>Finally, Game ID (PK) deleted successfully from Game Table.<br></b></span>";
            }
            else {  
                echo "Data Deletion Failed; ". mysqli_error($dbConnection);
            }   
            $dbConnection -> commit();
        }

        function handleFilteringRequest() {
            global $dbConnection;
            
            if (isset($_POST['handleFiltering'])) {
                $xCoord = $_POST['xCoord'];
                $yCoord = $_POST['yCoord'];
            }

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT * FROM  `Game Highlights` WHERE `X Coord` $xCoord  AND `Y Coord` $yCoord";
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Selection (filtering) Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 
        }

        function handleProjectionRequest() {
            global $dbConnection;

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT `Venue Name`, `Venue Address`, `Venue City` FROM venue";  
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Projection Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 
        }

        // HANDLE ALL POST ROUTES
        // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            global $dbConnection;

            if (connectDB()) { 
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                }
                else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                }
                else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                }
                else if (array_key_exists('deleteQueryRequest', $_POST)) {
                    handleDeleteRequest();
                }
                else if (array_key_exists('projectQueryRequest', $_POST)) {
                    handleProjectionRequest();
                }
                else if (array_key_exists('filterQueryRequest', $_POST)) {
                    handleFilteringRequest();
                }
                disconnectDB($dbConnection);
            }
        }

        // HANDLE ALL GET ROUTES
        // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            global $dbConnection;

            if (connectDB()) {
                if (array_key_exists('selectionQueryRequest', $_GET)) {
                    handleSelectionRequest();
                }
                disconnectDB($dbConnection);
            }
        }

		if (isset($_POST['handleReset']) || isset($_POST['handleUpdate']) || isset($_POST['handleInsertion']) || isset($_POST['handleDeletion']) || 
            isset($_POST['handleProjection']) || isset($_POST['handleFiltering'])) {
            handlePOSTRequest();
        } 
        else if (isset($_GET['handleSelection'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>