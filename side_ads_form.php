<?php 
$page_title = 'BeetCom(Add Side Ads)';
include('includes/template/header.php'); ?>
<div class="container">
    <form method="post" action="includes/functions/insert_side_ads.php" enctype="multipart/form-data">
    <h1>Side Ads Banner </h1>

    <!------------------------------------------------------------------------------ Personal Information & Just Buyer-->


<div class="row">
    <div class="col-2 "><label>Company Name</label> </div>
    <div class="col-6"> <input required class="form-control" type="text" name="coName"> </div>    
</div>
<br>


<div class="row">
    <div class="col-2 "><label>Package type</label> </div>
        <div class="col-6">
            <select name="pkg" required class="form-control">
                <option value="">Package type</option>
                <option value="1">Silver</option>
                <option value="2">Gold</option>
                <option value="3">Platinium</option>
            </select>
        </div>
    </div>
<br>



<div class="row">
    <div class="col-2 "><label>Redirect URL</label> </div>
    <div class="col-6"> <input required class="form-control" type="url" name="url"> </div>    
</div>
<br>




<!-- Banner image  -->
<div class="row">
    <div class="col-2 "><label>Upload Side banner with(2:3 img ratio)</label> </div>
    <div class="col-6"> 
        <input class="form-control" required type="file" name="bannerImg" accept="image/png, image/jpeg">
    </div>    
</div>



<br><br><br>
    </div>
    
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">    
        <button class="btn btn-primary" type="submit">Request Adding Ads</button>
        </div>
    </div>

</form>

</div>

    </form>
<hr>

    <?php
include("includes/template/footer.php");    
?>