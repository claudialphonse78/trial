<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total Form Validation</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="fv.css" type="text/css" />
	<!--[if IE]>
	<style>
		.item .tooltip .content{ display:none; opacity:1; }
		.item .tooltip:hover .content{ display:block; }
	</style>
	<![endif]-->
        <script src="jquery-1.11.2.js"></script>
        <script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('<font color="red"><strong>enter atleast 4 characters</font></strong>');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="imgs/ajax-loader.gif" />');
			$.post('success/check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});
        
      
});
</script>
        
        
        
        
        
        
        
</head>
<body>
	<div class="logo">
<img src="images/starfall-2014.png" width="220" height="60" alt="Starfall" />
</div>
   <div class="header">

</div>
	<div id='wrap'>
		<div class='options'>
		<label>
                    <input type="checkbox" id="vfields" checked/>
			Vertical orientation
		</label>
		
	</div>
<h1 title='how forms should be done.'>Form For Free User</h1>
<section class='form'>
    <form  id="register" action="success/formsuccessfree.php" method="POST" novalidate>

	<fieldset>
	<div class="item">
	<label>
            <span>Name</span>
            <input data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. John f. Kennedy" required="required" type="text" />		
	</label>
		<div class='tooltip help'>
		<span>?</span>
			<div class='content'>
                            <b></b>
                            <p>Name must be at least 2 words</p>
                         </div>
                </div>
	</div>

            
            
	
         
            
            <div class="item">
            <label>
		<span>UserName</span>
                <input id="username"  data-validate-length-range="5" type="text" name="username" required="required">
            </label>
                <div class='tooltip help'>
	<span>?</span>
            <div class='content'>
		<b></b>
	<p>Username should be unique</p>
            </div>
	</div>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="user-result"></div>
	
	</div>
            <div class="item">
		<label>
		<span>email</span>
		<input name="email" class='email' required="required" type="email" />
		</label>
            </div>
		<div class="item">
		<label>
		<span>Confirm email address</span>
		<input type="email" class='email' name="confirm_email" data-validate-linked='email' required='required'>
		</label>
		</div>
		
	
	<div class="item">
	<label>
	<span>Password</span>
	<input type="password" name="password" data-validate-length="6,8" required='required' id="password">
	</label>
	<div class='tooltip help'>
	<span>?</span>
	<div class='content'>
	<b></b>
	<p>Should be 8 characters & should contain one uppercase and lowercase & a special character[!*/+]</p>
		</div>
        
	</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="result"></div>
	</div>
	<div class="item">
		<label>
	<span>Repeat password</span>
	<input type="password" name="password2" data-validate-linked='password' required='required'>
		</label>
	</div>

	
	</fieldset>
	<fieldset>
<p>Please fill in all the details correctly</p>
<input name="somethingHidden" required="required" type="text" style='display:none' />
	</fieldset>
	<button id='send' type='submit'>Submit</button>
        &nbsp;&nbsp;
        <button  type='reset' value="reset"> Reset</button>
	</form>
	</section>
	</div>
	<script src="jquery-1.11.2.js"></script>
    <script src="multifield.js"></script>
    <script src="validator.js"></script>
    <script src="check.js"></script>
    <script>
    // initialize the validator function
	validator.message['date'] = 'not a real date';

	// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
            $('form')
		.on('blur', 'input[required], input.optional, select.required', validator.checkField)
		.on('change', 'select.required', validator.checkField)
		.on('keypress', 'input[required][pattern]', validator.keypress);

            $('.multi.required')
		.on('keyup blur', 'input', function(){
				validator.checkField.apply( $(this).siblings().last()[0] );
			});

		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);

		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});

		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);

		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
	</script>
        
        
        
        
        
        
</body>
</html>