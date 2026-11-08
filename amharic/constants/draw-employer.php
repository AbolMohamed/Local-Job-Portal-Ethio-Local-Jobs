<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">አካውንትዎን በነጻ ይፍጠሩ</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>የኩባንያ ስም</label>
<input class="form-control" placeholder="የኩባንያዎን ስም ያስገቡ" name="company" required type="text"> 
</div>
												
</div>

<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>የኩባንያ አይነት</label>
<input class="form-control" placeholder="ምሳሌ፡ ቦኪንግ/ጉዞ፣ ኮምፒውተር ሶፍትዌር ወይም ሌሎች" name="type" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>ኢሜይል አድራሻ</label>
<input class="form-control" placeholder="ኢሜይል አድራሻዎን ያስገቡ" name="email" required type="text"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>የይለፍ ቃል</label>
<input class="form-control" placeholder="ቢያንስ 8 እና ቢበዛ 20 ቁምፊዎች" name="password" required type="password"> 
</div>
												
</div>
												
<div class="col-sm-12 col-md-12">
												
<div class="form-group"> 
<label>የይለፍ ቃል ማረጋገጫ</label>
<input class="form-control" placeholder="የይለፍ ቃልዎን ድጋሚ ያስገቡ" name="confirmpassword" required type="password"> 
</div>
												
</div>
												
<input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">ይመዝገቡ</button>
</div>
										
</div>
</form>