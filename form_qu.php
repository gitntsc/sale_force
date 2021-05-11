<div class="login-form">
        <table class="table">
        <thead class="thead-dark">


            <tr>
            <th width="91"> <div align="center">qu_id</div></th>
            <th width="91"> <div align="center">username</div></th>
                <th width="98"> <div align="center">section</div></th>
            <th width="198"> <div align="center">company</div></th>
            <th width="198"> <div align="center">attn</div></th>
            <th width="198"> <div align="center">status</div></th>
            
            <th width="97"> <div align="center">view</div></th>

            </tr>
        <?php
        while($objResult3 = mysqli_fetch_array($objQuery3))
        {
        ?>
            <tr>
            <td><div align="center"><?php echo $objResult3["qu_id"];?></div></td>
            <td><div align="center"><?php echo $objResult3["username"];?></div></td>
                <td><div align="center"><?php echo $objResult3["section"];?></div></td>
                <td><div align="center"><?php echo $objResult3["company"];?></div></td>
                <td><div align="center"><?php echo $objResult3["attn"];?></div></td>
            <td><div align="center"><?php echo $objResult3["status"];?></div></td>
           



                <td align="center"><a href="pre_quatation_final.php?qu_id=<?php echo $objResult3["qu_id"];?>">view</a></td>

        </tr>
            </tr>
        <?php
        }

        ?>
        </table>

        </tr>
</div>