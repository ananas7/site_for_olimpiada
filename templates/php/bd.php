<?php
function GetMyConnection() {
        global $g_link;
        if( $g_link )
            return $g_link;
        $g_link = mysql_connect( 'localhost', 'olimp', 'c2km|h@y$') or die('Could not connect to server.' );
        mysql_select_db('olimp', $g_link) or die('Could not select database.');
        return $g_link;
}
?>