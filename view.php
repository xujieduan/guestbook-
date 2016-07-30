<html>
  <head>
    <title>显示留言</title>
	<meta charset="utf-8"/>
	
  </head>
  <body style="margin:20px auto;background-color:#ccc">
  <div style="margin:50px auto;margin-left:40px">
  <a href="view.php"title="查看留言">查看留言</a><br/>
  <?php
  //建立数据库
  $con=mysql_connect('localhost','root','root')or die('error in connection to mysql server');
  mysql_select_db('test',$con);
  //设置编码，避免乱码
  mysql_query("SET NAMES 'utf_8'",$con);
  $sql="SELECT title ,content FROM guestbook ";
  $query=mysql_query($sql,$con);
  while($query && $rs=mysql_fetch_array($query))
  {
  ?>
  </div>
  <p>
  <span>
  <b>留言标题:&nbsp;&nbsp;<?php echo $rs['title']?></b>
  <br/>
  <b>留言内容:&nbsp;&nbsp;<?php echo $rs['content']?></b>
  </span>
  <hr/>
  </p>
  <?php
  }
  ?>
  <?php
  //显示留言板
  
  ?>
  </body>
</html>