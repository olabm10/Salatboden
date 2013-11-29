<!--aside er en html tag, brukes som "side-bar")-->


<div id="topimg">
	<aside>
		<?php
			if(logget_inn () === true) {
				include 'innlogget.php';
			} else {
			include 'loginform.php';
			}
			
			
		?>
	</aside>
</div>