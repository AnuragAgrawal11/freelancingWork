<div class="clear">&nbsp;</div>

<div align="center" class="gbook_bottom">
<?php echo $settings['pages_top']; ?>
</div>

<!--NOSPAM BANNER -->
<?php 
if ($settings['show_nospam'])
{
	?>
	<div id="gbook_no_spam" class="gbook_no_spam" align="center"><a href="" <?php echo $settings['target']; ?>><img src="<?php echo $settings['tpl_path']; ?>images/no_spam.gif" width="223" height="94" border="0" alt="Stop Guestbook SPAM" title="Stop Guestbook SPAM" /></a></div>
	<?php
}
?>
<!--NOSPAM BANNER END -->

<!--CUSTOM FOOTER -->
<?php
include('footer.txt');
?>
<!--CUSTOM FOOTER END -->

</body>
</html>
