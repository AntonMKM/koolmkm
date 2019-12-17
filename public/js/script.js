function confirmation(id) {
  var conf = confirm("êtes vous sûr de vouloir supprimer ces données ?");
  if (conf == true) {
    document.location.replace("index.php?action=delete&id=" + id);
  }
}
function modif(id) {
  loginTab = document.getElementById("login" + id);
  emailTab = document.getElementById("email" + id);
  statusTab = document.getElementById("status" + id);

  let login = loginTab.innerHTML;
  let email = emailTab.innerHTML;
  let status = statusTab.innerHTML;

  loginTab.innerHTML =
    "<input required type='text' name='login' value='" + login + "'>";
  emailTab.innerHTML =
    "<input required type='text' name='email' value='" + email + "'>";
  statusTab.innerHTML =
    "<input required type='text' name='status' value='" + status + "'>";

  document.getElementById("bouton" + id).innerHTML =
    "<input type='submit' class='btn btn-success' value='update'>";
  document.getElementById("formModif").action =
    "index.php?action=update&id=" + id;
}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
