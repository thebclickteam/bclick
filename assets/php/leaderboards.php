<html><head><meta name="format-detection" content="telephone=no" /><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"><style>html, body {background: #FFF;height: 100%; margin: 0px}table, tr, body, html {width:100%;table-layout: fixed} tr, table {width:100% !important;}td:first-child,th:first-child{width:15%}td:nth-child(2),th:nth-child(2){width:50%}td:nth-child(3), th:nth-child(3){width:35%}td, th { border: 1px black solid;font-size:10px !important;} table{margin-top:30px}tr { text-align: center; vertical-align: middle;font-size:100%;word-wrap:break-word;}#one{background-color:#FFFF00;}#two{background-color:#CCC}#three{background-color:#BF360C}::-webkit-scrollbar { width: 8px; }::-webkit-scrollbar-track {-webkit-border-radius: 10px;border-radius: 10px;}::-webkit-scrollbar-thumb {-webkit-border-radius: 10px;border-radius: 10px;background: rgb(100,100,100);}#back{position:fixed;top:5px;left:5px;background-color: rgb(100,100,100);border: #2a2a2a solid 1px;border-radius: 3px;padding: 8px 15px;user-select:none;width:calc(100% - 42px);color:yellow;text-align:center;cursor:pointer;font-size:20px;}</style></head><body id="body"><div id="back" onclick="window.history.back()">Back</div><table border="0"><tr><th>Rank</th><th>Name</th><th>Score</th></tr>
<?php define('DB_NAME', 'playbclick_com');define('DB_USER', 'playbclick_com');define('DB_PASSWORD', 'Gaft0p');define('DB_HOST', 'playbclick.com.mysql');$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);if (!$link) { die('Could not connect: ' . mysql_error()); }$db_selected = mysql_select_db(DB_NAME, $link);if (!$db_selected) { die('Can\'t use ' . DB_NAME . ': ' . mysql_error()); }$sql=mysql_query("SELECT ID, Username, Score FROM bLeaderboards ORDER BY Score DESC, ID DESC"); $rank=0; while ($data = mysql_fetch_assoc($sql)) { if ($data) { $rank += 1; if ($rank < "2") {  echo "<tr id='one'><td>1</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "3") { echo "<tr id='two'><td>2</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "4") { echo "<tr id='three'><td>3</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>";} else { echo "<tr><td>" . $rank . "</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } }};$link->close(); ?>
</table></body></html>