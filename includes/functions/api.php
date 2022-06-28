<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="" id="logo">



    <script>


        //                                                  fetch API in JS
        //async instead of then()
        async function catchLogo(){
            const response = await fetch('img/logo.jpg');
            const blob = await response.blob();
            document.getElementById('logo').src=URL.createObjectURL(blob);
        }
        catchLogo().catch(error =>{
                        console.log('error!!');
                        console.error(error);
                    });


        // console.log('about fetch an image')
        // fetch("img/logo.jpg").then(response=>{
        //     console.log(response);
        //     return response.blob();
        //     }).then(blob =>{
        //             console.log(blob)
        //             document.getElementById('log').src=URL.createObjectURL(blob)
        //             }).catch(error =>{
        //                 console.log('error!!');
        //                 console.error(error);
        //             });





    </script>
</body>
</html>