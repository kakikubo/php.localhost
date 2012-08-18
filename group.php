<?php $display_message = true ; ?>
<?php if ( $display_message ) { ?>
<p>
このメッセージは $display_message がtrueの時にのみ表示されるメッセージです
</p>
<?php } else { ?>
<p>
このメッセージは $display_message がfalseの時にのみ表示されるメッセージです
</p>
<?php } ?>


<?php if ($display_message): ?>
<p>
このメッセージは $display_message がtrueの時にのみ表示されるメッセージです
</p>
<?php else: ?>
<p>
このメッセージは $display_message がfalseの時にのみ表示されるメッセージです
</p>
<?php endif; ?>
