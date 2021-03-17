<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div >  
                <h3 >Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                      <fieldset>
    <legend> <b> <font size="5px">Registration  </font> </b> </legend>
    <fieldset>

    <table>
    
      <tr >

        <td>Name</td>

        <td  ><input type="text" name="fullname"/></td>
       
         
      </tr>
           

      <tr>
        <td>Email</td>

        <td><input type="text" name="email"></td>
        
      </tr>
      <tr>
        <td > User Name   </td>
       

        <td><input type="text" name="name"/></td>
          
      </tr>

      <tr>
        <td>Password </td>
        
        <td><input type="password" name="password"/></td> <br>
        
      </tr>

      <tr>
        <td>Confrim Password </td>
       
        <td><input type="password" name="newPassword"/></td> <br>
      </tr>



    </table>
    </fieldset>
        <fieldset>
               <legend><b> Gender </b> </legend>
               <input type="radio" name="gender" value="Female">Female
               <input type="radio" name="gender" value="Male">Male
               <input type="radio" name="gender" value="Other">Other
               
            </fieldset>
    <hr>
    <fieldset>
        <legend> <b> Date Of Birth </b> </legend> <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31"> 
      
        </fieldset>
    <br>
    <table>
      <tr>
        <td>
          <input type="submit" name="submit" value="Submit"> 
     <input type="reset" value="Reset">
        </td>
      </tr>

    </table>
    
  </fieldset>                   
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  