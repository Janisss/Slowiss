<form action="" method="post">
From:
<select name="camefrom">
  <option selected disabled>Choose here</option>
  <option value="RO">RO</option>
  <option value="SK">SK</option>
</select><br>
To:
<select name="goto">
  <option selected disabled>Choose here</option>
  <option value="DE">DE</option>
  <option value="CH">CH</option>
</select><br>
<input type="submit" name="tour" value="go" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
</form>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What i need? (change text)</h4>
      </div>
      <div class="modal-body">
      
<?php
if(isset($_POST['tour'])) {
	$from = $_POST['camefrom'];
	$to = $_POST['goto'];
	$way = $from.$to;
 	
 if($way == "ROCH"){
 	 echo "You are going from Romania <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/255px-Flag_of_Romania.svg.png' width='20'> to Switzerland <img src='http://www.flags.net/images/largeflags/SWIT0003.GIF' width='20'> !";
	 }
	 else if($way == "RODE"){
	 echo "You are going from Romania <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/255px-Flag_of_Romania.svg.png' width='20'> to Germany <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/220px-Flag_of_Germany.svg.png' width='20'> !";
	 }
	 else if($way == "SKDE"){
	 echo "You are going from Slovakia <img src='http://www.slovak-republic.org/pictures/symbols/slovakia-flag.gif' width='20'> to Germany <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/220px-Flag_of_Germany.svg.png' width='20'> !";
	 }
	 else if($way == "SKCH"){
	 echo "You are going from Slovakia <img src='http://www.slovak-republic.org/pictures/symbols/slovakia-flag.gif' width='20'> to Switzerland <img src='http://www.flags.net/images/largeflags/SWIT0003.GIF' width='20'> !";
	 }
 	 else {
 	 echo "Please select!";
 	 }
 };
?>
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>