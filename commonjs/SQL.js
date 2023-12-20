// création de la base de données

var db = window.openDataBase(
  "ProjetWizard",
  "1.0",
  "description, 5 * 1024 *1024"
); // 5MB
console.log("ProjetWizard", db); // 5MB

// création d'une table

tx.executeSql(
  "CREATE TABLE IF NOT EXISTS test (id INTEGER PRIMARY KEY, nom TEXT, age NUMERIC)",
  [],
  function (tx, rs) {},
  function (tx, error) {
    sortie("Impossible de créer une table : " + error.message);
    return;
  }
);
