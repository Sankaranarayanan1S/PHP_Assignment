<div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentData">
                    ADD 
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php
                        $connection = mysqli_connect("localhost:3306","root","root");
                        $db = mysqli_select_db($connection,'god');

                        $query = "SELECT `id`, `Name`, `DOB`, `Email`, `Address`, `Course`, `Image` FROM student_details";  
                        $query_success = mysqli_query($connection,$query);
                    ?>
    
                    <table class="table" id="tableId">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Course</th>
                                <th scope="col">Image</th>
                                <th scope="col">EDIT</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                    <?php
                        if ($query_success) {
                            foreach ($query_success as $key ) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $key['id'];?></td>
                                <td><?php echo $key['Name'];?></td>
                                <td><?php echo $key['DOB'];?></td>
                                <td><?php echo $key['Email'];?></td>
                                <td><?php echo $key['Address'];?></td>
                                <td><?php echo $key['Course'];?></td>
                                <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $key['Image'] ).'" width="50" height="60"/>';?></td>                 
                                <td>
                                    <button type="button" class="btn btn-success editbtn">EDIT</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn">Delete</button>
                                </td>
                            </tr>
                            
                        </tbody>
                    <?php
                            }
                        }
                        else {
                            echo "No Records Found";
                        }
                        mysqli_close($connection);
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>