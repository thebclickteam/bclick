<?php define('DB_NAME', 'playbclick_com');define('DB_USER', 'playbclick_com');define('DB_PASSWORD', 'Gaft0p');define('DB_HOST', 'playbclick.com.mysql');$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);if (!$link) { die('Could not connect: ' . mysql_error()); }$db_selected = mysql_select_db(DB_NAME, $link);if (!$db_selected) { die('Can\'t use ' . DB_NAME . ': ' . mysql_error()); }echo '<head><meta name="format-detection" content="telephone=no" /><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"><style> table, tr { width: 100%; } td, th { border: 1px black solid; width: 33.33333333%; } div { background-color: #999; border: 1px black solid; margin: 5px auto; height: auto; } div, h1, h2, h3 { text-align: center; vertical-align: middle; font-size: 100%; } #one, #two, #three {border:0px; margin: 0px;width: 100%;left:0px;} #one {position:fixed;background-color: #FFFF00;} #two {background-color:#BDBDBD} #three {background-color:#BF360C} body {font-family: "Open Sans", sans-serif; }</style></head><body><table border="0">';$sql=mysql_query("SELECT ID, Username, Score FROM t1L ORDER BY Score DESC, ID DESC"); $rank=0; while ($data = mysql_fetch_assoc($sql)) { if ($data) { $rank += 1; if ($rank < "2") {  echo "<tr><th>Rank</th><th>Name</th><th>Score</th></tr><tr id='one'><td>1</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "3") { echo "<tr id='two'><td>2</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "4") { echo "<tr id='three'><td>3</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>";} else { echo "<tr><td>" . $rank . "</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr></table></body>"; } }};$link->close(); ?>