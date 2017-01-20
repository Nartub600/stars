<div class="login">
    <a href="#" class="close-btn"></a>
    <div class="steep-01">
        <ul class="steeps one">
            <li>1.Connect</li>
            <li>2.promise</li>
            <li>3.Share</li>
        </ul>
        <p class="connet-width">Connect with</p>
        <div class="content-socials-connects">
            <a class="fb-connect margin-left-01"></a>
            <a class="tw-connect margin-left-01"></a>
            <a class="tb-connect margin-left-01"></a>
        </div>
    </div>
    <div class="steep-02">
        <ul class="steeps two">
            <li>1.Connect</li>
            <li>2.promise</li>
            <li>3.Share</li>
        </ul>
        <p class="text-01">Tell us what you’ll promise</p>
        <p class="text-02">to create your own little infinity.</p>
        <p class="text-03">I Promise to</p>
        <form>
            <p class="max-characters">110</p>
            <textarea placeholder="ENTER YOUR PROMISE"></textarea>
            <input class="enter-zip" type="text" placeholder="Enter ZIP"/>
            <button class="submit-promise">Submit your Promise</button>
        </form>

    </div>
    <div class="steep-03">
        <ul class="steeps three">
            <li>1.Connect</li>
            <li>2.promise</li>
            <li>3.Share</li>
        </ul>
        <p class="text-01">Your Promise is in the Stars.</p>
        <div class="ornaments-01"></div>
        <div class="share-box">
            <p>Share It with friends</p>
            <a href="#" class="share-fb-01 floatleft-01"></a>
            <a href="#" class="share-tw-01 floatleft-01"></a>
            <a href="#" class="share-pin-01 floatleft-01"></a>
            <a href="#" class="share-tb-01 floatleft-01"></a>
            <div class="ornaments-02"></div>
        </div>
    </div>
    <div class="steep-04">
        <div class="content-to-share">
            <div class="content-post">
                <div class="image-share">
                    <img class="star" src="img/share-image-star.png"/>
                    <img class="user" src="img/userDemo.jpg"/>
                </div>
                <p>
                    I promise to be so strong nothing can disturb my peace of mind. #MyLittleInfinity- pxlgirl
                </p>
            </div>
            <div class="share-box-02">
                <p>Share</p>
                <div class="content-buttons">
                    <a href="#" class="share-fb-02 floatleft-01"></a>
                    <a href="#" class="share-tw-02 floatleft-01"></a>
                    <a href="#" class="share-tb-02 floatleft-01"></a>
                    <a href="#" class="share-pin-02 floatleft-01"></a>
                    
                </div>
                
                <div class="ornaments-01"></div>
            </div>
        </div>
        
    </div>
</div>
<script>
    $(document).ready(function(){
       $('.login').hide();
        $('.share-your-promise').click(function(e){
            e.preventDefault();
            $('.steep-01').show();
            $('.steep-02, .steep-03, .steep-04').hide();
            $('.login').fadeIn();
        }); 
         var container =  $(".content-post").find('p');
         var myRegExp = new RegExp('\\#\\w+','gi');
         var htmlWrappedHashtags = container.html().replace(myRegExp, '<span class="hasgtag">$&</span>');
         container.html(htmlWrappedHashtags);

       
       
    });
    
    $('.fb-connect, .tw-connect, .tb-connect').click(function(e){
        e.preventDefault();
        $('.steep-01').fadeOut(400);
        $('.steep-02').delay(400).fadeIn(400);
    });
    $('.submit-promise').click(function(e){
        e.preventDefault();
        $('.steep-02').fadeOut(400);
        $('.steep-03').delay(400).fadeIn(400);
    });
    $('.share-fb-01, .share-tw-01, .share-tb-01, .share-pin-01').click(function(e){
        e.preventDefault();
        $('.steep-03').fadeOut(400);
        $('.steep-04').delay(400).fadeIn(400);
    });
    $('.close-btn').click(function(e){
        e.preventDefault();
        $('.login').fadeOut();
    });
</script>