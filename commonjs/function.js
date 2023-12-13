var nombre = 0;
async function getDatas1() {
  let dataEtape1 = {
    nameTier: "",
    adress: "",
    zip: "",
  };

  dataEtape1.nameTier = await document.getElementById("name").value;
  dataEtape1.adress = await document.getElementById("adress").value;
  dataEtape1.zip = await document.getElementById("zip").value;
  dataEtape1.city = await document.getElementById("city").value;
  dataEtape1.phone1 = await document.getElementById("phone1").value;
  dataEtape1.phone2 = await document.getElementById("phone2").value;
  dataEtape1.email = await document.getElementById("email").value;
  dataEtape1.country = await document.getElementById("country").value;
  dataEtape1.dpt = await document.getElementById("dpt").value;

  window.localStorage.setItem("etape1", dataEtape1);
  console.log("dataEtape1", dataEtape1);

  return dataEtape1;
}
var etape1 = getDatas1();

// Aller à la prochaine page
function next(actualPage) {
  console.log("actualPage : ", actualPage);

  actualPage = actualPage + 1;
  console.log("actualPage : ", actualPage);
  url = "../etape" + actualPage + ".php";
  console.log("url : ", url);
  window.location.href = url;
  return actualPage;
}

// Revenir à la page précédent
function prevent(actualPage) {
  actualPage = actualPage - 1;
  window.history.back();
  console.log("precedent : ", actualPage);
  return actualPage;
}

// Revenir à la première page
function reset() {
  actualPage = 1;
  window.location.href = "/index.php";
  return actualPage;
}

function recapitulatif() {
  console.log("etape1 :", etape1);
}
