<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body style="background-image: linear-gradient(to top,#cfd9df,#e2ebf0)">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('downloadable_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid" style="margin-left:25px;">
                        <!-- block -->
                        <div id="block_bg" class="block" style="box-shadow: none;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Downloadable File Uploaded List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>Description</th>
												<th>Upload By</th>
												<th>Class</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysqli_query($conn, "select * FROM files LEFT JOIN teacher ON teacher.teacher_id = files.teacher_id 
																				  LEFT JOIN teacher_class ON teacher_class.teacher_class_id = files.class_id 
																				  INNER JOIN class ON class.class_id = teacher_class.class_id  ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
									?>
										<tr>
										 <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                      
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                         <td><?php echo $row['class_name']; ?></td>

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>

        </div>
		<?php include('script.php'); ?>
    </body>

</html>