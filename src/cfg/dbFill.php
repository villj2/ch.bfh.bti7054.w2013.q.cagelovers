


<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    include("$root/cagelovers/src/Initializer.php") ;
    $_SESSION['navipoint'] = 'other';
    include ("$root/cagelovers/templates/header.php");
    
    include("$root/cagelovers/src/cfg/dbconfig.php");
    
    include("$root/cagelovers/src/cfg/dbopen.php");
    
    //tb_category
    include("$root/cagelovers/src/db/CategoryDB.inc");
    $category = new CategoryDB();
    
    //$category->connect($dbhost, $dbuser, $dbpass, $dbname);
    
    // parentID, SortID am ende
    //Gruppe Kleider
    $category->insertCategory('Kleider', 'Kleider', 'Kleider', 'Kleider', 0, 1); //1
     printf("inserted id %d .\n", $category->insert_id);
        $category->insertCategory('T-Shirts', 'T-Shirts', 'T-Shirts', 'T-Shirts', 1, 1); //2
        $category->insertCategory('Hosen', 'Hosen', 'Hosen', 'Hosen', 1, 2); //3
        $category->insertCategory('Mützen', 'Mützen', 'Mützen', 'Mützen', 1, 3); //4
    
    //gruppe Poster
    $category->insertCategory('Poster', 'Poster', 'Poster', 'Poster', 0, 2); //5
    
    //Gruppe Kalender
    $category->insertCategory('Kalender', 'Kalender', 'Kalender', 'Kalender', 0, 3); //6
    
    //Gruppe Autogrammkarten
    $category->insertCategory('Autogrammkarten', 'Autogrammkarten', 'Autogrammkarten', 'Autogrammkarten', 0, 4); //7
    
    //Gruppe Schmuck
    $category->insertCategory('Schmuck', 'Schmuck', 'Schmuck', 'Schmuck', 0, 5); //8
        $category->insertCategory('Halsketten', 'Halsketten', 'Halsketten', 'Halsketten', 8, 1); //9
        $category->insertCategory('Piercings', 'Piercings', 'Piercings', 'Piercings', 8, 2); //10
    
    //Gruppe Fussmatten
    $category->insertCategory('Fussmatten', 'Fussmatten', 'Fussmatten', 'Fussmatten', 0, 6); //11
    
    //Gruppe Autozubehör
    $category->insertCategory('Autozubehör', 'Autozubehör', 'Autozubehör', 'Autozubehör', 0, 7); //12
        $category->insertCategory('Heckscheibenaufkleber', 'Heckscheibenaufkleber', 'Heckscheibenaufkleber', 'Heckscheibenaufkleber', 12, 1); //13
        $category->insertCategory('Rückspiegelanhänger', 'Rückspiegelanhänger', 'Rückspiegelanhänger', 'Rückspiegelanhänger', 12, 2); //14
    
    //Gruppe Haushalt
    $category->insertCategory('Haushalt', 'Haushalt', 'Haushalt', 'Haushalt', 0, 8); //15
        $category->insertCategory('Bettwäsche', 'Bettwäsche', 'Bettwäsche', 'Bettwäsche', 15, 1); //16
        $category->insertCategory('Kissen', 'Kissen', 'Kissen', 'Kissen', 15,2); //17
    
    //Gruppe Puppen
    $category->insertCategory('Puppen', 'Puppen', 'Puppen', 'Puppen', 0, 8); //18
    
   

    $category->close();

    //tb_article
    include("$root/cagelovers/src/db/ArticleDB.inc");
    $articleDB = new ArticleDB();
    
    //$title, $description, $width, $height, $length, $weight, $price
    //shirts
    $articleDB->insertArticle('Tshirt 1','Cage on Fire','0','0','0','0','15'); //1
    $articleDB->insertArticle('Tshirt 2','Mr. Universe','0','0','0','0','20'); //2
    $articleDB->insertArticle('Tshirt 3','Best of the Best','0','0','0','0','25');//3 
    
    //Hosen
    $articleDB->insertArticle('Hose 1','Cagepants','0','0','0','0','35'); //4
    $articleDB->insertArticle('Hose 2','Cagepants deLuxe','0','0','0','0','40'); //5

    //Mützen
    $articleDB->insertArticle('Baseball Cap','Tooo cool','0','0','0','0','22'); //6
    $articleDB->insertArticle('Wintermütze','He keeps you warm','0','0','0','0','25'); //7
    
    //Poster
    $articleDB->insertArticle('Poster 1','Cage the wicked','200','0','150','0','10'); //8
    $articleDB->insertArticle('Poster 2','my Idol','300','0','250','0','33'); //9
    
    //Kalender
    $articleDB->insertArticle('Kalender 2014','Cage2014','100','0','60','0','28'); //10 
    
    //Autogrammkarten
    $articleDB->insertArticle('Autogrammkarte 1','Cage Ghostrider','0','0','0','0','15'); //11
    $articleDB->insertArticle('Autogrammkarte 1','Lord of war','0','0','0','0','11'); //12
    
    //Halsketten
    $articleDB->insertArticle('Halskette 1','Cage Heart','0','0','0','0','50'); //13
    $articleDB->insertArticle('Halskette 2','Cage forever yours','0','0','0','0','55'); //14
    
    //Piercings
    $articleDB->insertArticle('Piercing 1','Cage Nippel','0','0','0','0','50'); //15
    $articleDB->insertArticle('Piercing 2','Cage Ear','0','0','0','0','20'); //16
    $articleDB->insertArticle('Piercing 3','Cage Guiche','0','0','0','0','60'); //17
    $articleDB->insertArticle('Piercing 4','Cage Suitcase','0','0','0','0','150'); //18
    
    //Fussmatten
    $articleDB->insertArticle('Fussmatte 1','Welcome Home Cage','0','0','0','0','25'); //19
    $articleDB->insertArticle('Fussmatte 2','Only Cages welcome','0','0','0','0','15'); //20
    
    //Autozubehör
    $articleDB->insertArticle('Heckscheibenkleber 1','2Fast2Cage','0','0','0','0','2'); //21
    $articleDB->insertArticle('Heckscheibenkleber 2','Drift King Cage','0','0','0','0','3'); //22 
    $articleDB->insertArticle('Heckscheibenkleber 3','Vote for Cage 2016','0','0','0','0','4');  //23
    
    $articleDB->insertArticle('Anhänger 1','Fuzzy Cage','0','0','0','0','1'); //24
    $articleDB->insertArticle('Anhänger 2','SmellGoodCage','0','0','0','0','1'); //25
    
    //Haushalt
    $articleDB->insertArticle('Bettwäsche 1','SleepGood Cage','0','0','0','0','75'); //26
    $articleDB->insertArticle('Bettwäsche 2','Kids Cage','0','0','0','0','65'); //27
    
    $articleDB->insertArticle('Kissen 1','CageHeart','0','0','0','0','33'); //28
    $articleDB->insertArticle('Kissen 2','CageFace','0','0','0','0','23'); //29
    
    $articleDB->insertArticle('Puppe 1','Lord of war','0','0','0','0','35'); //30
    $articleDB->insertArticle('Puppe 2','Ghostrider','0','0','0','0','35'); //31
    

    //tb_article_category
    include("$root/cagelovers/src/db/ArticleCategoryDB.inc");
    $articleCategoryDB = new ArticleCategoryDB();
    $articleCategoryDB->insertArticleCategory(1, 2);
    $articleCategoryDB->insertArticleCategory(2, 2);
    $articleCategoryDB->insertArticleCategory(3, 2);
    $articleCategoryDB->insertArticleCategory(4, 3);
    $articleCategoryDB->insertArticleCategory(5, 3);
    $articleCategoryDB->insertArticleCategory(6, 4);
    $articleCategoryDB->insertArticleCategory(7, 4);
    $articleCategoryDB->insertArticleCategory(8, 5);
    $articleCategoryDB->insertArticleCategory(9, 5);
    $articleCategoryDB->insertArticleCategory(10, 6);
    $articleCategoryDB->insertArticleCategory(11, 7);
    $articleCategoryDB->insertArticleCategory(12, 7);
    $articleCategoryDB->insertArticleCategory(13, 9);
    $articleCategoryDB->insertArticleCategory(14, 9);
    $articleCategoryDB->insertArticleCategory(15, 10);
    $articleCategoryDB->insertArticleCategory(16, 10);
    $articleCategoryDB->insertArticleCategory(17, 10);
    $articleCategoryDB->insertArticleCategory(18, 10);
    $articleCategoryDB->insertArticleCategory(19, 11);
    $articleCategoryDB->insertArticleCategory(20, 11);
    $articleCategoryDB->insertArticleCategory(21, 13);
    $articleCategoryDB->insertArticleCategory(22, 13);
    $articleCategoryDB->insertArticleCategory(23, 13);
    $articleCategoryDB->insertArticleCategory(24, 14);
    $articleCategoryDB->insertArticleCategory(25, 14);
    $articleCategoryDB->insertArticleCategory(26, 16);
    $articleCategoryDB->insertArticleCategory(27, 16);
    $articleCategoryDB->insertArticleCategory(28, 17);
    $articleCategoryDB->insertArticleCategory(29, 17);
    $articleCategoryDB->insertArticleCategory(30, 18);
    $articleCategoryDB->insertArticleCategory(31, 18);    
    
    //tb_article_images
    include("$root/cagelovers/src/db/ArticleImagesDB.inc");
    
    $articleImages = new ArticleImagesDB();
    $articleImages->insertArticleImage(1, '/img/products/1/1.jpg');
    $articleImages->insertArticleImage(2, '/img/products/2/1.jpg');
    $articleImages->insertArticleImage(3, '/img/products/3/1.jpg');
    $articleImages->insertArticleImage(4, '/img/products/4/1.jpg');
    $articleImages->insertArticleImage(5, '/img/products/5/1.jpg');
    $articleImages->insertArticleImage(6, '/img/products/6/1.jpg');
    $articleImages->insertArticleImage(7, '/img/products/7/1.jpg');
    $articleImages->insertArticleImage(8, '/img/products/8/1.jpg');
    $articleImages->insertArticleImage(9, '/img/products/9/1.jpg');
    $articleImages->insertArticleImage(10, '/img/products/10/1.jpg');
    $articleImages->insertArticleImage(11, '/img/products/11/1.jpg');
    $articleImages->insertArticleImage(12, '/img/products/12/1.jpg');
    $articleImages->insertArticleImage(13, '/img/products/13/1.jpg');
    $articleImages->insertArticleImage(14, '/img/products/14/1.jpg');
    $articleImages->insertArticleImage(15, '/img/products/15/1.jpg');
    $articleImages->insertArticleImage(16, '/img/products/16/1.jpg');
    $articleImages->insertArticleImage(17, '/img/products/17/1.jpg');
    $articleImages->insertArticleImage(18, '/img/products/18/1.jpg');
    $articleImages->insertArticleImage(19, '/img/products/19/1.jpg');
    $articleImages->insertArticleImage(20, '/img/products/20/1.jpg');
    $articleImages->insertArticleImage(21, '/img/products/21/1.jpg');
    $articleImages->insertArticleImage(22, '/img/products/22/1.jpg');
    $articleImages->insertArticleImage(23, '/img/products/23/1.jpg');
    $articleImages->insertArticleImage(24, '/img/products/24/1.jpg');
    $articleImages->insertArticleImage(25, '/img/products/25/1.jpg');
    $articleImages->insertArticleImage(26, '/img/products/26/1.jpg');
    $articleImages->insertArticleImage(27, '/img/products/27/1.jpg');
    $articleImages->insertArticleImage(28, '/img/products/28/1.jpg');
    $articleImages->insertArticleImage(29, '/img/products/29/1.jpg');
    $articleImages->insertArticleImage(30, '/img/products/20/1.jpg');
    $articleImages->insertArticleImage(31, '/img/products/31/1.jpg');    
        //$res2 = $conn->query("INSERT INTO tb_article_images(ArticleID,ImagePath) VALUES (`$row[0]`,'/img/products/`$row[0]/1.jpg')");

    //tb_article_sub
    include("$root/cagelovers/src/db/ArticleSubDB.inc");
    $articleSub = new ArticleSubDB();
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'S - Blau', 1);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'M - Blau', 2);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'L - Blau', 3);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'XL - Blau', 4);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'XXL - Blau', 5);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'S - Schwarz', 6);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'M - Schwarz', 7);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'L - Schwarz', 8);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'XL - Schwarz', 9);
    $articleSub->insertArticleSub(1, 'DROPDOWN', 'XXL - Schwarz', 10);    

    $articleSub->insertArticleSub(2, 'DROPDOWN', 'S - Blau', 1);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'M - Blau', 2);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'L - Blau', 3);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'XL - Blau', 4);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'XXL - Blau', 5);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'S - Schwarz', 6);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'M - Schwarz', 7);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'L - Schwarz', 8);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'XL - Schwarz', 9);
    $articleSub->insertArticleSub(2, 'DROPDOWN', 'XXL - Schwarz', 10);      

    $articleSub->insertArticleSub(3, 'DROPDOWN', 'S - Blau', 1);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'M - Blau', 2);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'L - Blau', 3);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'XL - Blau', 4);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'XXL - Blau', 5);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'S - Schwarz', 6);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'M - Schwarz', 7);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'L - Schwarz', 8);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'XL - Schwarz', 9);
    $articleSub->insertArticleSub(3, 'DROPDOWN', 'XXL - Schwarz', 10);       
    
    $articleSub->insertArticleSub(4, 'DROPDOWN', 'M - Jeans', 1);
    $articleSub->insertArticleSub(4, 'DROPDOWN', 'L - Jeans', 2);
    $articleSub->insertArticleSub(4, 'DROPDOWN', 'M - Manchester', 3);
    $articleSub->insertArticleSub(4, 'DROPDOWN', 'L - Manchester', 4);

    $articleSub->insertArticleSub(5, 'DROPDOWN', 'M - Jeans', 1);
    $articleSub->insertArticleSub(5, 'DROPDOWN', 'L - Jeans', 2);
    $articleSub->insertArticleSub(5, 'DROPDOWN', 'M - Manchester', 3);
    $articleSub->insertArticleSub(5, 'DROPDOWN', 'L - Manchester', 4);    

    $articleSub->insertArticleSub(6, 'DROPDOWN', 'Onesize - Schwarz', 1);
    $articleSub->insertArticleSub(6, 'DROPDOWN', 'Onesize - Blau', 2);
    $articleSub->insertArticleSub(6, 'DROPDOWN', 'Onesize - Pink', 3);
    $articleSub->insertArticleSub(6, 'DROPDOWN', 'Onesize - Rot', 4);    
    
     
    $articleSub->insertArticleSub(7, 'DROPDOWN', 'Onesize - Schwarz', 1);
    $articleSub->insertArticleSub(7, 'DROPDOWN', 'Onesize - Blau', 2);
    $articleSub->insertArticleSub(7, 'DROPDOWN', 'Onesize - Pink', 3);
    $articleSub->insertArticleSub(7, 'DROPDOWN', 'Onesize - Rot', 4);    
    
    $articleSub->insertArticleSub(8,'DROPDOWN','120x60',1);
    $articleSub->insertArticleSub(8,'DROPDOWN','240x120',2);

    $articleSub->insertArticleSub(9,'DROPDOWN','120x60',1);
    $articleSub->insertArticleSub(9,'DROPDOWN','240x120',2);

    
    //tb_mailtype
     include("$root/cagelovers/src/db/MailTypeDB.inc");
     $mailType = new MailTypeDB();
     
     $mailType->insertMailType('REC', 'Rechnung');
     $mailType->insertMailType('BES', 'Bestätigung Bestellung');
    
    //tb_paymentmethod
     
    include("$root/cagelovers/src/db/PaymentMethodDB.inc");
    $paymentMethod = new PaymentMethodDB();
    
    $paymentMethod->insertPaymentMethod('KRE', 'Kreditkarte');
    $paymentMethod->insertPaymentMethod('REC', 'Rechnung');
    $paymentMethod->insertPaymentMethod('NAC', 'Nachnahme');
    
    
    //tb_shippingmethod
     
    include("$root/cagelovers/src/db/ShippingMethodDB.inc");
    $shippingmethod = new ShippingMethodDB();
    
    $shippingmethod->insertShippingMethod('EXP', 'Express');
    $shippingmethod->insertShippingMethod('APO', 'A-Post');
    $shippingmethod->insertShippingMethod('BPO', 'B-Post');
        
    //tb_statustype
    
    include("$root/cagelovers/src/db/StatusTypeDB.inc");
    $statusType = new StatusTypeDB();
    
    $statusType->insertStatusType('ERF','Erfasst','Erfasst','Erfasst','Erfasst','Erfasst',1);
    $statusType->insertStatusType('BES','Bestellt','Bestellt','Bestellt','Bestellt','Bestellt',1);
    $statusType->insertStatusType('DEL','Gelöscht','Gelöscht','Gelöscht','Gelöscht','Gelöscht',1);
    $statusType->insertStatusType('BEZ','Bezahlt','Bezahlt','Bezahlt','Bezahlt','Bezahlt',1);
    $statusType->insertStatusType('AUS','Ausgeliefert','Ausgeliefert','Ausgeliefert','Ausgeliefert','Ausgeliefert',1);
    
    //tb_users !!
    
    
    
    include("$root/cagelovers/src/cfg/dbclose.php");

    include("$root/cagelovers/src/cfg/dbShowAll.php");


    echo "alles gut!"
    

?>

<?php include("$root/cagelovers/templates/footer.php") ?>