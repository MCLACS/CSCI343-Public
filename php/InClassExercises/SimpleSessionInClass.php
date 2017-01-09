<?php
        // don't forget to start the session...
        session_start();
        
        // get the total from the session if it is there
        // otherwise the total should be 0,
        // only roll the die and add it to the total
        // if the total is in the session, othewise
        // this is the first time the page has been 
        // loaded in this session and total should 
        // start at zero...
        $total = 0;
        if ( isset($_SESSION['total']) )
        { 
                $total = $_SESSION['total'];            
        
                // pick a random number from 1 to 6 
                $roll = rand(1,6);
        
                // increment the total by the roll...
                $total = $total + $roll;
        }

	// if the total is 21 the user wins,
        // otherwise if the total is > 21 the
        // user looses, otherwise keep on playing...
        $msg = "";
        if ($total == 21)
        {
                $msg = "You Win!";
                $total = 0;
        }
        elseif ($total > 21)
        {
                $msg = "You Loose!";
                $total = 0;
        }
        
        // save the total in the session so we don't
        // forget it!!
        $_SESSION['total'] = $total;
?>


<html>
        <head>
                <title>NumGuess.php</title>
        </head>

        <body>
                <p>Your total is: <?= $total ?></p>
                <form action="SimpleSessionInClass.php" method="get">
                        <input type="submit" value="Roll"/>
                </form>
                <h2><?= $msg ?></h2>
        </body>

<html>
		