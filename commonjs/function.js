// var db = openDataBase("ProjetWizard", "1.0", "description, 5 * 1024 *1024"); // 5MB

async function getDatas1() {
  let dataEtape1 = {
    nameTier: "",
    adress: "",
    zip: "",
    city: "",
    phone1: 0,
    phone2: 0,
    email: "",
    country: "",
    dpt: "",
  };
  dataEtape1.nameTier = await document.getElementById("name").value;
  dataEtape1.adress = await document.getElementById("adress").value;
  dataEtape1.zip = await document.getElementById("zip").value;
  dataEtape1.city = await document.getElementById("city").value;
  dataEtape1.phone1 = await document.getElementById("phone1");
  dataEtape1.phone2 = await document.getElementById("phone2");
  dataEtape1.email = await document.getElementById("email").value;
  dataEtape1.country = await document.getElementById("country").value;
  dataEtape1.dpt = await document.getElementById("dpt").value;

  window.localStorage.setItem("etape1", dataEtape1);
  console.log("dataEtape1", dataEtape1);

  // console.log("db", db);

  return dataEtape1;
}

// Aller à la prochaine page
function next(actualPage) {
  actualPage = actualPage + 1;
  url = "../etape" + actualPage + ".php";
  console.log("url : ", url);
  window.location.href = url;
  return actualPage;
}

// Revenir à la page précédent
function prevent(actualPage) {
  actualPage = actualPage - 1;
  // window.history.back();
  url = "../etape" + actualPage + ".php";
  console.log("url : ", url);
  window.location.href = url;

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
  console.log("etape1 :");
  let recap = window.localStorage.getItem("etape1");
  console.log("dataEtape1", recap);
}
