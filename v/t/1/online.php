<?php session_start();$session=session_id();$time=time();$time_check=$time-300;$host="playbclick.com.mysql";$username="playbclick_com";$password="Gaft0p";$db_name="playbclick_com";mysql_connect("$host", "$username", "$password")or die("could notconnect toserver."); mysql_select_db("$db_name")or die("cannot select DB");$sql="SELECT * FROM online_users WHERE session='$session'"; $result=mysql_query($sql);$count=mysql_num_rows($result); if($count=="0"){ $sql1="INSERT INTO online_users(session, time)VALUES('$session', '$time')"; $result1=mysql_query($sql1);} else { $sql2="UPDATE online_users SET time='$time' WHERE session = '$session'"; $result2=mysql_query($sql2); }$sql3="SELECT * FROM online_users";$result3=mysql_query($sql3); $count_user_online=mysql_num_rows($result3);echo "<style>::selection {background: yellow;color: #2a2a2a;}body, html { margin: 0px; text-align: center; font-size: 18px; width: 100%; height: 100%; }</style><body onclick='location.reload()'>";echo "bClickers Online: $count_user_online "; $sql4="DELETE FROM online_users WHERE time<$time_check"; $result4=mysql_query($sql4); echo "<script>setTimeout(function(){location.reload()},30000);</script></body>"; mysql_close(); ?>