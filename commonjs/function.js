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

// définition des fonctions des étapes
function validerPage1() {
  //Ajoutez votre logique de validation pour l'étape 1 ici
  return true;
}
function validerPage2() {
  //Ajoutez votre logique de validation pour l'étape 2 ici
  return true;
}
function validerPage3() {
  //Ajoutez votre logique de validation pour l'étape 3 ici
  return true;
}
function validerPage4() {
  //Ajoutez votre logique de validation pour l'étape 4 ici
  return true;
}
function validerPage5() {
  //Ajoutez votre logique de validation pour l'étape 5 ici
  return true;
}

// valider les pages du formulaire

function validerPage(actualPage) {
  switch (actualPage) {
    case 1:
      return validerPage1();
    case 2:
      return validerPage2();
    case 3:
      return validerPage3();
    case 4:
      return validerPage4();
    case 5:
      return validerPage5();

    default:
      return false;
  }
}

// Aller à la prochaine page
function nextPage(actualPage) {
  const isValid = validerPage(actualPage - 1);

  // console.log("isValid :", isValid);
  if (!isValid) {
    return;
  }
  const currentPage = document.getElementById("step" + (actualPage - 1));
  const nextPageElement = document.getElementById("step" + actualPage);

  // console.log("currentPage :", currentPage);
  // console.log("nextPageElement :", nextPageElement);

  // Vérification si les éléments existent
  if (!currentPage || !nextPageElement) {
    console.error(
      "Element not found :",
      !currentPage ? "currentPage" : "nextPageElement"
    );
    return;
  }

  currentPage.style.display = "none";
  nextPageElement.style.display = "block";
}

// Revenir à la page précédente
function previousPage(actualPage) {
  const isValid = validerPage(actualPage);

  // console.log("isValid :", isValid);
  if (!isValid) {
    return;
  }
  const currentPage = document.getElementById("step" + (actualPage + 1));
  const previousPageElement = document.getElementById("step" + actualPage);

  // console.log("currentPage :", currentPage);
  // console.log("previousPageElement :", previousPageElement);

  // Vérification si les éléments existent
  if (!currentPage || !previousPageElement) {
    console.error(
      "Element not found :",
      !currentPage ? "currentPage" : "previousPageElement"
    );
    return;
  }

  currentPage.style.display = "none";
  previousPageElement.style.display = "block";
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

function validerForm() {
  return true;
}

// Réinitialiser tous les champs
function resetForm() {
  //etape 1
  document.getElementById("form1").reset();

  // etape 2
  document.getElementById("form2").reset();

  // etape3
  document.getElementById("form3").reset();

  // etape4
  document.getElementById("form4").reset();
}

// fonction update

function editData($data) {}
