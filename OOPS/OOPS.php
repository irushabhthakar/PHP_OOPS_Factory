<?php
 class Books 
 {
        /* Member variables */
        var $price;
        var $title;
        
        /* Member functions */
        function setPrice($par){
        $this->price = $par;
        }
        
        function getPrice(){
        echo $this->price ."<br/>";
        }
        
        function setTitle($par){
        $this->title = $par;
        }
        
        function getTitle(){
        echo $this->title ." <br/>";
        }
    }

    $physics = new Books;
    $maths = new Books;
    $chemistry = new Books;
    $physics->setTitle( "Physics for High School" );
    $chemistry->setTitle( "Advanced Chemistry" );
    $maths->setTitle( "Algebra" );
    
    $physics->setPrice( 10 );
    $chemistry->setPrice( 15 );
    $maths->setPrice( 7 );
    // Calling another member function with object
    $physics->getTitle();
    $chemistry->getTitle();
    $maths->getTitle();
    $physics->getPrice();
    $chemistry->getPrice();
    $maths->getPrice();

    // NOTE Example  of Inharitence
    class Book_child extends Books{
        var $publisher;
    
    function setPublisher($par){
        $this->publisher = $par;
    }
    
    function getPublisher(){
        echo $this->publisher. "<br />";
    }
    function getPrice() {
        echo $this->price . "<br/>";
        return $this->price;
     }
        
     function getTitle(){
        echo $this->title . "<br/>";
        return $this->title;
     }

    }
?>


