<meta charset="utf-8">
<?php foreach ($news as $newsItem) { ?>

<div>
Description: <?php echo $newsItem->description; ?><br>
Time: <?php echo $newsItem->time; ?><br>
District: <?php echo $newsItem->districtName; ?>
</div>

<?php } ?>