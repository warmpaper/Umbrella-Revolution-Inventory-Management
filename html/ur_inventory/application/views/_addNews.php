<meta charset="utf-8">
<form method="post" action="<?php echo base_url('news/handleAddNews'); ?>">
Description: <textarea name="description"></textarea><br>
District: <select name="district">
<?php foreach($districts as $district) { ?>
    <option value="<?php echo $district->districtId; ?>"><?php echo $district->districtName; ?></option>
<?php } ?>
</select><br>
<input type="submit" value="Add">
</form>