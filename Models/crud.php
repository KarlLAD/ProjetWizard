<?php
$tab = array([1,2,3,6]) ;

trait readtrait {

        public function getdata() {
            echo "<br> getdata" ;
            

        

        }

}

trait updatetrait {

    public function updateTier() {
        echo "<br> update" ;
    }

}
 trait deletetrait {

    public function deleteTier()  {

echo "<br> delete" ;

    }
 }

class listdb {

    use readtrait ;
   

    public function readdata() {
        // $id = $tab['id'] ;

        echo "<br> read data" ;
        // echo $this->tab[$id] ;
    }
}
$test= new listdb() ;
$test->getdata();
$test-> readdata() ;




?>