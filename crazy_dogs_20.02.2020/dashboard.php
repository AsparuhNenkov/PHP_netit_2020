<?php 
    session_start();     
    
    include './utils/user-managment.php';
    include './ui/market-managment.php';

?> 
<html>
    <head>
        <title>Shop</title>
        <link rel="stylesheet" href="/style/dashboard.css"/>
    </head>
    <body>
       
        <header id="header">
            <?php  display_nickname(); ?>
            
        </header>
        <form method="POST">
            <select name="filter_category">
                <option value="all">Всички</option>
                <option value="buy">За покупка</option>
                <option value="sell">За продажба</option>
            </select>
            <input type="hidden" name="selection_tokken" value="1">
            <input class="submit" type="submit" value="Филтрирай"/> 
        </form>
        
        
        <h2>Crazy dogs market</h2>
        
        <?php 
                
            $catArtefactCollection = array(
                array(
                   'name'      => 'Boyko',
                   'age'       => 12,
                   'img'       => 'crazyDogs/crazyDog6.jpg',
                   'address'   => 'Bankya 34',
                   '_action'   => 'sell'
                ),
               array(
                'name'      => 'Valerii',
                'age'       => 15,
                'img'       => 'crazyDogs/crazyDog1.jpg',
                'address'   => 'Chiflik 24',
                '_action'   => 'sell'                   
                ),
                array(
                   'name'      => 'Volen',
                   'age'       => 10,
                   'img'       => 'crazyDogs/crazyDog2.jpg',
                   'address'   => 'Yambol 54',
                    '_action'   => 'sell'                   
                ),
               array(
                'name'      => 'Krasimir',
                'age'       => 11,
                'img'       => 'crazyDogs/crazyDog4.jpg',
                'address'   => 'Ruse 16',
                   '_action'   => 'sell'                   
                ),
                array(
                'name'      => 'Vasil',
                'age'       => 5,
                'img'       => 'crazyDogs/gangDog3.jpg',
                'address'   => 'Velingrad 01',
                   '_action'   => 'buy'                   
                ),
                array(
                'name'      => 'Tzvetan',
                'age'       => 8,
                'img'       => 'crazyDogs/gangDog1.jpg',
                'address'   => 'Gabrovo 16',
                   '_action'   => 'buy'                   
                ),  
            );
        
           
            $filterCategory = 'all';
            if(isset($_POST['filter_category'])) {
                $filterCategory = $_POST['filter_category'];
            }
            
            display_item_collection_filter($catArtefactCollection, $filterCategory);
            
        

        ?>
        
          
       
        
    </body>
</html>
