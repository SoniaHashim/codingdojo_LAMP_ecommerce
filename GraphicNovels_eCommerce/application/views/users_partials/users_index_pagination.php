<ul class='row pagination footer'>
	<?php for ($i=0; $i < $count; $i++): ?>
		<li><a class='page' <?php if ($i+1 > $count): ?> id='last_page' <?php endif ?> href=<?=$i?>><?=$i+1?></a></li>
	<?php endfor ?>
</ul>