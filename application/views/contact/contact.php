<script type="text/javascript" src="<?PHP echo base_url(); ?>administration/js/jquery.validate.min.js"></script>
<script>
   //Our validation script will go here.
   $(document).ready(function(){
   	
   	
   	
   	$('#contact1').submit(function(){ return false; });
   
   	//custom validation rule - text only
   	
   	
   
       //validation implementation will go here.
   	$("#contact1").validate({
   	    rules: {
   	        fname: {
   	            required: true,
   	         //   textOnly: true
   	        },
   			    test: {
   	            required: true,
   	         //   textOnly: true
   	        }
   			
   			,
   			     age: {     required: true,
                 minlength: 1}
   			  
   			  
   			  ,
   			     agree: {     required: true
               }
   			  
   			  
   	    },
   		
  
   	    messages: {
   	        fname: {
   	            required: "* Your name is required"
   	        },
   			 test: {
   	            required: "* twinkle"
   	        }
   			
   			,
   			    age: {     required: true,
                 minlength: 1}
   			 
   			 ,
   			 agree: {required:'you must accept terms to move on.<br/>'}
   	    } , 
   		
   		submitHandler: function(form) {
   			
   				$("#send").replaceWith("<em>sending...</em>");
   				
   			
   			
              $.ajax({
   					type: 'POST',
   					url: '<?PHP echo base_url(); ?>ajax/form',
   					data: $("#contact1").serialize(),
   					
   						success: function(data) {
   					
   							
   						
   $("#contact1").fadeOut("fast", function(){
   	
   	
   				$(this).before("<br/><p id=\"contact1\">Hello,<br/>\
Thank you for your interest in studying with us.<br/>\
A member of our international team will get back to you shortly to answer your question.<br/>\
<br/>\
Kind regards,<br/>\
<br/>\
International Office<br/>\
Waltham Forest College<br/>\
London<br/>\
<a hre=\"http://www.waltham.ac.uk/international\">www.waltham.ac.uk/international</a><br/>\
<br/>\
Tel: +44 (0) 20 8501 8106/8091</p>");
   					
   							});
   					//	}
   					}
   					
   		   }) 
   		   
   	
   
           }
   	
   	});
   	

   	
   })
</script>