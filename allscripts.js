//FORM VALIDATION
(function () {
  "use strict";

  var forms = document.querySelectorAll(".needs-validation");

  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

//POPULATE EDIT MODAL
$(document).ready(function () {
  $(".editbtn").on("click", function () {
    $("#editStudentData").modal("show");
    $tr = $(this).closest("tr");
    let data = $tr
      .children("td")
      .map(function () {
        return $(this).text();
      })
      .get();

    console.log(data);

    $("#id").val(data[0]);
    $("#editName").val(data[1]);
    $("#editDOB").val(data[2]);
    $("#editemail").val(data[3]);
    $("#editAddress").val(data[4]);
    $("#editCourse").val(data[5]);

  });
});

//POPULATE DELETE MODAL
$(document).ready(function () {
  $(".deletebtn").on("click", function () {
    $("#deleteStudentData").modal("show");
    $tr = $(this).closest("tr");
    let data = $tr
      .children("td")
      .map(function () {
        return $(this).text();
      })
      .get();

    console.log(data);

    $("#delete_id").val(data[0]);
  });
});
