<!--CPSC 304 2020 WT2 Project -- NCAA Basketball Database -->

<html>
    <head>

        <title>CPSC 304 - NCAA Basketball Database</title>
        <style>
            body {
                font-family: Leelawadee, Arial;
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
                font-family:'Roboto', Arial;
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

        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
            <p><input type="submit" value="Reset Database" name="handleReset"></p>
        </form>

        <hr/>

        <h2>Select entire table (pick from drop-down below)</h2>
        <form method="GET" action="ncaastats.php">
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

        <h2 class=>Get Player-Coach Relationships (Join)</h2>
        <p style='font-size:15px;'><b>This query joins the player and headcoach tables, and filters records based on the letters contained in the coach's first name.</b></p>
        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="joinQueryRequest" name="joinQueryRequest">
            <label style='font-size:15px;'>Coach First Name: <input style='font-size:15px;' type="text" name="insCoachFN"><br/><br/></label>
            <input type="submit" value="Get Player-Coach Relationship" name="handleJoin"></p>
        </form>

        <hr/>

        <h2>Number of Game Highlights Per Game (Aggregation with Group By)</h2>
        <p style='font-size:15px;'><b>This query gives the number of game highlights recorded per game.</b></p>
        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="aggGBQueryRequest" name="aggGBQueryRequest">
            <input type="submit" value="Show Results" name="handleAggGB"></p>
        </form>

        <hr />

        <h2>Net Revenue By NCAA Team (Aggregation with Having)</h2>
        <p style='font-size:15px;'><b>This query gives the net revenue by team, for those teams that are profitable.</b></p>
        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="aggHavingQueryRequest" name="aggHavingQueryRequest">
            <input type="submit" value="Get Net Revenue" name="handleAggHaving"></p>
        </form>

	    <hr />

        <h2>Number of Players on Largest Team (Nested Aggregation with Group By)</h2>
        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="nestedAggQueryRequest" name="nestedAggQueryRequest">
            <input type="submit" value="Get Largest Team" name="handleNestedAgg"></p>
        </form>

        <h2>NCAA Teams that played at <u>every</u> venue (Division)</h2>
        <p style='font-size:15px;'><b>This query outputs all NCAA teams that have played a game in every venue.</b></p>
        <form method="POST" action="ncaastats.php">
            <input type="hidden" id="divisionQueryRequest" name="divisionQueryRequest">
            <input type="submit" value="Get Teams" name="handleDivision"></p>
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

        function handleJoinRequest() {
            global $dbConnection;
          
            if (isset($_POST['handleJoin'])) {
                $insCoachFN = $_POST['insCoachFN'];
            }

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT p.`Player Name`, p.`Jersey Num`, c.`First Name` as `Coach First Name`, c.`Last Name` as `Coach Last Name` FROM player p, headcoach c WHERE p.`Coach ID` = c.`Coach ID` AND c.`First Name` LIKE '" . $insCoachFN . "'";
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Join Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 

        }

        function handleAggGBRequest() {
            global $dbConnection;

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT g.`Game ID`, count(gh.`Highlight ID`) as `Number of Game Highlights` FROM game g, `Game Highlights` gh WHERE g.`Game ID` = gh.`Game ID` GROUP BY g.`Game ID`";
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Aggregation with Group By Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 
        }

        function handleAggHavingRequest() {
            global $dbConnection;

            $dbConnection -> select_db("ncaa");
            $sql = "SELECT n.`Team Name`, SUM(t.amount) as `Net Revenue` FROM ncaateam n, transactions t WHERE n.`Team ID` = t.`Team ID` GROUP BY n.`Team Name` HAVING `Net Revenue` > 0";
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Aggregation with Having Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 
        }

        function handleNestedAggRequest() {
            global $dbConnection;
            
            $dbConnection -> select_db("ncaa");
            $sql = "SELECT MAX(`Player Count`) as `Num Players on Largest Team` 
                    FROM (SELECT p.`Team ID`, COUNT(*) as `Player Count`
                          FROM player p
                          GROUP BY p.`Team ID`) AS TMP";
            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Nested Aggregation with Group By Query has been updated</b></span>";
            }
            printResult($result);
            $dbConnection -> commit(); 
        }

        function handleDivisionRequest() {
            global $dbConnection;

            // EXCEPT keyword does not work in MySQL, had to replace with NOT IN
            $dbConnection -> select_db("ncaa");
            $sql = "SELECT n.`Team ID`, n.`Team Name`
                    FROM ncaateam n
                    WHERE NOT EXISTS(SELECT v.`Venue ID`
                                     FROM venue v
                                     WHERE v.`Venue ID` NOT IN (SELECT g.`Venue ID`
                                                                FROM plays_in p, game g
                                                                WHERE p.`Game ID` = g.`Game ID` AND p.`Team ID` = n.`Team ID`));";

            $result = mysqli_query($dbConnection, $sql);
            if($result) {
                echo "<span style='font-size:20px;'><b>Division Query has been updated</b></span>";
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
                else if (array_key_exists('joinQueryRequest', $_POST)) {
                    handleJoinRequest();
                }
                else if (array_key_exists('aggGBQueryRequest', $_POST)) {
                    handleAggGBRequest();
                }
                else if (array_key_exists('aggHavingQueryRequest', $_POST)) {
                    handleAggHavingRequest();
                }
                else if (array_key_exists('nestedAggQueryRequest', $_POST)) {
                    handleNestedAggRequest();
                }
                else if (array_key_exists('divisionQueryRequest', $_POST)) {
                    handleDivisionRequest();
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

		if (isset($_POST['handleReset']) || isset($_POST['handleJoin']) || isset($_POST['handleAggGB']) || isset($_POST['handleAggHaving']) || 
            isset($_POST['handleNestedAgg']) || isset($_POST['handleDivision'])) {
            handlePOSTRequest();
        } 
        else if (isset($_GET['handleSelection'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>