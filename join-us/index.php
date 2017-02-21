<!DOCTYPE html>  
 <html>  
      <head>  
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="Elecbits" content=" We make Electronics Easy.">
		<meta name="author" content="Elecbits">
           <title>Elecbits | We make Electronics Easy.</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;" > 
           <h2 style="font-family:curasive;" >Elecbits Survey/Join-Us </h2>
                <form id="submit_form">  
                     <label>Email</label>  
                     <input type="text" name="name" id="name" class="form-control" />  
                     <br /> 
                     <label>Name</label>  
                     <input type="text" name="na" id="na" class="form-control" />  
                     <br />
                     <label>What are the difficulties you are facing while making your Electronic project ?</label>  
                     <textarea rows="4" cols="50" name="message" id="message" class="form-control"></textarea>
                     <br /> 
                     <label>If you like to join us for our new ventures, Please create a password.</label>
                     <input type="password" name="pass" id="pass" class="form-control" /> 
                      
                      <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                     <span id="error_message" class="text-danger"></span>  
                     <span id="success_message" class="text-success"></span>  
                </form>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();
           var na = $('#na').val();  
           var message = $('#message').val();
           var pass = $('#pass').val();
           
           if(name == ''|| message == ''|| na == '' )  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"insert.php ",  
                     method:"POST",  
                     data:{name:name, message:message, na:na, pass:pass},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 8000);  
                     }  
                });  
           }  
      });  
 });  
 </script>
 
 
