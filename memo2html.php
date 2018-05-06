<!-- Modal ATP -->
<div class="modal fade" style="font-size: 15px;" id="appreciateATP" tabindex="-1" role="dialog" aria-labelledby="appreciateATPLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><center>Appreciation Box</center>
				<hr> By Sending an awesome donation, you give us the opportunity to keep this project alive.
				</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
			<form action="memo2.php" autocomplete="on" method="POST"> 

				<div class="form-group">

<div class="form-group">
<label for="sel4" >Amount (make sure this is in 3 decimal places)</label>
<input class="yeah form-control" id="sel4"  name="amount" placeholder="amount e.g 0.001" value="1.000" required="true"/>
</div>

<div class="form-group">
<label for="sel5">Amount TYPE</label>
<select class="yeah form-control" name="type" required="true"
id="sel2"  id="voter">
<option value="sbd">SBD</option>
<option value="steem">STEEM</option>
</select>
</div>

                <div class="form-group">
                    <input class="btn btn-primary  col-md-12" name="mforms" type="submit" value="send" />
                </div>
            </div>
</form>
    </div>
     
    </div>
</div>
</div>

	