<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
        <style>
          thead.c {
          table-layout: auto;
           width: 100%;  
          }
        </style>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div >              
                <div > 
                     <table class="table table-bordered">  
                     
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>
                               <th>User Name</th> 
                               <th>Password</th> 
                               <th>Confrim Password</th>
                               <th>Gender</th>
                               <th>Date Of Birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["fullname"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["password"].'</td>
                               <td>'.$row["newPassword"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>';  
                          } 
                         
                          ?> 
                           
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  