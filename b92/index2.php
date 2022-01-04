<?php include_once('navbar.php');?>

<div class="wrapper main-content">

<!--------------Right news/comercials Start---------->
    <div class="right-div">
        <img class="loto-img" src="img/loto.jpg" alt="">
        <img src="img/tElEnor.jpg" alt="" class="telenor-img">
        <div class="right-smal-div">
            <a href="#">
                <h3>Lorem, ipsum.</h3>
            </a>
            <a href="#"><img class="djeca-img" src="img/djeca.jpg" alt=""></a>
            <a href="#">
                <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, quam.</h2>
            </a>
            <ul class="small-list">
                <li class="small-li">
                    <a href="#" class="small-link"><img class="small-img" src="img/smal.jpg" alt=""><span class="small-text">Lorem ipsum dolor, sit amet consetcetur adipisicing elit. Magnam.</span></a>
                </li>
                <li class="small-li">
                    <a href="#" class="small-link"><img class="small-img" src="img/smal.jpg" alt=""><span class="small-text">Lorem ipsum dolor, sit amet consetcetur adipisicing elit. Magnam.</span></a>
                </li>
                <li class="small-li">
                    <a href="#" class="small-link"><img class="small-img" src="img/smal.jpg" alt=""><span class="small-text">Lorem ipsum dolor, sit amet consetcetur adipisicing elit. Magnam.</span></a>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
<!--------------Right news/comercials END---------->

<!--------------Left news start---------->
    <div class="left-div">
<!--------------Main news start---------->
        <div class="main-news-img">
            <div class="main-text">
                <h1>Lorem ipsum dolor sit amet. <br> Lorem, ipsum dolor.</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, voluptates eaque reprehenderit ipsam velit eos atque deserunt vero molestiae repellendus rerum, totam facilis ut, deleniti laboriosam error veritatis! Qui, nulla.</p>
            </div>
        </div>
<!--------------Main news END---------->

<!--------------Breaking news start---------->
        <div class="breaking-news">
            <h3>NAJVAZNIJE VESTI - INFO</h3>
            <ul class="news-list">
            <?php foreach($mainNews as $sideNews){?>
                <li class="news-li">
                    <a href="#" class="news-link">
                    <?php echo $sideNews['newsText'];?> 
                    </a>
                    <a href="#"><span class="red-number"><?php echo $sideNews['newsNumber'];?></span>
                    </a>
                    </li><?php };?>
                </ul> 
        </div>      
<!--------------Breaking news END---------->
        
<!--------------2 col left news start---------->
        <?php $sql="SELECT * FROM vesti";
              $res=mysqli_query($conn, $sql);
              if($res==TRUE){
                $count= mysqli_num_rows($res);
                  if($count>0){
                    while($rows=mysqli_fetch_assoc($res)){
                          $id=$rows['id'];
                          $author=$rows['author'];
                          $tekst=$rows['tekst'];
                          $img=$rows['img'];
                          $datum=$rows['datum'];
                          $i=0;
                          ?>
                <div class="left-news">   
                        <a href="#">
                        <img src="img/<?php echo $img;?>" alt="">
                        <h4><?php 
                            $tmp=explode(" ", $tekst);
                            $niz=array_slice($tmp, 0, 10);
                            echo implode(" ", $niz)."....";
                        ?>
                        </h4>
                        </a>
                        <div class="authorDiv"><?php echo $author;?></div>
                        <div class="dateDiv"><?php echo $datum;?></div>
                    </div>
                    
                <!-- Nisam uspeo da ubacim midDiv na svaki paran broj... ubacuje na svaki. if($i%2==0){ <div class='midDiv'></div>}    $i++ -->

                <?php
                    }
                  }
                }
                ?>
            
        <div class="clear"></div>  
<!--------------2 col left news End---------->

    </div>            
    <div class="clear"></div>           
</div>       
        
        
<?php include_once('footer.php');?>              
            
    

    



