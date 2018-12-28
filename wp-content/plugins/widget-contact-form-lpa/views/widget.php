	
	<form action="" method="post">
	    
	    <p> Nome Completo* <br />
	    	<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />
	    </p>
	    
	    <p> Email <br />
	    	<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />
	    </p>
	    
	    <p> Subject (required) <br />
	    	<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />
	    </p>
	   
	    <p> Your Message (required) <br />
	    	<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>
	    </p>
	    
	    <p><input type="submit" name="cf-submitted" value="Enviar"/></p>
	    
	</form><!-- This file is used to markup the public-facing widget. -->