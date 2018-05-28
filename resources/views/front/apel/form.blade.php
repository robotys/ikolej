
<section class="black" id="apply">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3" style="text-align: center">
				<h2>APPLY NOW</h2>
				<p>Your citizenship:</p>
				<form method="post" action="/apply">
					{{csrf_field()}}
					<div class="pre-btn">
						<span class="btn btn-success citizenship" data-val="malaysian"> <input type="radio" name="citizenship" value="malaysian" checked="checked"> Citizen of Malaysia </span> &nbsp; 
						<span class="btn btn-primary citizenship" data-val="pr"> <input type="radio" name="citizenship" value="pr"> Permanent Resident of M`sia </span> &nbsp; 
						<span class="btn btn-info citizenship" data-val="nonmalaysian"> <input type="radio" name="citizenship" value="nonmalaysian"> Non Malaysian </span> &nbsp; 
					</div>

					<div class="input-group pre">
					  <span class="input-group-addon" id="label_type">NRIC</span>
					  <input type="number" name="idno" class="form-control" placeholder="881223145555" aria-describedby="basic-addon1">
					</div>
					  <small><i>No space or symbol, only number</i></small>

					<br/>
					<br/>

					<input type="submit" value=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SUBMIT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" class="btn btn-danger btn-lg apply-submit" disabled>
				</form>
				{{-- <p>Complete form below and click [Submit]</p>

				<form method="post">
					<div class="row">
						<div class="col-sm-12">
							<br/>
							<label>Name</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>ID Type</label>
							<select class="form-control">
								<option>Warganegara (IC)</option>
								<option>International (Passport)</option>
							</select>
							<br/>
						</div>
						<div class="col-sm-12">
							<label>IC / Passport</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>Phone</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>Email</label>
							<input type="text" class="form-control">
							<br/>
						</div>
						<div class="col-sm-12">
							<label>&nbsp;</label><br/>
							<input type="submit" class="btn btn-block btn-danger">
						</div>
					</div>
				</form> --}}
			</div>
		</div>
	</div>
</section>
<style>
.pre-btn .btn{
	margin-bottom: 10px;
}
</style>
<script>
	$(document).ready(function(){
		var citizen = '';
		var idno = '';

		$('.citizenship').on('click', function(){
			var val = $(this).attr('data-val');

			$('[value='+val+']').prop('checked', true);

			change_label(val);
		});

		$('[name=citizenship]').on('change', function(){
			change_label($(this).val());
		});

		$('[name=idno]').on('keyup',function(){
			var val = $(this).val();
			if(val.length > 10) $('.apply-submit').prop('disabled', false);
			else $('.apply-submit').prop('disabled', true);
		});
	});

	function change_label(val){
		var map = {'malaysian':'NRIC', 'nonmalaysian':'Passport No / Nationality ID No', 'pr':'NRIC'};
		var placeholder = {'malaysian':'888888109999', 'pr':'111111549999','nonmalaysian':''}
		$('#label_type').html(map[val]);

		$('[name=idno]').attr('placeholder',placeholder[val]);
	}
</script>
