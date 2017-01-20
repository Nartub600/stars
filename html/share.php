<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/fonts.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/tfios-style.css" rel="stylesheet" type="text/css" media="screen" />
        <!--<link href="css/tfios-star.css" rel="stylesheet" type="text/css" media="screen" />-->
        <link href="css/sweeps.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script> 
        
        <script>
            $(document).ready(function(){

                 var container =  $(".content-post").find('p');
                 var myRegExp = new RegExp('\\#\\w+','gi');
                 var htmlWrappedHashtags = container.html().replace(myRegExp, '<span class="hasgtag">$&</span>');
                 container.html(htmlWrappedHashtags);



            });
            
        </script>
 
    </head>
    <body>
        <div class="content-to-share" style="top:0; left: 0; position: relative;">
            <div class="content-post background-cover">
                <div class="image-share">
                    <img class="star" src="img/share-image-star.png"/>
                    <img class="user" src="img/userDemo.jpg"/>
                </div>
                <p>
                    I promise to be so strong nothing can disturb my peace of mind. #MyLittleInfinity- pxlgirl
                </p>
            </div>
            
        </div>
    </body>
</html>