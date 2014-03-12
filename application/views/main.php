<div role="main" class="ui-content">
	<div id="one">
		<ul data-role="listview">
<?php
foreach($words as $row) {
?>
			<li><a href="../detail/<?=$row->semester?>/<?=$row->chapter?>" data-ajax="false"><?=$row->chapter." ".$row->content?></a></li>
<?php
}
?>
		</ul>
	</div>
</div><!-- /content -->