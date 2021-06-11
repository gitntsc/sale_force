<table class="table">
                                <thead class="thead-dark">


                                <tr>
                                                                                            <th width="91"> <div align="center">username</div></th>
                                                                                            <th width="98"> <div align="center">section</div></th>
                                                                                        <th width="198"> <div align="center">company</div></th>
                                                                                        <th width="198"> <div align="center">name contact</div></th>
                                                                                        <th width="198"> <div align="center">product</div></th>
                                                                                        <th width="198"> <div align="center">date</div></th>
                                                                                        <th width="198"> <div align="center">Technicals</div></th>
                                                                                        <th width="97"> <div align="center">view</div></th>
                                                                                        

                                    </tr>
                                <?php
                                while($objResult3 = mysqli_fetch_array($objQuery3))
                                {
                                ?>
                                    <tr>
                                                                                            <td><div align="center"><?php echo $objResult3["username"];?></div></td>
                                                                                            <td><div align="center"><?php echo $objResult3["section"];?></div></td>
                                                                                            <td><div align="center"><?php echo $objResult3["company"];?></div></td>
                                                                                            <td><div align="center"><?php echo $objResult3["name_contact"];?></div></td>
                                                                                        <td><div align="center"><?php echo $objResult3["product"];?></div></td>
                                                                                        <td><div align="center"><?php echo $objResult3["strdate"];?></div></td>
                                                                                        <td><div align="center"><?php echo $objResult3["tech_name"];?></div></td>
                                                                                        
                                                                                        

                                                                                            <td align="center"><a href="pre_example_co.php?ex_id=<?php echo $objResult3["ex_id"];?>">view</a></td>

                                </tr>
                                    </tr>
                                <?php
                                }

                                ?>
                                </table>