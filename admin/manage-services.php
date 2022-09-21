<?php include("partials/menu.php") ?> ;



        <!-- content section starts -->
        <section id="content">
            <h2>Manage Services</h2>
            <br>

            <?php
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'] ;
                        unset($_SESSION['add']) ;
                    }                    
                    if(isset($_SESSION['unautho']))
                    {
                        echo $_SESSION['unautho'] ;
                        unset($_SESSION['unautho']) ;
                    }                    
                             
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'] ;
                        unset($_SESSION['delete']) ;
                    }                    
                    if(isset($_SESSION['no-data']))
                    {
                        echo $_SESSION['no-data'] ;
                        unset($_SESSION['no-data']) ;
                    }                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'] ;
                        unset($_SESSION['update']) ;
                    }                    
                    if(isset($_SESSION['remove']))
                    {
                        echo $_SESSION['remove'] ;
                        unset($_SESSION['remove']) ;
                    }                    
            ?>
            <br>

            <div class="container">
                <a href="<?php echo SITEURL; ?>admin/add-service.php"><button class="btn-primary">Add Service</button></a> 
                    <table class="tbl_full text-left">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Featured</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>

                        <?php

                            $sql = "SELECT * FROM tbl_service" ;

                            $res = mysqli_query($conn, $sql) ;

                            $count = mysqli_num_rows($res) ;

                            $sn = 1;

                            if($count>0)
                            {
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'] ;
                                    $title = $row['title'] ;
                                    $description = $row['description'] ;
                                    $price = $row['price'] ;
                                    $image_name = $row['image_name'] ;
                                    $category = $row['category_id'] ;
                                    $featured = $row['featured'] ;
                                    $active = $row['active'] ;

                                    ?>

                                        <tr>
                                            <td><?php echo $sn++ ;?></td>
                                            <td><?php echo $title ; ?></td>
                                            <td><?php echo $description ; ?></td>
                                            <td><?php echo $price ; ?></td>
                                            <td>
                                                <?php
                                                      if($image_name != "")
                                                      {
                                                        ?>
                                                                <img src="../img/services/<?php echo $image_name ?>" width=100px>
                                                        <?php
                                                      }
                                                      else
                                                      {
                                                        echo "<div class='error'>No image added</div>" ;
                                                      }
                                                ?>
                                            </td>
                                            <td><?php echo $category ; ?></td>
                                            <td><?php echo $featured ; ?></td>
                                            <td><?php echo $active ; ?></td>
                                            <td>
                                                <a href="<?php echo SITEURL ; ?>admin/update-service.php?id=<?php echo $id ; ?>"><button class="btn-secondary">Update</button></a>
                                                <a href="<?php echo SITEURL ; ?>admin/delete-service.php?id=<?php echo $id ; ?>&image=<?php echo $image_name ;?>"><button class="btn-danger">Delete</button></a>
                                            </td>
                                        </tr>



                                    <?php
                                }                                
                            }
                            else
                                {
                                    ?>
                                            <tr>
                                                <td colspan="9" class="error text-center">!! No Services Available !!</td>
                                            </tr>
                                    <?php
                                }
                        ?>
                       
                        
                        
                        
                    </table>
            </div>
        </section>
        <!-- content section ends -->


 <?php include("partials/footer.php") ?> ;

       