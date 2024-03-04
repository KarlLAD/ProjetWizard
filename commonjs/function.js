// var db = openDataBase("ProjetWizard", "1.0", "description, 5 * 1024 *1024"); // 5MB

// async function getDatas1() {
//   let dataEtape1 = {
//     nameTier: "",
//     adress: "",
//     zip: "",
//     city: "",
//     phone1: null,
//     phone2: null,
//     email: "",
//     country: "",
//     dpt: "",
//   };

//   dataEtape1.nameTier = await document.getElementById("name").value;
//   dataEtape1.adress = await document.getElementById("adress").value;
//   dataEtape1.zip = await document.getElementById("zip").value;
//   dataEtape1.city = await document.getElementById("city").value;
//   dataEtape1.phone1 = await document.getElementById("phone1");
//   dataEtape1.phone2 = await document.getElementById("phone2");
//   dataEtape1.email = await document.getElementById("email").value;
//   dataEtape1.country = await document.getElementById("country").value;
//   dataEtape1.dpt = await document.getElementById("dpt").value;

//   window.localStorage.setItem("etape1", dataEtape1);
//   console.log("dataEtape1", dataEtape1);

// console.log("db", db);

//   return dataEtape1;
// }

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

// Valider les pages du formulaire

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

  updateProgressBar(actualPage, isValid);
  updateBreadcrumb(actualPage);
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

  updateProgressBar(actualPage, isValid);
  updateBreadcrumb(actualPage);
}

// validation du formulaire

function validerForm() {
  return true;
}

// Réinitialiser tous les champs des formalaires
function resetForm(actualPage) {
  //etape 1
  document.getElementById("form1").reset();

  // etape 2
  document.getElementById("form2").reset();

  // etape3
  document.getElementById("form3").reset();

  // etape4
  document.getElementById("form4").reset();

  // Redirigez vers la première étape
  const currentStep = document.getElementById("step" + actualPage); // ou l'étape actuelle
  const firstStepElement = document.getElementById("step1");
  currentStep.style.display = "none";
  firstStepElement.style.display = "block";

  // Réinitialisez également toute autre information pertinente, comme la barre de progression et le fil d'ariane.
  updateProgressBar(1, true);
  updateBreadcrumb(1);
}

// Gestion de la bar de progression du formulaire
let progressBar = document.getElementById("myProgressBar");

function updateProgress(progress) {
  progressBar.value = progress;
}

// Stockage de la progression de la barre de progression
function updateProgressBar(step, isValid) {
  const totalSteps = 5;
  const progressPercentage = (step / totalSteps) * 100;

  const progressBar = document.getElementById("progress");

  progressBar.style.width = progressPercentage + "%";

  progressBar.style.backgroundColor = isValid ? "green" : "red";

  // Stockage de la progression dans le localStorage
  localStorage.setItem("progressPercentage", progressPercentage);

  // Stockage de l'étape active dans le localStorage
  localStorage.setItem("activeStep", step);
}

// Récupération de la progression de la barre de progression lors du chargement de la page
window.onload = function () {
  const progressPercentage = localStorage.getItem("progressPercentage");
  if (progressPercentage === null) {
    // Si c'est la première fois que la page est chargée
    // Nous mettons Ã  jour la barre de progression et le fil d'ariane à l'étape "Nom du tiers"
    updateProgressBar(1, true);
    updateBreadcrumb(1);
  } else {
    // Sinon, nous récupÃ©rons l'étape sauvegardée dans le localStorage
    const progressBar = document.getElementById("progress");
    const percentageDisplay = document.getElementById("percentage");
    progressBar.style.width = progressPercentage + "%";
    // percentageDisplay.textContent = progressPercentage + '%';
  }
};

// Stockage de l'étape active du fil d'ariane
function updateBreadcrumb(step) {
  for (let i = 1; i <= 5; i++) {
    const breadcrumbStep = document.getElementById("breadcrumb-step" + i);
    breadcrumbStep.classList.remove("active");
  }

  const activeBreadcrumbStep = document.getElementById(
    "breadcrumb-step" + step
  );
  activeBreadcrumbStep.classList.add("active");
  // Stockage de l'étape active dans le localStorage
  localStorage.setItem("activeStep", step);
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
