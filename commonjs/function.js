// import isValidFrenchPhoneNumber from "./validePhone";

// var db = openDataBase("ProjetWizard", "1.0", "description, 5 * 1024 *1024"); // 5MB

async function getDatas1() {
  let dataEtape1 = {
    nameTier: "",
    adress: "",
    zip: "",
    city: "",
    phone1: null,
    phone2: null,
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
function home() {
  actualPage = 1;
  window.location.href = "/index.php";
  return actualPage;
}

//test

function test() {
  return true;
}

//réinitialisé toutess les pages web
function reset() {
  //etape 1
  document.getElementById("name").value = "";
  document.getElementById("address1").value = "";
  document.getElementById("zip").value = "";
  document.getElementById("city").value = "";
  document.getElementById("phone").value = null;
  document.getElementById("mobile").value = null;
  document.getElementById("Email").value = "";
  document.getElementById("country").value = "";
  document.getElementById("dpt").value = "";

  // etape2

  // etape3

  // etape4
}

function recapitulatif() {
  console.log("etape1 :");
  let recap = window.localStorage.getItem("etape1");
  console.log("dataEtape1", recap);
}

// regex tel

isValidFrenchPhoneNumber = (phonenumber) => {
  console.log("type :", typeof phonenumber);
  console.log("phonenumber :", phonenumber);
  /*


  */

  const metropolitanFranceReg = new RegExp(
    "^(?:(?:+|00)33|0)s*[1-9](?:[s.-]*d{2}){4}$"
  );
  //
  //   /^(?:(?:+|00)33|0)s*[1-9](?:[s.-]*d{2}){4}$/
  const overseasFranceReg = new RegExp(
    "^(?:(?:+|00|0)((262|692)|(263|693)|508|(5|6)90|(5|6)94|(5|6|7)96|681|687|689))(?:[s.-]*d{2}){3,4}$"
  );
  // src: https://en.wikipedia.org/wiki/Telephone_numbers_in_France
  // 262, 263 = La Réunion, Mayotte and IO territories ; 508 = Saint-Pierre-et-Miquelon
  // 590 = Guadeloupe, Saint-Martin et Saint-Barthélemy ; 594 = French Guiana (Guyane) ; 596 = Martinique
  // 681 = Wallis-et-Futuna ; 687 = Nouvelle-Calédonie
  // 689 = French Polynesia

  console.log("metro : ", metropolitanFranceReg);
  console.log("overseas :", overseasFranceReg);

  return (
    !(phonenumber.match(metropolitanFranceReg) === null) ||
    !(phonenumber.match(overseasFranceReg) === null)
  );

  // return phonenumber.match(metropolitanFranceReg);
};

//
