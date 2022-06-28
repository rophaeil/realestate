<?php
session_start();
include("includes/functions/model.class.php");
$prop = new properties;
$interest = new interests;



if(isset($_POST) && !empty($_POST)){
    $text = $_POST['dataSearch']['srch'];
    $prop_type = $_POST['dataSearch']['prop_type'];
    $delivery_type = $_POST['dataSearch']['delivery_type'];
    $price =$_POST['dataSearch']['price'];


    if($price)

    if(empty($price) && empty($delivery_type && empty($prop_type) )){
        // only search for text
    }
    // ================================================================== price =================================
    if($price == 0){
        $priceQuery = "properties.price < 50000000";
    }elseif($price == 1){
        $priceQuery = "properties.price BETWEEN 0 AND 250000";
    }elseif($price == 2){
        $priceQuery = "properties.price BETWEEN 250000 AND 500000";
    }elseif($price == 3){
        $priceQuery = "properties.price BETWEEN 500000 AND 1000000";
    }elseif($price == 4){
        $priceQuery = "properties.price BETWEEN 1000000 AND 2000000";
    }elseif($price == 5){
        $priceQuery = "properties.price BETWEEN 2000000 AND 4000000";
    }elseif($price == 6){
        $priceQuery = "properties.price > 4000000";
    }
    // ================================================================== property Type =================================
    if($prop_type == "0"){
        $prop_typeQuery = "properties.prop_type IN ('Villa', 'Penthouse','Apartment','Townhouse','Chalet','iVilla','Duplex','Twin House','Hotel Apartment')";
    }else{
        $prop_typeQuery = "properties.prop_type = '" . $prop_type . "'"; 
    }
    // ================================================================== approve =================================

        $approveQuery = "properties.approved = 1"; 

    // ================================================================== Delivery Type =================================
        if($delivery_type == "Sale"){
            $delivery_typeQuery = "properties.delivery_type = '" . $delivery_type . "'";
        }elseif($delivery_type == "Rent"){
            $delivery_typeQuery = "properties.delivery_type = '" . $delivery_type . "'";
        }else{
            $delivery_typeQuery = "properties.delivery_type IN ('Sale' , 'Rent')";
        }

    // ================================================================== text search =================================
    if(!empty($text)){
        //function with search
        $textQuery = "properties.title LIKE '%" . $text . "%' OR properties.location LIKE '%" . $text . "%'" ;
    }else{
        // function without search
        $textQuery = "properties.title LIKE '%'" ;

    }
// echo $textQuery . "<br>" .  $prop_typeQuery  . "<br>" . $delivery_typeQuery . "<br>" .  $priceQuery . "<br>" .  $approveQuery;

    $data = $prop->find_prop($textQuery, $prop_typeQuery,$delivery_typeQuery, $priceQuery , $approveQuery);
//=============================================================================================================== testing filter algorithm ========= 
echo "<br><h2>Search Results: " . count($data) . "</h2><br>";

// =============================================================================================================== testing filter algorithm ========= 

?>



        <!-- Row End-->
        </div>
    </div>
</section>
<!------------------------------------------------------------------ Start Loop -->
<?php
$row =0;

for( $i=0; $i < count($data) ; $i++ ){
    if($row ==0){
?>
<section class="ftco-section goto-here">
    <div class="container">
        <div class="row">
        <!--Row Start -->

        <!-- New Card -->
        <div class="col-md-5">
                    <div class="property-wrap"><!-- Animation Issue -->
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/header_nav_styling/images/work-9.jpg);">
                            <a href="" class="icon d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                            
                            <div class="list-agent d-flex align-items-center">
                                
                                
                                <div class="tooltip-wrap d-flex">
                                    <a  class="<?php
                                        if(isset($_SESSION) && !empty($_SESSION)){
                                            if($interest->checkFav($data[$i]['id'] , $_SESSION['id']) >0){ echo "activate ";}else{echo "unactivate ";}
                                        }?>
                                         icon-2 d-flex align-items-center justify-content-center" id="<?php echo$data[$i]['id']?>" data-toggle="tooltip" data-placement="top" title="Add to Favourite">
                                        <span class="ion-ios-heart"><i class="sr-only">Add to Favourite</i></span>
                                    </a>
                                    
                                    <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                        <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span class="orig-price test">EGP <?php echo number_format( $data[$i]['price'] );?></td><small></small></span></p>
                            <h3 class="mb-0"><a href="prop_details.php?id=<?php echo $data[$i] ['id']?>"><?php echo $data[$i]['prop_type']?></a></h3>
                            <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?php echo $data[$i]['location']?></span>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span><?php echo $data[$i]['bedrooms']?></li>
                                <li><span class="flaticon-bathtub"></span><?php echo $data[$i]['bathrooms']?></li>
                                <li><span class="flaticon-floor-plan"></span><?php echo $data[$i]['area']?> meter square</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            <!-- End Of Card -->

<?php
    }
    if($row == 1){
    ?>
    
            <!-- New Card -->
            <div class="col-md-5">
                    <div class="property-wrap "><!-- Animation Issue -->
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/header_nav_styling/images/work-9.jpg);">
                            <a href="prop_details.php?id=<?php echo $data[$i] ['id']?>" class="icon d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                            
                            <div class="list-agent d-flex align-items-center">
                                
                                
                                <div class="tooltip-wrap d-flex">
                                    <a  class="
                                    <?php
                                        if(isset($_SESSION) && !empty($_SESSION)){
                                            if($interest->checkFav($data[$i]['id'] , $_SESSION['id']) >0){
                                                echo "activate";
                                            }else{echo "unactivate";}
                                        }?>
                                         icon-2 d-flex align-items-center justify-content-center" id="<?php echo $data[$i]['id']?>" data-toggle="tooltip" data-placement="top" title="Add to Favourite">
                                        <span class="ion-ios-heart"><i class="sr-only">Add to Favourite</i></span>
                                    </a>
                                    
                                    <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                        <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><span class="orig-price">EGP <?php echo number_format( $data[$i]['price'] );?></td><small></small></span></p>
                            <h3 class="mb-0"><a href="prop_details.php?id=<?php echo $data[$i] ['id']?>"><?php echo $data[$i]['prop_type']?></a></h3>
                            <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?php echo $data[$i]['location']?></span>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span><?php echo $data[$i]['bedrooms']?></li>
                                <li><span class="flaticon-bathtub"></span><?php echo $data[$i]['bathrooms']?></li>
                                <li><span class="flaticon-floor-plan"></span><?php echo $data[$i]['area']?> meter square</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            <!-- End Of Card -->


    
    <?php
    }   
    $row++;
    if($row ==2){
        $row =0;
        ?>

        <!-- Row End-->
        </div>
    </div>

</section>


    <?php
    }
    
};

}else{
    // there is no search
    $data = $prop->all();

    $row = 0;
    for( $i=0; $i < 20 ; $i++ ){
        if($row ==0){
    ?>
    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row">
            <!--Row Start -->
    
            <!-- New Card -->
            <div class="col-md-5">
                        <div class="property-wrap"><!-- Animation Issue -->
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/header_nav_styling/images/work-9.jpg);">
                                <a href="prop_details.php?id=<?php echo $data[$i] ['id']?>" class="icon d-flex align-items-center justify-content-center btn-custom">
                                    <span class="ion-ios-link"></span>
                                </a>
                                
                                <div class="list-agent d-flex align-items-center">
                                    
                                    
                                    <div class="tooltip-wrap d-flex ">
                                        <a  class="<?php if(isset($_SESSION) && !empty($_SESSION)){if($interest->checkFav($data[$i]['id'] , $_SESSION['id']) >0){echo "activate ";}else{echo "unactivate ";}}?> icon-2 d-flex align-items-center justify-content-center .property-favorite" id="<?php echo $data[$i]['id']?>" data-toggle="tooltip" data-placement="top" title="Add to Favourite">
                                            <span class="ion-ios-heart"><i class="sr-only">Add to Favourite</i></span>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <p class="price mb-3"><span class="orig-price">EGP <?php echo number_format( $data[$i]['price'] );?></td><small></small></span></p>
                                <h3 class="mb-0"><a href="prop_details.php?id=<?php echo $data[$i] ['id']?>"><?php echo $data[$i]['prop_type']?></a></h3>
                                <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?php echo $data[$i]['location']?></span>
                                <ul class="property_list">
                                    <li><span class="flaticon-bed"></span><?php echo $data[$i]['bedrooms']?></li>
                                    <li><span class="flaticon-bathtub"></span><?php echo $data[$i]['bathrooms']?></li>
                                    <li><span class="flaticon-floor-plan"></span><?php echo $data[$i]['area']?> meter square</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                <!-- End Of Card -->
    
    <?php
        }
        if($row == 1){
        ?>
        
                <!-- New Card -->
                <div class="col-md-5">
                        <div class="property-wrap "><!-- Animation Issue -->
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/header_nav_styling/images/work-9.jpg);">
                                <a href="prop_details.php?id=<?php echo $data[$i] ['id']?>" class="icon d-flex align-items-center justify-content-center btn-custom">
                                    <span class="ion-ios-link"></span>
                                </a>
                                
                                <div class="list-agent d-flex align-items-center">
                                    
                                    
                                    <div class="tooltip-wrap d-flex">
                                        <a  class="
                                        <?php
                                        if(isset($_SESSION) && !empty($_SESSION)){ if($interest->checkFav($data[$i]['id'] , $_SESSION['id']) >0){echo "activate ";}else{echo "unactivate ";}
                                        }?> icon-2 d-flex align-items-center justify-content-center" id="<?php echo$data[$i]['id']?>" data-toggle="tooltip" data-placement="top" title="Add to Favourite">
                                            <span class="ion-ios-heart"><i class="sr-only">Add to Favourite</i></span>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <p class="price mb-3"><span class="orig-price">EGP <?php echo number_format( $data[$i]['price'] );?></td><small></small></span></p>
                                <h3 class="mb-0"><a href="prop_details.php?id=<?php echo $data[$i] ['id']?>"><?php echo $data[$i]['prop_type']?></a></h3>
                                <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?php echo $data[$i]['location']?></span>
                                <ul class="property_list">
                                    <li><span class="flaticon-bed"></span><?php echo $data[$i]['bedrooms']?></li>
                                    <li><span class="flaticon-bathtub"></span><?php echo $data[$i]['bathrooms']?></li>
                                    <li><span class="flaticon-floor-plan"></span><?php echo $data[$i]['area']?> meter square</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                <!-- End Of Card -->
    
    
        
        <?php
        }
        $row++;
        if($row ==2){
            $row =0;
            ?>
    
            <!-- Row End-->
            </div>
        </div>
    
    </section>
    
    
        <?php
        }
        
    };
}
?>
<script type="text/javascript">
        $("document").ready(function(){
            $('.activate , .unactivate').on('click' , function(){
            $(this).toggleClass('activate');
            $(this).toggleClass('unactivate');

            var propId = $(this).attr("id");
            $("#check").load("includes/functions/favourite-button.php",{ prop_id :propId});
            
            });

        });
    </script>