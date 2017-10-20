<!--help lang-->
<?php
	$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$end = end(explode('/', $url));
?>
		<div class="row" style="text-align: center">
		<div class="mlang" data-toggle="modal" data-target="#langModal">
		  <i class="fa fa-language fa-3x" aria-hidden="true"></i><br>
		<span>LIMBĂ</span>
		</div>
		<div id="langModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Selectarea limbii</h4>
			  </div>
			  <div class="modal-body">
				<ul>
				<li><img src="../mini_flags/us.png" alt="EN"><a href="../en/<?php echo $end ?>"> English</a></li>
				<li><img src="../mini_flags/sk.png" alt="SK"><a href="../sk/<?php echo $end ?>"> Slovensky</a></li>
				<li><img src="../mini_flags/cz.png" alt="CZ"><a href="../cz/<?php echo $end ?>"> Česky</a></li>
				<li><img src="../mini_flags/ro.png" alt="RO"><a href="#"> Română</a></li>
				</ul>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<!--help lang-->