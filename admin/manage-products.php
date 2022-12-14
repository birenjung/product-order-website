<?php include("partials/menu.php"); ?> 

<!-- content section starts -->
<section id="content">
    <h2>Manage Products</h2>            

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

    <div class="container-fluid">                
        <div class="add_button">
            <a href="<?php echo SITEURL ; ?>admin/add-product.php"><button class="btn btn-outline-primary">ADD PRODUCT</button></a> 
        </div>
        <div class="jq-filter">
            <input type="text" id="jq-filter" class="form-control" placeholder="Search">
        </div>
        <div class="clear-fix"></div>
        <div class="table-responsive">
            <table class="table table-bordered mt-2" id="a_table">
                <thead class="table-light">
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
                </thead>

                <?php

                    $sql = "SELECT * FROM tbl_product" ;

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
                                <tbody>
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
                                                        <img src="../img/products/<?php echo $image_name ?>" width=100px>
                                                <?php
                                                }
                                                else
                                                {
                                                echo "<div class='error'>No image added</div>" ;
                                                }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            
                                            $sql2 = "SELECT * FROM tbl_category WHERE id=$category";
                                            $res2 = mysqli_query($conn, $sql2);
                                            $row2 = mysqli_fetch_assoc($res2);
                                            $category = $row2['title'];
                                            echo $category;
                                        ?>                                             
                                    </td>
                                    <td><?php echo $featured ; ?></td>
                                    <td><?php echo $active ; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL ; ?>admin/update-product.php?id=<?php echo $id ; ?>"><button class="btn btn-sm btn-outline-secondary">UPDATE <i class="fa-sharp fa-solid fa-pen"></i></button></a>                                        
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#a<?php echo $id; ?>">DELETE <i class="fa-solid fa-trash"></i></button>                                                                  
                                            <!-- Modal -->
                                            <div class="modal fade" id="a<?php echo $id; ?>" tabindex="-1" aria-labelledby="a<?php echo $id; ?>Label" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            Delete
                                                        </div>
                                                        <div class="modal-body">
                                                            <span >
                                                                Are you sure to delete <?php echo $title; ?> ?
                                                            </span>                                                                                    
                                                        </div> 
                                                        <div class="modal-footer">                                                                                
                                                        <a href="<?php echo SITEURL ; ?>admin/delete-product.php?id=<?php echo $id ; ?>&image=<?php echo $image_name ;?>"><button class="btn btn-sm btn-outline-danger">CONFIRM</button></a>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        </div>                                                                          
                                                    </div>
                                                </div>
                                            </div> 
                                    </td>
                                </tr>



                            <?php
                        }                                
                    }
                    else
                        {
                            ?>
                                    <tr>
                                        <td colspan="9" class="error text-center">!! No Products Available !!</td>
                                    </tr>
                            <?php
                        }
                ?>
                
                
                
                </tbody> 
            </table>
    </div>
</section>
<!-- content section ends -->

 <?php include("partials/footer.php"); ?> 

       