<?php
session_start();
if(session_destroy())
{
echo "Log out succeed";
print "<br><a href='main.html'>back to main page</a>";
}
?>