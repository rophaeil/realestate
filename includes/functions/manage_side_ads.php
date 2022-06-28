<?php
$ads = new side_ads();
$ads_data = $ads->all();
$user = new users();

$pkg = [2500,//1month
        13000,//6 month
        24000];//12month
//==================================== Display Ads Banner =====================
$queue=[];
$today = date("Y-m-d");



//$today = date("Y-m-d",strtotime(" + 6 months"));

//1] loop in all ads

foreach($ads_data as $key => $val1){
    if( $val1['status']==1 && $today >= $val1['end_date'] ){
        echo "<br>completed";
        $ads_id = $val1['id'];
        
        $stmt = $conn->prepare("UPDATE side_ads SET status = 2 WHERE id = $ads_
        id") ; // Update status: ACTIVE
        $stmt->execute();

    }
    
}
foreach($ads_data as $key => $val2){

    if($val2['status'] == 1){
        array_push($queue , $val2['id']);
    
    }
    
}
foreach($ads_data as $key => $val3){

    if($val3['status' == 0]){
        
        
            $pkgCost = $pkg[$val3['package'] -1]; // detect selected package
            $ads_id = $val3['id'];

            if($val3['isPaid'] == 0){ // Check payment OR Check credit cover cost if not previously pay for it.
                echo "package Cost: " . $pkgCost . "<br>";
                echo "User ID:" . $user_id = $val3['user_id'] . "<br>";
                $user_data = $user->findbyid($user_id);
                echo "user Credit Befor : " . $credit = $user_data['credit'] . "<br>";

                //2] check isPaid
                if($credit > $pkgCost){  // If credit cover pkg cost subtract value from credit and isPaid = 1
                    echo "Cover<br>";
                    $rem_credit = $user_data['credit'] - $pkgCost;
                    $stmt2 = $conn->prepare("UPDATE users SET credit = $rem_credit WHERE id = '$user_id' ") ;
                    $stmt = $conn->prepare("UPDATE side_ads SET isPaid = 1 WHERE id = '$ads_id' ");
                    
                    echo "User Credit After: " . $rem_credit . "<br>";
                    echo "Ads ID: " . $ads_id;
                    $stmt->execute();
                    $stmt2->execute();
                }
                
            }
        


        $ads_data_new = $ads->all();

        foreach($ads_data_new as $key => $val3){ // loop in ads       ==>> Activate 
            $ads_id2 = $val3['id'];
        //2] check isPaid and approved after get updated data from DB
            if($val3['status'] == 0){
                if($val3['isPaid'] == 1 && $val3['approved'] == 1){
                
                $stmt = $conn->prepare("UPDATE side_ads SET status = 1 WHERE id = $ads_id2") ; // Update status: ACTIVE
                $stmt->execute();

                $start_date = date_create("Y-m-d");
                $end_date = date("Y-m-d", strtotime($start_date." + 3 months"));
                $stmt2 = $conn->prepare("UPDATE side_ads SET start_date $start_date=  WHERE id = '$ads_id2' ");
                $stmt3 = $conn->prepare("UPDATE side_ads SET end_date = $end_date WHERE id = '$ads_id2' ");



                }
            }
        }
    }
}


$selected = $queue[ rand(0 , count($queue)- 1)  ];

$selected_ads = $ads->findby('id', $selected);

$img = $selected_ads['ads_img'];
$url = $selected_ads['url'];
?>


<a target="_blank" href="<?php echo $url; ?>"> <img style="width: 300px;" src="data/images/side_ads/<?php echo $img;?>">
</a>