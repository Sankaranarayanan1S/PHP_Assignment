<!-- Delete Modal -->
<div class="modal fade" id="deleteStudentData" tabindex="-1" aria-labelledby="deleteStudentDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteStudentDataLabel">Edit Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="deleteData.php" method="POST">
        <div class="modal-body">

                <input type="hidden" name="delete_id"  id="delete_id" >    
            
                <h5> Are you sure?</h5>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Cancel">Cancel</button>
            <button type="submit" name="deleteData" class="btn btn-danger">Yes Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>