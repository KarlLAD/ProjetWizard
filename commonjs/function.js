async function getName() {
  var nameTier = await document.getElementById("name").value;
  var adress = await document.getElementById("adress").value;
  var zip = await document.getElementById("zip").value;
  var city = await document.getElementById("city").value;
  var phone1 = await document.getElementById("phone1").value;
  var phone2 = await document.getElementById("phone2").value;
  var email = await document.getElementById("email").value;
  var country = await document.getElementById("country").value;
  var dpt = await document.getElementById("dpt").value;

  console.log(
    " name :",
    nameTier,
    adress,
    zip,
    city,
    phone1,
    phone2,
    email,
    country,
    dpt
  );
  setTimeout(300);
  return nameTier, adress, zip, city, phone1, phone2, email, country, dpt;
}
// Aller à la prochaine page
function next(nombre) {
  nombre = nombre + 1;
  console.log("nombre", nombre);
  url = "../etape" + nombre + ".php";
  console.log("url", url);
  window.location.href = url;

  alert("nombre", $nombre);
}

// Revenir à la page précédent
function prevent() {
  window.history.back();
  console.log("precedent");
  alert("précédent");
}

// Revenir à la première page
function reset() {
  window.location.href = "/index.php";
}
