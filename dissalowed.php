<?php

function dissalowed_ConvertListToArray($lines)
{
    $data = array();
    // Loop through our array, show HTML source as HTML source; and line numbers too.
    foreach ($lines as $line_num => $line) {
        $data[] = htmlspecialchars($line);
    }
    return $data;
}

function dissalowed_FecthList($list = null)
{
    // Get a file into an array.  In this example we'll go through HTTP to get
// the HTML source of a URL.
    $workingDir = dirname(__FILE__);
    $file = $workingDir . DIRECTORY_SEPARATOR . $list;
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines;
}

function dissalowd_ReadList($list)
{
    $lines = dissalowed_FecthList($list);
    return dissalowed_ConvertListToArray($lines);
}

function dissalowed_UserNameList()
{
    $listName = "DissalowedUserNamesList.txt";
    $data = dissalowd_ReadList($listName);
    return $data;
}

?>
