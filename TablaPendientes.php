<?php include('server.php'); 

    // if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>

<html>  
      <head>  
           <title>Pendientes</title>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
  <body>        
     <input type='Submit' value=salir class="btn btn-primary pull-right" OnClick="window.location.href='index.php'">
      

           <div class="container">  
                <br />  
                <br />  
                <br />  
          
                <div class="table-responsive">  
             
<span class="input-group-addon">Search</span>
     
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />

                     <h3 align="center">Pendientes</h3><br />  
                     <div id="live_data"></div>
                    
          
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data(sql)  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                data:{sql:sql},  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var tarea = $('#tarea').text();  
           var estatus = $('#estatus').text();  
           var fecha = $('#fecha').text();  
           var fechaf = $('#fechaf').text();
           var responsable = $('#responsable').text();
           if(tarea == '')  
           {  
               
                return false;  
           }  
           if(estatus == '')  
           {  
                
                return false;  
           }  
           if(fecha == '')  
           {  
              
                return false;  
           }  

            if(fechaf == '')  
           {  
              
                return false;  
           }  
           if(responsable == '')  
           {  
              
                return false;  
           }  

           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{tarea:tarea, estatus:estatus, fecha:fecha, fechaf:fechaf, responsable:responsable},  
                dataType:"text",  
                success:function(data)  
                {  
                     
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                    
                }  
           });  
      }  
 fetch_data();
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   fetch_data(search);
  }
  else
  {
   fetch_data();
  }
 });



      $(document).on('blur', '.tarea', function(){  
           var id = $(this).data("id1");  
           var tarea = $(this).text();  
           edit_data(id, tarea, "tarea");  
      });  
      $(document).on('blur', '.estatus', function(){  
           var id = $(this).data("id2");  
           var estatus = $(this).text();  
           edit_data(id, estatus, "estatus");  
      });  
       $(document).on('blur', '.fecha', function(){  
           var id = $(this).data("id3");  
           var fecha = $(this).text();  
           edit_data(id, fecha, "fecha");  
      });  

      $(document).on('blur', '.fechaf', function(){  
           var id = $(this).data("id4");  
           var fechaf = $(this).text();  
           edit_data(id, fechaf, "fechaf");  
      });  

       $(document).on('blur', '.responsable', function(){  
           var id = $(this).data("id5");  
           var responsable = $(this).text();  
           edit_data(id, responsable, "responsable");  
      });  
       
       
       
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id6");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                      
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>
