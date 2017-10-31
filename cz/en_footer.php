<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+' zadejte platný e-mail.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+' e-mail.\n'; }
    } if (errors) alert('Nevyplnené alebo nesprávne vyplnené pole:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<div class="container-fluid lang">
<?php
	$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$end = end(explode('/', $url));
?>
	<a href="../en/<?php echo $end ?>">ENGLISH</a> | <a href="../sk/<?php echo $end?>">SLOVENSKY</a> | <a href="#">ČESKY</a> | <a href="../ro/<?php echo $end?>">ROMÂNĂ</a>
</div>
<br>
<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h3>Kontaktujte nás</h3>
				<form action="mailsender_footer.php" method="post" name="en-form" class="offer-form" onSubmit="MM_validateForm('en-email','','RisEmail');return document.MM_returnValue">
					<input type="text" placeholder="Jméno a příjmení" name="en-name">
					<input name="en-email" type="text" id="en-email" placeholder="E-mail">
					<input type="text" placeholder="Tel. číslo" name="en-tel">
					<textarea name="en-message" placeholder="Zpráva"></textarea>
					<input type="submit" value="Odeslat" name="submit-footer-sk">
				</form>
			</div>
			<div class="col-xs-6">
				<h3>Sídlo</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.379504186679!2d19.65959525154252!3d48.33401037913768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ff88c67540cf9%3A0x3328a04fd2f94481!2sMartina+R%C3%A1zusa+1593%2F59%2C+984+01+Lu%C4%8Denec!5e0!3m2!1ssk!2ssk!4v1499763626754" width="505" height="205" frameborder="0" style="border:0;" allowfullscreen></iframe>
			</div>
			<!--
				<div class="col-xs-2">
					<h3>Člen skupiny</h3>
					<img src="./img/partner.svg" style="width: 100%;">
				</div>
			-->	
		</div>
</div>
<br>