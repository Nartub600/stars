<script>
$(function(){
    $('.intro').find('.close-btn').click(function(e){
        e.preventDefault();
        $('.intro').fadeOut(600);     
        closeBlack();
        
    });
    $('.intro').find('.btn-make-promisse').click(function(e){
        e.preventDefault();
        $('.intro').fadeOut(600);
        
        setTimeout(function () { $('.share-your-promise' ).trigger( "click" ); }, 1200);
    });

    $('#btn_intro_close').on('click', function(e){
        $.ajax({
            url: $('#btn_intro_close').attr('ajax')
        });
    });
});
</script>
<!-- add class "novisibility"  intro-->
<div class="intro">
    <a href="#" class="close-btn" id="btn_intro_close" ajax="{{ url('show_intro') }}"></a>
    <p class="title">Hey <span class="blacktext">Fault Fans,</span></p>
    <p class="text-01">Show your love for Augustus<br/><span class="correction01">and Hazel's little infinity by</span></p>
    <p class="text-02"> making your own promise to live<br/><span class="correction02">an extraordinary life.</span></p>
    <p class="text-04">  If your hometown lights up the sky<br/><span class="correction03">with the most promises, it could get</span><br/><span class="correction04">a #TFIOS bench dedicated to</span><br/><span class="correction05">Hazel and Gus.</span></p>
    <p class="text-03">Okay? <span class="blacktext">okay.</span></p>  
    <a href="#" class="btn-make-promisse background-cover">Make your Promise</a>
    <img class="imgBackground" src="img/intro-back-01.png"/>
</div>