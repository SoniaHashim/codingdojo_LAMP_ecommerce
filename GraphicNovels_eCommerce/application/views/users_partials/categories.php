<li><a class='category' href=''>Show All</a></li>
<?php foreach ($records as $record): ?>
	<?php $href = explode(' ', $record['category'])?>
	<li><a class='category' href=<?= $href[0] ?> <?php if (count($href) > 1): ?> name=<?= $href[1] ?> <?php else: ?> name='' <?php endif ?> <?php if (count($href) > 2): ?> type=<?= $href[2] ?> <?php else: ?> type='' <?php endif ?> ><?= $record['category'].' ('.$record['count'].')'?></a></li>
<?php endforeach ?>
