<?php


class BaseManager {


}



class addressTier extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("nameTier","addressTier",$datasource);	
		}
		
		public function getByName($nameTier)
		{
			$req = $this->_bdd->prepare("SELECT * FROM user WHERE nameTier = :nameTier");
			$req->execute(array($nameTier));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"addressTier");
			return $req->fetch();
		}
    }


class Model {

    function Model()  {
        return "model";
    }


}




class addressTierNew {

    

    // lister dB
    public function index() {




        return "index" ;


    }

    // supprimer un nameTier

    public function destroy() {

        return "destroy" ;
    }


    // modifier  un nameTier
    
    public function update() {

        return "update" ;

    }


    // créer un nameTier

    public function create() {

        return "create" ;
    }

}



?>