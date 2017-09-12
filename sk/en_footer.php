<div class="container-fluid lang">
<?php
	$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$end = end(explode('/', $url));
?>
	<a href="../en/<?php echo $end ?>">ENGLISH</a> | <a href="#">SLOVENSKY</a>
</div>
<br>
<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h3>Kontaktujte nás</h3>
				<form action="mailsender_footer.php" method="post" name="en-form" class="offer-form">
					<input type="text" placeholder="Meno a priezvisko" name="en-name">
					<input type="text" placeholder="E-mail" name="en-email">
					<input type="text" placeholder="Tel. číslo" name="en-tel">
					<textarea name="en-message" placeholder="Správa"></textarea>
					<input type="submit" value="Odoslať" name="submit-footer-sk">
				</form>
			</div>
			<div class="col-xs-4">
				<h3>Sídlo</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.379504186679!2d19.65959525154252!3d48.33401037913768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ff88c67540cf9%3A0x3328a04fd2f94481!2sMartina+R%C3%A1zusa+1593%2F59%2C+984+01+Lu%C4%8Denec!5e0!3m2!1ssk!2ssk!4v1499763626754" width="320" height="205" frameborder="0" style="border:0; margin-left: -10px;" allowfullscreen></iframe>
			</div>
			<div class="col-xs-2">
				<h3>Člen skupiny</h3>
				<img src="./img/partner.svg" style="width: 100%;">
			</div>
		</div>
</div>
<br>