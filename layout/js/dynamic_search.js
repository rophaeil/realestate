
    $(document).ready(function(){
            $("#ajaxData").load("load_prop.php");
            $("#search").change(function(){
                var srch = $("#search").val();
                var prop_type= $("#propertyType").val();
                var delivery_type = $("#deliveryType").val();
                var price = $("#price").val();                
                var data = {    
                    srch,
                    prop_type,
                    delivery_type,
                    price
                }
            $("#ajaxData").load("load_prop.php",{ dataSearch :data});
            });
            $("#propertyType").change(function(){
                var srch = $("#search").val();
                var prop_type= $("#propertyType").val();
                var delivery_type = $("#deliveryType").val();
                var price = $("#price").val();
                var data = {    
                    srch,
                    prop_type,
                    delivery_type,
                    price
                }
                $("#ajaxData").load("load_prop.php",{ dataSearch :data});
            });
            $("#deliveryType").change(function(){
                var srch = $("#search").val();
                var prop_type= $("#propertyType").val();
                var delivery_type = $("#deliveryType").val();
                var price = $("#price").val();
                var data = {    
                    srch,
                    prop_type,
                    delivery_type,
                    price
                }
                $("#ajaxData").load("load_prop.php",{ dataSearch :data});
            });
            $("#price").change(function(){
                var srch = $("#search").val();
                var prop_type= $("#propertyType").val();
                var delivery_type = $("#deliveryType").val();
                var price = $("#price").val();
                
                var data = {    
                    srch,
                    prop_type,
                    delivery_type,
                    price
                }
                $("#ajaxData").load("load_prop.php",{ dataSearch :data});
            });
            $("#approve").change(function(){
                var srch = $("#search").val();
                var prop_type= $("#propertyType").val();
                var delivery_type = $("#deliveryType").val();
                var price = $("#price").val();
                
                var data = {    
                    srch,
                    prop_type,
                    delivery_type,
                    price
                }
                $("#ajaxData").load("load_prop.php",{ dataSearch :data});
            });


            $("#showAll").click(function(){
                $("#ajaxData").load("properties_data_all.php");
            });

        });