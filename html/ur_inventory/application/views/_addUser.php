<meta charset="utf-8">
<form method="post" action="<?php echo base_url('user/handleAddUser'); ?>">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Role: <select name="role">
<option value="admin">Admin</option>
<option value="helper">Helper</option>
</select><br>
District: <select name="district">
<?php foreach($districts as $district) { ?>
    <option value="<?php echo $district->districtId; ?>"><?php echo $district->districtName; ?></option>
<?php } ?>
</select><br>
<input type="submit" value="Add">
</form>