<!-- Modal -->
<div class="modal fade" id="studentData" tabindex="-1" aria-labelledby="studentDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentDataLabel">Enter Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="saveData.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="modal-body">
            
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control" id="Name" placeholder="Enter Your Name" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Name cannot be Empty
                    </div>
                </div>

                <div class="mb-3">
                    <label for="DOB" class="form-label">DOB</label>
                    <input type="date" name="DOB" class="form-control" id="DOB" placeholder="Enter Your DOB" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter valid Date of Birth.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="email" placeholder="Enter Your EmailID" aria-describedby="emailHelp" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please Enter Valid EmailID
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" name="Address" class="form-control" id="Address" placeholder="Enter Your Address" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Address is Required
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Course" class="form-label">Select a course:</label>
                    <select name="Course" id="Course" class="form-select" required>
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
                    <label for="Image" class="form-label" >Upload Image</label>
                    <input type="file" name="image" id="Image" value="Upload" accept=".jpeg, .jpg, .png, .gif" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please choose an image.
                    </div>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" name="saveData" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>