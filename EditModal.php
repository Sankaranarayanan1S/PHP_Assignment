<!--Edit Modal -->
<div class="modal fade" id="editStudentData" tabindex="-1" aria-labelledby="editStudentDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editStudentDataLabel">Edit Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="updateData.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="modal-body">

                <input type="hidden" name="id"  id="id" />    
            
                <div class="mb-3">
                    <label for="editName" class="form-label">Name</label>
                    <input type="text" name="editName" class="form-control" id="editName" placeholder="Enter Your Name" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Name cannot be Empty
                    </div>
                </div>

                <div class="mb-3">
                    <label for="editDOB" class="form-label">DOB</label>
                    <input type="date" name="editDOB" class="form-control" id="editDOB" placeholder="Enter Your DOB" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter valid Date of Birth.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="editemail" class="form-label">Email address</label>
                    <input type="email" name="editEmail" class="form-control" id="editemail" placeholder="Enter Your EmailID" aria-describedby="emailHelp" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter Valid EmailID
                    </div>
                </div>

                <div class="mb-3">
                    <label for="editAddress" class="form-label">Address</label>
                    <input type="text" name="editAddress" class="form-control" id="editAddress" placeholder="Enter Your Address" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Address is Required
                    </div>
                </div>

                <div class="mb-3">
                    <label for="editCourse" class="form-label">Select a course:</label>
                    <select name="editCourse" id="editCourse" class="form-select" required>
                        <option style="display:none"></option>
                        <option value="Math">Math</option>
                        <option value="computer">computer</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Biology">Biology</option>
                    </select>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose a COURSE.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="editImage" class="form-label" >Change Image</label>
                    <input type="file" name="editImage" id="editImage" value="Upload" accept=".jpeg, .jpg, .png, .gif" />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose an image.
                    </div>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" name="updateData" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>