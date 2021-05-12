
 <div class="form-group">
                            <label>บริษัท</label>
                            <?php
                           $strSQL11 = "SELECT * from customer where section = '".$_SESSION['section']."'";
                            $objQuery11 = mysqli_query($objCon,$strSQL11);
                            
                            ?>
                            <select class="form-control" id="company" name="company" onchange="myfunction()">
                            <?php
                            while ($objResult11 = mysqli_fetch_array($objQuery11)){
                            ?>
                            <option value="<?php echo $objResult11['name_company'];?>"><?php echo $objResult11['name_company'];?></option>
		

                            <?php
                            }
                            ?>
                            </select>
                              
                        </div>
<script>

function myfunction(){
var x = document.getElementById("company").value;
<?php
include "connect.php";
$strSQL = "SELECT * FROM where name_company = "
?>
}
</script>