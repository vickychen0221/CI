<h2>刪除使用者</h2>
<form action="<?= site_url('users/delete')?>" method="post">
  Id : <input name="id" type="int"> <br />
  <br>
  Name : <input name="name" type="text"> <br />
  <br>
  Tel : <input name="tel" type="text"> <br />
  <br>
  <input type="submit" value="送出">
</form>

