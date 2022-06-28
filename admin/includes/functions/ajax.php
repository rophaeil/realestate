<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Get Repos</button>
    <div id="show"></div>

<script src="js/jquery.js"></script>
<script>


























// $(function() {
        
        
    //     $.ajax({
    //         method:'POST',
    //         url:'auth.php',
    //         data:{name:'miki',age:22},
    //         success:function(data,status,xhr){
    //             console.log(data);
    //             console.log(status);
    //             console.log(xhr);

    //         },
    //         error:function(xhr, status,errMsg){
    //             console.log(xhr);
    //             console.log(status);
    //             console.log(errMsg);
    //         },
    //         cache:false,
    //         async:true,
    //         complete:function(xhr,status){
    //             console.log(xhr);
    //             console.log(status);

    //         }
    //     })

// =====================================================================================================

        // load method
        // $('button').on('click',function(){
        //     $('#show').load('test.txt' , function(one, two, three   ) {

        //         console.log(one);
        //         console.log(two);
        //         console.log(three);

        //     });
        // });

// =====================================================================================================

        //  GET AND POST Methods
        // $('button').on('click',function(){
        //     $.post('auth.php', { name:"michael", age:22} , function(one, two, three   ) {
        //         console.log(one);
        //         console.log(two);
        //         console.log(three);

        //     });
        // });
    // });

// =====================================================================================================

        // var request = new XMLHttpRequest();
        // function getData(){
        //     request.onreadystatechange = function(){
        //         if(this.readyState === 4 && this.status === 200){
        //             console.log(request.responseText);
        //             document.getElementById('txt').innerHTML = request.responseText;
        //         };
        //     };
            
        //     request.open('POST','auth.php',true);
        //     request.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
        //     request.send('name=miki');
            
        // }
// =====================================================================================================

    
        // function getRepos(){
        //     myRequest.onreadystatechange = function(){
        //         if(this.readyState === 4 && this.status === 200) {
        //             console.log(this.responseText)
        //         }
        //     };
        //     myRequest.open( 'GET' , 'json.json' , true );
        //     myRequest.send();
        // }


</script>

</body>
</html>