<?php
/**
* YOOlogin Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/
/**
 * @version SVN: $Id: builder.php 469 2011-07-29 19:03:30Z mustaqs $
 * @package    superlogin
 * @subpackage C:
 * @author     Mustaq Sheikh {@link http://www.herdboy.com}
 * @author     Created on 07-Sep-2011
 * @license    GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.keepalive');
?>

	<script>
		  jQuery(document).ready(function(){
				jQuery('#login-trigger').click(function(){
					jQuery(this).next('#login-content').slideToggle();
					jQuery(this).toggleClass('active');

					if (jQuery(this).hasClass('active')) jQuery(this).find('span').html('&#x25B2;')
						else jQuery(this).find('span').html('&#x25BC;')
					})
		  });
	</script>
	<script>
		  jQuery(document).ready(function(){
				jQuery('#signup-trigger').click(function(){
					jQuery(this).next('#signup-content').slideToggle();
					jQuery(this).toggleClass('active');

					if (jQuery(this).hasClass('active')) jQuery(this).find('span').html('&#x25B2;')
						else jQuery(this).find('span').html('&#x25BC;')
					})
		  });
	</script>


<nav>
	<ul>
		<li id="login">
			<a id="login-trigger" href="#">
				Log in <span>&#9660;</span>
			</a>
			<div id="login-content">
				<form>
					<fieldset id="inputs">
						<input id="username" name="Email" placeholder="Your email address" required="" type="email">
						<input id="password" name="Password" placeholder="Password" required="" type="password">
					</fieldset>
					<fieldset id="actions">
						<input id="submit" value="Log in" type="submit">
						<label><input checked="checked" type="checkbox"> Keep me signed in</label>
					</fieldset>
				</form>
			</div>
		</li>
		<li id="signup">
			<a id="signup-trigger" href="#">
				Sign Up <span>&#9660;</span>
			</a>
			<div id="signup-content">
				<form>
					<fieldset id="inputs">
						<input id="username" name="Email" placeholder="Your email address" required="" type="email">
						<input id="password" name="Password" placeholder="Password" required="" type="password">
					</fieldset>
					<fieldset id="actions">
						<input id="submit" value="Register" type="submit">
						<label><input checked="checked" type="checkbox"> Keep me signed in</label>
					</fieldset>
				</form>
			</div>
		</li>
	</ul>
</nav>