
<div id="cad_content" class="comment-respond" style="background-color: #f3ebeb; padding: 15px;">
    
    <h3 style="margin-top: 5px;" id="cad_title" class="comment-reply-title"><span>Cadastre-se, e receba esta amostra !!! </span>
    </h3>

    <p class="comment-notes" id="cad_message" style="display: none;"><span></span> </p>          

    <form method="post" id="cad_form" class="comment-form">
        
        <p class="comment-notes">
            <span id="cad_email_notes">O seu endereço de e-mail não será publicado.</span> Campos obrigatórios são marcados com <span class="required">*</span>
        </p>
        
        <p class="comment-form-author">
            <label for="cad_name">Nome <span class="required">*</span></label> 
            <input id="cad_name" name="cad_name" type="text" value="" size="100%" maxlength="245" required="required">
        </p>
        
        <p class="comment-form-email">
            <label for="cad_email">E-mail <span class="required">*</span></label> 
            <input id="cad_email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
        </p>
        
        <p class="comment-form-url">
            <label for="cad_cep">Cep <span class="required">*</span></label> 
            <input id="cad_cep" name="cep" type="text" value="" size="30" maxlength="200">
        </p>

        <p class="comment-form-author">
            <label for="author">Sexo <span class="required">*</span>&nbsp;&nbsp;&nbsp;</label> 
            
            <label style="background-color: pink;display: inline;padding: 5px; margin-right: 15px;">
                <input type="radio" id="cad_sexo_m" name="cad_sexo" value="M" required="" aria-required="true"> 
               <i>Mulher</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>

            <label style="background-color: #5eb2ef;display: inline;padding: 5px;">
                <input type="radio" id="cad_sexo_h" name="cad_sexo" value="H" required="" aria-required="true">  
                <i>Homem</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>

        </p>
        
        <p class="form-submit" style="margin-top: 35px;">
            <input name="submit" type="submit" id="cad_submit" class="submit" value="Quero Receber !!!"> 
        </p>            
    </form>
</div>


<script type="text/javascript">


	$(document).ready(function(){
		$("#cad_cep").mask("99999-999");
	});
	

	$('#cad_form').submit(function(event) {

		cad_validateData();

		cad_send();	
	    event.preventDefault();
	}); 


	function cad_send(){

		console.log(cad_getDataForm());

		$.post('http://localhost:3009/users', cad_getDataForm())
			.done(function( data ) {
    			cad_showSuscessMessage();
  		});

	}


	function cad_getDataForm() {
		
		var data = {

			name: $('#cad_name').val(),
			email: $('#cad_email').val(),
			gender: $("#cad_form input[type='radio']:checked").val(),
			
			address :{
				zipcode: $('#cad_cep').val()
			}
		};

		return data;
	}


	function cad_validateData(){

		var data = cad_getDataForm();

		if(!cad_isFullName(data.name)){
			alert("Preencha o nome completo");
			return false;
		}

		if(!cad_isEmail(data.email)){
			alert("Corrija o email");
			return false;
		}

		if(!cad_isCep(data.cep)){
			alert("Corrija o CEP");
			return false;
		}
	}


	function cad_isFullName(value) {
		var regex = /^([a-zA-z])+(\s)+[a-zA-z]+$/;
	    return regex.test(value);
	}


	function cad_isEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}


	function cad_isCep(cep){
		var regex = /^[0-9]{5}-[0-9]{3}$/;
		return regex.test(cep);
	}


	function cad_showSuscessMessage(){

		$("#cad_content").css("background-color","rgb(121, 247, 166)");
		$('#cad_form').hide();
	    $("#cad_title").html("<span>Olá <b>"+$('#cad_name').val().split(' ').slice(0, 1)+"</b>, bem vindo e parabéns !!!<span>");

	    $('#cad_message').show();
	    $("#cad_message").html("<span>Confira seu email <b>"+$('#cad_email').val()+"</b> e ative seu cadastro, assim você podera receber sua amostra.</span>");
	}


</script>
<script type="text/javascript" src="app/scripts/jquery.mask.min.js"/></script>