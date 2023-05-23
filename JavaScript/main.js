//Search bar
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

//cancel button
function btncncl(id_dp) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Deleted!", "Your file has been deleted.", "success");
      location.href = "hapus.php?id=" + id_dp;
    }
  });
}
// log out
document.getElementById("logout").addEventListener("click", function (event) {
  event.preventDefault(); // prevent the default anchor behavior
  Swal.fire({
    type: "warning",
    title: "Log Out?",
    showCancelButton: true,
    confirmButtonText: "Log Out",
  }).then((result) => {
    location.href = "table.php";
  });
});
