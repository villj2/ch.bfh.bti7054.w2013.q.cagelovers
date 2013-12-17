<?php

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    include ("$root/cagelovers/templates/header.php");
    include("$root/cagelovers/src/cfg/dbconfig.php");
    include("$root/cagelovers/src/db/ArticleDB.inc");
    include("$root/cagelovers/src/db/ArticleCategoryDB.inc");
    include("$root/cagelovers/src/db/ArticleImagesDB.inc");
    include("$root/cagelovers/src/db/CategoryDB.inc");
    include("$root/cagelovers/src/db/ArticleSubDB.inc");
    include("$root/cagelovers/src/cfg/dbopen.php");
    
    
    if($_GET['id']){
                
        $currentArticle = new ArticleDB();
        $currentArticle = $currentArticle->getSpecificArticle($_GET['id']);
        $currentArticle = $currentArticle->fetch_object();
        
        if($currentArticle == null) header('Location: /cagelovers/products/');
        
        $currentArticleCat = new ArticleCategoryDB();
        $currentArticleCat = $currentArticleCat->getAllCategoriesByArticle($_GET['id']);
        $currentArticleCat = $currentArticleCat->fetch_object();
        
        $currentCat = new CategoryDB();
        $currentCat = $currentCat->getSpecificCategory($currentArticleCat->CategoryID);
        $currentCat = $currentCat->fetch_object();
        
        $currentArticleImage = new ArticleImagesDB();
        $currentArticleImage = $currentArticleImage->getArticleImagesByArticleID($_GET['id']);
        $currentArticleImage = $currentArticleImage->fetch_object();
        
        $currentArticleSub = new ArticleSubDB();
        $currentArticleSub = $currentArticleSub->getArticleSubByArticleID($_GET['id']);
        //$currentArticleSub = $currentArticleSub->fetch_array();
        
        //$basket = new Basket();
        //$_SESSION['basket'] = serialize($basket);
        
    } else {
        
        header('Location: /cagelovers/products/');
    }
    
    if(isset($_GET['id']) && isset($_GET['add']) && $_GET['amount']) {
        
        
        if(is_null($_SESSION['basket'])) {
            $basket = new Basket();
        } else {
            $basket = unserialize($_SESSION['basket']);
        }
        
        // if item is already in basket edit amount
        // else add new item to basket with amount 1
        if($basket->hasItem($_GET['id'])) {
            
            $item = $basket->getItemById($_GET['id']);
            $item->amount += $_GET['amount'];
            if(isset($_GET['modification'])) $item->modification = $_GET['modification'];
            $basket->updateItem($item);
            
            $_SESSION['basket'] = serialize($basket);
            
        } else {
            
            $item = new Item();
            $item->id = $_GET['id'];
            $item->description = $currentArticle->Description;
            $item->categoryId = $currentArticleCat->ID;
            $item->name = $currentArticle->Title;
            $item->prize = $currentArticle->Price;
            $item->amount = $_GET['amount'];
            if(isset($_GET['modification'])) $item->modification = $_GET['modification'];
            $basket->addItem($item);
            
            $_SESSION['basket'] = serialize($basket);
        }
        
        $added = "Artikel wurde &#104;&#105;&#110;&#122;&#117;&#103;&#101;&#102;&#252;&#103;&#116;.";
    }
    
    
?>



<div class="container">
    
    <div class="row">
        <div class="checkout">
            <div class="col-lg-12">
            
            <?php
                echo "<h1>$currentArticle->Title</h1>";
                echo "<h4>$currentArticle->Description</h4>";
            ?>
            <hr />
            
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="checkout">
            <div class="col-lg-4">
                <div class="img-container">
                    <?php
                        echo '<img src="/cagelovers/'.$currentArticleImage->ImagePath.'">';
                    ?>
            <!--<img src="/cagelovers/img/products/bed_320x240.jpg">-->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="info">
                    <div class="description">
                        <table>
                            <tr>
                                <td class="bold">Preis:</td>
                                <td>CHF <?php echo $currentArticle->Price ?>.-</td>
                            </tr>
                            <tr>
                                <td class="bold">Höhe:</td>
                                <td><?php echo $currentArticle->Height ?> cm</td>
                            </tr>
                            <tr>
                                <td class="bold">Breite:</td>
                                <td><?php echo $currentArticle->Width ?> cm</td>
                            </tr>
                            <tr>
                                <td class="bold">Gewicht:</td>
                                <td><?php echo $currentArticle->Weight ?> g</td>
                            </tr>
                            <!--
                            <tr>
                                <td class="bold">&#83;&#116;&#252;&#99;&#107;&#97;&#110;&#122;&#97;&#104;&#108;:</td>
                                <td>120</td>
                            </tr>
                            -->
                            <tr>
                                <td class="bold">Kategorie:</td>
                                <td><?php echo $currentCat->DescriptionDE ?></td>
                            </tr>
                            
                            <?php
                            
                            //$goat = 
                            
                            
                            /*
                            <tr>
                                <td class="bold">&#83;&#116;&#252;&#99;&#107;&#97;&#110;&#122;&#97;&#104;&#108;:</td>
                                <td>120</td>
                            </tr>
                             * */
                            ?>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="checkout">
            
            
            <div class="additional-info clearfix">
                
                <div class="col-xs-9 clearfix">
                    <a href="/cagelovers/products/" class="back btn btn-success">zur &#220;&#98;&#101;&#114;&#115;&#105;&#99;&#104;&#116;</a>
                </div>
                
                <div class="col-xs-3 clearfix products-add-basket">
                    
                    <?php
                        if(isset($added)){
                            echo "<div>$added</div>";
                        }
                    ?>
                    
                    <form role="form" action="/cagelovers/products/detail.php" method="get">
                        <div class="form-group">
                            
                            <?php
                            
                                $row = $currentArticleSub->fetch_array(MYSQLI_BOTH);
                            
                                if(count($row) > 0) {
                                    echo '<select name="modification">';
                                   
                                    do{
                                        if(isset($row)){
                                            echo '<option value="'.$row['ID'].'">'.$row['Value'].'</option>';
                                        }
                                    }
                                    while($row = $currentArticleSub->fetch_array(MYSQLI_BOTH));

                                    echo '</select>';
                                }
                                
                                    
                              ?>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="amount" name="amount" placeholder="Anzahl" value="1" >
                        </div>
                        <input type="hidden" name="add" value="true">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <button type="submit" class="btn btn-default btn-success">In den Warenkorb</button>
                      </form>
                    
                    <!--
                    <div class="btn-success">
                        <a href="?add=true&id=1111" class="btn btn-success">In den Warenkorb</a>
                    </div>
                    -->
                </div>
                
            </div>
            
            </div>
        </div>
    </div>
</div>