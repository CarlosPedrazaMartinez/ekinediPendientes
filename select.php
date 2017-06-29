<?php  
 $connect = mysqli_connect("localhost", "id1969859_carlos1", "12345", "id1969859_registration");  
 $output = '';  
 if(isset($_POST["sql"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["sql"]);
 $sql = "
  SELECT * FROM pendientes 
  WHERE estatus LIKE '%".$search."%' OR tarea LIKE '%".$search."%'
 ";
}
else
{
 $sql = "
  SELECT * FROM pendientes ORDER BY id
 ";
}
 $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="15%">Tarea</th>  
                     <th width="15%">Estatus</th>  
                     <th width="15%">Fecha</th>
                      <th width="15%">Fecha Final</th>
                      <th width="15%">Responsable</th>
                     <th width="10%">Delete</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="tarea" data-id1="'.$row["id"].'" contenteditable>'.$row["tarea"].'</td>  
                     <td class="estatus" data-id2="'.$row["id"].'" contenteditable>'.$row["estatus"].'</td>  
                     <td class="fecha" data-id3="'.$row["id"].'" contenteditable>'.$row["fecha"].'</td>  
                     <td class="fechaf" data-id4="'.$row["id"].'" contenteditable>'.$row["fechaf"].'</td>
                     <td class="responsable" data-id5="'.$row["id"].'" contenteditable>'.$row["responsable"].'</td>   
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="tarea" contenteditable></td>  
                <td id="estatus" contenteditable></td>  
                <td id="fecha" contenteditable></td>  
                 <td id="fechaf" contenteditable></td>  
                <td id="responsable" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
