<?php
    print '    
        <ul>
            <li><a href="index.php?menu=1"><img src="./imgs/logo1.jpg"></a></li>
            <li><a href="index.php?menu=2">News</a></li>
            <li><a href="index.php?menu=3">About</a></li>
            <li><a href="index.php?menu=4">Beers api</a></li>
            <li><a href="index.php?menu=5">Contact</a></li>';
            if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
                print '
                <li><a href="index.php?menu=6">Register</a></li>
                <li><a href="index.php?menu=7">Sign In</a></li>';
            }
            else if ($_SESSION['user']['valid'] == 'true') {
                print '
                <li><a href="index.php?menu=8">Admin</a></li>
                <li><a href="signout.php">Sign Out</a></li>';
            }
            print'
        </ul> ';
?>