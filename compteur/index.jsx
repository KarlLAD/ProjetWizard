//  fct compteur
const Index = () => {
  // définition  du compossant

  const [nombre, setNombre] = useState(0);

  //fct qui permet d'incrementer le compteur
  const incrementation = () => {
    setNombre(nombre + 1);
    console.log("incrementation");
  };

  //fct qui décrémenter
  const decrementation = () => {
    setNombre(nombre - 1);
    console.log("decrementation");
  };

  return (
    <div className="app">
      <button onClick={decrementation}> -</button>
      {/* on décrémente le compteur */}
      <span> {nombre}</span>
      <button onClick={incrementation}> +</button>
      {/* on incrémente le compteur */}
    </div>
  );
};
