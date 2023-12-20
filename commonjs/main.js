function infosTier(etape) {
  switch (etape) {
    case 1:
      return etape1();

      break;
    case 2:
      return etape2();

      break;
    case 3:
      return etape3();

      break;
    case 4:
      return etape4();

      break;
    case 5:
      return etape5();

      break;

    default:
      return index();
      break;
  }
}

function etape(etape) {
  window.location.href = "/etape" + etape + ".php";
}
function etape1() {
  window.location.href = "/etape1.php";
}
function etape2() {
  window.location.href = "/etape2.php";
}
function etape3() {
  window.location.href = "/etape3.php";
}
function etape4() {
  window.location.href = "/etape4.php";
}
function etape5() {
  window.location.href = "/etape5.php";
}
function index() {
  window.location.href = "/index.php";
}

index;
