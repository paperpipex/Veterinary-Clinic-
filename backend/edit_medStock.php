<?php
    include ('../condb.php');

    $sql = "SELECT MedID,MedName,Quantity FROM medicine";
    $result = mysqli_query($condb,$sql);

    $row = mysqli_fetch_assoc($result);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คลินิกรักษาสัตว์</title>

    <link rel="stylesheet" href="../style3.css">
    <link rel="stylesheet" href="../style1.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
   <script src = 'link.js'></script>
   <style>
         table, th, td {
            border: 3px solid #509897;
            border-collapse: collapse;
            background-color: #f7f4f4;
         }
         input{
            height: 30px;
            border: none;
				text-align:center;
				border-radius: 8px;
            font-size:large;
            background-color:rgb(228, 228, 228);
            
         }
   </style>

</head>

<body style="background-color:#d1ede4;">
<div>
      <div id="box1" class="eiei"></div>
      <div id="box2" class="eiei"></div>
   </div>

   <div id="logo">
      <img src="../logo.png" width="100" height="70">
   </div>

   <div id="clinic">
      <b>คลินิกรักษาสัตว์</b>

   </div>
   <form>
   <div id="boxform">
         &emsp;
         <button type ="button" onclick="home()" class="hover-underline-animation">หน้าหลัก</button>
         <button type ="button" onclick="pethis()" class="hover-underline-animation">ประวัติสัตว์</button>
         <button type ="button" onclick="date()" class="hover-underline-animation">ตารางนัด</button>
         <button type ="button" onclick="medtable()" class="hover-underline-animation">Medicine stock</button>
         <button type ="button" onclick="emp()" class="hover-underline-animation">บุคลากร</button> &emsp;&emsp;&emsp;&emsp;
         <img id="pic" style="cursor: pointer;" onclick="logout()" src="../setting.png" width="50" height="50">
         <div class="c" id="gbox">
            <br>
            <p style="font-size: 1.4em; color: #265a66;">
               <b>&emsp;&emsp;&emsp;&emsp;&emsp;<font size="6">Medicine stock</font></b>
            </p>
         </div>
         <br><br><br>

        <table style="width:70%  ; margin-left: 15%;">
                  <thead>
                    <tr>
                        <td colspan=5  height="80" width="100"> <font size="7" color ="#265a66" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แก้ไขข้อมูล Medicine stock </font></td>
                    </tr>

                    <tr>
                        <th> <font style="color:#5f5f5d ;" size="5.5"> รหัสยา </font></th>
                        <th> <font style="color:#5f5f5d ;" size="5.5"> ชื่อยา </font></th>
                        <th> <font style="color:#5f5f5d ;" size="5.5"> จำนวนคงเหลือ (มล.) </font></th>
                        <th> <font style="color:#5f5f5d ;" size="5.5"> แก้ไข </font></th>
                        <th> <font style="color:#5f5f5d ;" size="5.5"> ลบ </font></th>
                        
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["MedID"]; ?></td>
                        <td><?php echo $row["MedName"]; ?></td>
                        <td><?php echo $row["Quantity"]; ?></td>
                        <td><a href="editForm_medStock.php?idmed=<?php echo $row["MedID"];?>" class="btn">แก้ไข</a></td>
                        <td><a href="deleteMedStock.php?idmed=<?php echo $row["MedID"];?>" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')" class="btn">ลบ</a></td>
                    </tr>
                    <?php } ?>

                    
                    <tr> 
                        <td colspan=5 height="80" > 
                           <button type="button" onclick="location.href='index_medStock.php'" id="bbutton"></button>
                           <button type="button" onclick="location.href='insert_medForm.php'" id="Addbutton"></button>
                           
                           
                        </td> 
                   </tr>

                 </tbody>
        </table>




    </div>
    </form>
    
    <br>
    <p>&emsp;©สงวนลิขสิทธิ์เฉพาะคลินิกรักษาสัตว์</p>
</body>
</html>
