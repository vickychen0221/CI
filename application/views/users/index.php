<h2>User List</h2>
<a href="<?= site_url('users/add')?>">新增使用者</a>


<hr>


<?
  foreach ($users as $user) {
    echo "id:".$user->id;
	echo "<br/>";
    echo " name:".$user->name;
	echo "<br/>";
    echo " tel:".$user->tel;
    echo "<br/>";
	echo "<br/>";
  }
?>

