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

// valider les pages du formulaire

function ValiderPage(actualPage) {
  switch (actualPage) {
    case 1:
      return ValiderPage1();
    case 2:
      return ValiderPage2();
    case 3:
      return ValiderPage3();
    case 4:
      return ValiderPage4();
    case 5:
      return ValiderPage5();

    default:
      return false;
  }
}

// Aller à la prochaine page
function nextPage(actualPage) {
  const isValid = validerPage(actualPage - 1);

  console.log("isValid :", isValid);
  // actualPage = actualPage + 1;
  // url = "../etape" + actualPage + ".php";

  // console.log("url : ", url);
  // console.log("windows.location :", window.location);
  // window.location.href = url;

  return actualPage;
}

// Revenir à la page précédent
function previousPage(actualPage) {
  actualPage = actualPage - 1; // window.history.back();

  url = "../etape" + actualPage + ".php";
  etape = actualPage;
  // console.log("url : ", url);
  window.location.href = url;
  // console.log("precedent : ", actualPage);
  // windows.history.go(-1);
  // location.href = document.referrer;
  return actualPage;
}

// Revenir à la première page du formulaire
function home() {
  actualPage = 1;
  window.location.href = "../index.php";
  return false;
}

//réinitialisé toutess les pages web
function reset(actualPage) {
  switch (actualPage) {
    case 1:
      {
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
      }

      break;

    case 2: {
      // etape 2
      document.getElementById("passport").value = "";
      document.getElementById("facture").value = "";
      document.getElementById("rib").value = "";
    }

    case 3: {
      // etape3
    }

    default:
      break;
  }

  // etape4
}

// regex tel

isValidFrenchPhoneNumber = (phonenumber) => {
  console.log("type :", typeof phonenumber);
  console.log("phonenumber :", phonenumber);
  /*


  */

  const metropolitanFranceReg = new RegExp(
    /(0|\\+33|0033)s*[1-9](?:[s.-]*d{2}){4}$/
  );
  // /^(?:(00)33|0)s*[1-9](?:[s.-]*d{2}){4}$/
  //   net : /^(?:(?:+|00)33|0)s*[1-9](?:[s.-]*d{2}){4}$/
  const overseasFranceReg = new RegExp(
    /^(?:(?:\\+|00|0)((262|692)|(263|693)|508|(5|6)90|(5|6)94|(5|6|7)96|681|687|689))(?:[s.-]*d{2}){3,4}$/
  );
  // src: https://en.wikipedia.org/wiki/Telephone_numbers_in_France
  // 262, 263 = La Réunion, Mayotte and IO territories ; 508 = Saint-Pierre-et-Miquelon
  // 590 = Guadeloupe, Saint-Martin et Saint-Barthélemy ; 594 = French Guiana (Guyane) ; 596 = Martinique
  // 681 = Wallis-et-Futuna ; 687 = Nouvelle-Calédonie
  // 689 = French Polynesia

  console.log("metro : ", metropolitanFranceReg);
  console.log("overseas :", overseasFranceReg);
  console.log("test1 :", phonenumber.match(metropolitanFranceReg) === null);
  console.log("test2 :", phonenumber.match(overseasFranceReg) === null);

  return (
    !(phonenumber.match(metropolitanFranceReg) === null) ||
    !(phonenumber.match(overseasFranceReg) === null)
  );

  // return phonenumber.match(metropolitanFranceReg);
};

// validation

function valider() {
  var valide = document.getElementByName("validation");
  console.log("valide :", valide);
  alert("valider");
  return valide;
}

// fonction update

function editData($data) {}
