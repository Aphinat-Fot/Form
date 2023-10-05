<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ใบสมัครสมาชิก สมาคมกีฬาจังหวัดมุกดาหาร</title>       
        <link rel="stylesheet" href="style.css" />
        <!-- <script src="logic.js"></script> -->

  </head>
  <body>
      <?php 
        $datereal = $_POST["datereal"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $affiliation = $_POST["affiliation"];
        $birthday = $_POST["birthday"];
        $address = $_POST["address"];
        $zipcode = $_POST["zipcode"];
        $career = $_POST["career"];
        $work_at = $_POST["work-at"];
        $home_phone_number = $_POST["home-phone-number"];        
        $mobile_phone_number = $_POST["mobile-phone-number"];
        $email = $_POST["email"];
        $photo = $_POST["photo"];
        $type = $_POST["type"];


        isset($_POST["copy-id-card"]) ? $copy_id_card = $_POST["copy-id-card"] : $copy_id_card ="";
        isset($_POST["photo-2"]) ? $photo_2 = $_POST["photo-2"] : $photo_2 = "";
        isset($_POST["registration-fee"]) ? $registration_fee = $_POST["registration-fee"] : $registration_fee = null ;
        isset($_POST["maintenance-fee"]) ? $maintenance_fee = $_POST["maintenance-fee"] : $maintenance_fee = null;
        isset($_POST["maintenance-fee-1"]) ? $maintenance_fee_1 = $_POST["maintenance-fee-1"] : $maintenance_fee_1 = null;
        isset($_POST["other"]) ? $other = $_POST["other"] : $other = null;
        isset($_POST["other"]) ? $other = $_POST["other"] : $other = null;
        $affiliation_1 =$_POST["affiliation-1"] ? "หน่วยงานที่สมัคร  ".$_POST["affiliation-1"] : "";
        $other_2 = $_POST["other-2"];
        $name_1= $_POST["name-1"];
        $position = $_POST["position"];
        $b = $_POST["b"];
        $name_2= $_POST["name-2"];
        $arraycheckbox = array($copy_id_card,$photo_2,$registration_fee,$maintenance_fee,$maintenance_fee_1,$other); 
      ?>
        <div class="container">
            <div class="head">
                <div >ใบสมัครสมาชิก</div>
            <div >สมาคมกีฬาจังหวัดมุกดาหาร</div>
            </div>
            <div class="date">
                <label for="date">วันที่&nbsp;&nbsp;</label>
                <?php echo $datereal ?>
            </div>
            <div class="head-head">
                <div>
                    เรื่อง ขอสมัครเข้าเป็นสมาชิกสมาคมกีฬาจังหวัดมุกดาหาร
                </div>
                 <div>
                     เรียน นายกสมาคมกีฬาจังหวัดมุกดาหาร
                </div>
            </div>
             <div class="container1">
                        <div class="flex form-input">
                            <div class="header-form1" >ข้าพเจ้า</div>
                            <?php echo $name ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">อายุ</div>
                            <?php echo $age ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">ในนาม(ระบุตำแหน่งและชื่อหน่วยงาน ที่สมัคร)</div>
                          
                            <?php echo $affiliation ?>
                            
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">วันเดือนปีเกิด </div>
                           
                            <?php echo $birthday ?>                  
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">ที่อยู่</div>
                            <textarea name="address" id="textarea" cols="40" rows="5" disabled><?php echo $address ?></textarea>
                            
                        </div>
                        
                        <div class="flex form-input">
                            <div class="header-form1">รหัสไปรษณีย์</div>
                            
                            <?php echo $zipcode ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">อาชีพ</div>
                          
                            <?php echo $career ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">ทำงานที่</div>
                           
                            <?php echo $work_at ?>                      
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">เบอร์โทรศัพท์บ้าน/ที่ทำงาน</div>
                           
                            <?php echo $home_phone_number ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">หมายเลขโทรศัพท์มือถือ</div>
                            
                            <?php echo $mobile_phone_number ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">อีเมลล์</div>
                           
                            <?php echo $email ?>
                        </div>
                        <div class="flex form-input">
                            <div class="header-form1">รูปภาพ 1 นิ้ว</div>
                           
                            <?php echo $photo ?>
                        </div> 
                    </div>
                  
                    <!-- <div class="flex form-input">
                        <div class="">ขอสมัครเข้าเป็นสมาชิกสมาคมกีฬาจังหวัดมุกดาหาร</div>
                    </div> -->
                    <div class="container1">
                        <div class="flex form-input">
                            <div class="header-form1 ">ประเภท</div>
                            <?php echo $type ?>

                            <?php echo $affiliation_1 ?>
                        </div>
                   
                    </div>
                   
                    <div class="container1">
                        <div class="head-head">
                            หลักฐานการสมัคร
               </div>
                    </div>
                          
                    <div class="container2">
                        <div>
                            <?php foreach($arraycheckbox as $row){ ?>
                                <?php if($row != null){ ?>
                             <div class="flex form-input">
                                 <?php echo $row === "อื่นๆ" ? $row." ".$other_2 : $row  ?>  
                             </div>
                             <?php } ?>
                        <?php } ?>
                        
                       
                        </div>
                    </div>
            
                   
                    <div>
                        <div class="text-right" >
                            <div class="label">ลงชื่อ</div>
                            <div>
                            <?php echo $name_1 ?>
                            </div>
                            
                        </div>
                        <div class="text-right">
                            <div class="label">ตำแหน่ง</div>
                            <div class="form-input">
                            <?php echo $position ?>
                            </div>
                           
                        </div>
                    </div>
                    <div>
                        <hr width="100%" size="2">
                    </div>
                    <div class="flex">
                        <div class="text-indent form-input">
                            ความเห็นของคณะกรรมการสมาคมกีฬาจังหวัดมุกดาหาร
                        </div>
                       
                    </div>
                   
                    <div class="flex container2 form-input" >
                        <div class="flex ">
                            <?php echo $b ?> 
                        </div>
                        
                    </div>
                    <div>
                        <div class="text-right" >
                            <div class="label">ลงชื่อ</div>
                            <div class="t">
                               <?php echo $name_2 ?>
                            </div>
                           
                        </div>
                        <div class="text-right">
                            <div>
                                (นายเอกอมร ศรีลาศักดิ์)
                            </div>
                        </div>
                        <div class="text-right">
                            <div>นายกสมาคมกีฬาจังหวัดมุกดาหาร</div>
                        </div>
                    </div>
             
                
             
                   
                    <!-- <input type="submit"> -->

        </div>
  </body>
</html>
