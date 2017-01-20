<script src="//forms.foxfilm.com/signupv210.js"></script>

<script>
    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    function closeSweeps(){
        $('body').css('overflow-y', 'hidden');
        $('.sweeps').fadeOut(1000);
    }

    function signupHandler(data) {
        $('.sweeps').fadeOut(1000);
        $('#frm_sweepstakes')[0].reset();
        // debugger;
        // if (typeof dataLayer == 'object') {
        //     dataLayer.push({
        //         'forms': this.trackEvent,
        //         'event': 'formSuccess'
        //     });
        // }
    }

    $(document).ready(function(){
        //createScroll();
        $('.close').click(function(e){
            e.preventDefault();
            closeSweeps();
        });
        $('#sweepsOpen').hide();
        $('.less-link').hide();
        $('.more-link').click(function(e){
            e.preventDefault();
            $('.more-link').hide();
            $('.less-link').fadeIn();
            $('.content-header-sweeps-mobile').css('background-image', 'url(img/form-back-mobile-open.png)');
          //  $('#sweepsColapse').fadeOut();
            $('#sweepsOpen').fadeIn();
        });
        $('.less-link').click(function(e){
            e.preventDefault();
            $('.more-link').fadeIn();
            $('.less-link').hide();
            $('.content-header-sweeps-mobile').css('background-image', 'url(img/form-back-mobile.png)');
          //  $('#sweepsColapse').fadeOut();
            $('#sweepsOpen').fadeOut();
        });


        $('#btn_sweepstakes').one('click', sweepstakes_handler);

        function sweepstakes_handler(e) {
            e.preventDefault();

            $('#btn_sweepstakes').on('click', function(e){
                e.preventDefault();
            });

            $('#frm_sweepstakes').ajaxSubmit({
                success: function(data) {
                    if(data.status == 'ok') {
                        $.ajax({
                            url: 'https://foxus.rsys2.net/pub/rf',
                            data: $('#frm_sweepstakes').serializeObject(),
                            dataType: 'jsonp',
                            jsonp: false,
                            jsonpCallBack: 'signupHandler'
                        });
                    } else {
                        $('.alertError').text('');
                        $('.error').removeClass('error');
                        $.each(data.validator, function(name, message){
                            if($('.alertError').text() == '') {
                                $('.alertError').text(message);
                            }
                            if(name == 'rules' || name == 'terms') {
                                $('[name="' + name + '"]').siblings('label').addClass('error');
                            } else {
                                $('[name="' + name + '"]').addClass('error');
                            }
                        });
                    }
                },
                complete: function() {
                    $('#btn_sweepstakes').one('click', sweepstakes_handler);
                }
            });
        }
    });
    $(window).resize(function(){
       // createScroll();
    });
    function createScroll(){
        var heightScroll = $(document).height()-113;
        // alert(heightScroll);
        $('.content-sweeps-scroll').slimScroll({
            width: '100%',
            top:'300px',
            height: heightScroll+'px',
            alwaysVisible: false,
            railVisible: true
        });
    }
</script>
<div class="sweeps">
    <a class="close">
    </a>
    <div class="content-sweeps-scroll">
        <div class="content-header-sweeps-mobile mobile background-cover">
            <img class="title-sweeps" src="img/sweeps-title-mobile.png"/>
            <div id="sweepsColapse">
                <h2 class="collapse-text white rotate-text">follow in the footsteps of Hazel<br/>and Gus on a magical getaway</h2>
                <a href="#" class="more-link rotate-text background-cover">MORE</a>
                <a href="#" class="less-link rotate-text background-cover">LESS</a>
            </div>
            <div id="sweepsOpen">
                <ul class="list-sweeps rotate-text" >
                    <li class="li-01">Spend three nights at the beautiful Sandton Hotel De Filosoof</li>
                    <li class="li-02">Take a once-in-a-lifetime trip to the Anne Frank house</li>
                    <li class="li-03">Enjoy An unforgettable boat trip along Amsterdam’s famous canals</li>
                    <li class="li-04">Taste the Stars with a romantic meal at one of Amsterdam’s best restaurants</li>
                    <li class="li-05">And return home with Infinite memories that will last a lifetime <a href="{{ url('/full-details') }}" target="_blank" class="white">Full Details</a></li>
                </ul>

            </div>

        </div>
        <div class="content-header-sweeps">
            <div class="text-header">
                <h1><span class="white">Win the</span> <span class="cyan">Trip Of A Lifetime </span><span class="white">To Amsterdam</span></h1>
                <h2 class="white">follow in the footsteps of Hazel and Gus on a magical getaway</h2>
                <div class="wrapper first-column" >
                    <ol class="items-header cyan">
                        <li>Spend three nights at the beautiful Sandton Hotel De Filosoof</li>
                        <li>Take a once-in-a-lifetime trip to the Anne Frank house</li>
                        <li>Enjoy An unforgettable boat trip along Amsterdam’s famous canals</li>
                    </ol>
                </div>
                <div class="wrapper">
                    <ol class="items-header cyan">
                        <li>Taste the Stars with a romantic meal at one of Amsterdam’s best restaurants</li>
                        <li>And return home with Infinite memories that will last a lifetime</li>
                    </ol>
                </div>
                <a class="link-sweeps" href="{{ url('/full-details') }}" target="_blank">Full Details</a>
            </div>
            <img class="img-sweeps-background" src="img/background-head-sweeps.png"/>
        </div>
        <div class="content-form-sweeps">
            <p class="title">enter for a chance to win! <span class="title-01">(offer valid to US Residents only)</span></p>
            <form id="frm_sweepstakes" action="{{ action('EntryController@create') }}" method="post">
                <input type="hidden" name="REG_SOURCE" value="20140813_HE_FIOS_SWEEPS" />
                <input type="hidden" name="_ri_" value="X0Gzc2X%3DWQpglLjHJlTQGrGIIwUiGBcnIh2lDhzdrcv9L6nVwjpnpgHlpgneHmgJoXX0Gzc2X%3DWQpglLjHJlTQGsrzaNizbJPtIaBRuRK0riwSDtDO" />
                <p class="alertError"></p>
                <div class="row-01">
                    <input class="input-01" placeholder="first name" name="first_name"/>
                    <input class="input-01" placeholder="last name" name="last_name"/>
                    <input class="input-01 email" placeholder="email" name="email_address_"/>
                </div>
                <div class="row-01">
                    <input class="input-01 adress" placeholder="Street address" name="address"/>
                    <select name="state">
                        <option value="">STATE</option>
                        <option value="AL">AL</option>
                        <option value="AK">AK</option>
                        <option value="AZ">AZ</option>
                        <option value="AR">AR</option>
                        <option value="CA">CA</option>
                        <option value="CO">CO</option>
                        <option value="CT">CT</option>
                        <option value="DE">DE</option>
                        <option value="DC">DC</option>
                        <option value="FL">FL</option>
                        <option value="GA">GA</option>
                        <option value="HI">HI</option>
                        <option value="ID">ID</option>
                        <option value="IL">IL</option>
                        <option value="IN">IN</option>
                        <option value="IA">IA</option>
                        <option value="KS">KS</option>
                        <option value="KY">KY</option>
                        <option value="LA">LA</option>
                        <option value="ME">ME</option>
                        <option value="MD">MD</option>
                        <option value="MA">MA</option>
                        <option value="MI">MI</option>
                        <option value="MN">MN</option>
                        <option value="MS">MS</option>
                        <option value="MO">MO</option>
                        <option value="MT">MT</option>
                        <option value="NE">NE</option>
                        <option value="NV">NV</option>
                        <option value="NH">NH</option>
                        <option value="NJ">NJ</option>
                        <option value="NM">NM</option>
                        <option value="NY">NY</option>
                        <option value="NC">NC</option>
                        <option value="ND">ND</option>
                        <option value="OH">OH</option>
                        <option value="OK">OK</option>
                        <option value="OR">OR</option>
                        <option value="PA">PA</option>
                        <option value="RI">RI</option>
                        <option value="SC">SC</option>
                        <option value="SD">SD</option>
                        <option value="TN">TN</option>
                        <option value="TX">TX</option>
                        <option value="UT">UT</option>
                        <option value="VT">VT</option>
                        <option value="VA">VA</option>
                        <option value="WA">WA</option>
                        <option value="WV">WV</option>
                        <option value="WI">WI</option>
                        <option value="WY">WY</option>
                    </select>
                    <input class="input-01 zip" placeholder="zip" name="zip"/>
                </div>
                <div class="row-01 chekboxsRow">
                    <div>
                        <input class="input-02" type="checkbox" name="rules" /><label class="input-02">I have read the <a href="#" target="_blank">Official Rules</a> and agree to the <a href="http://www.foxprivacy.com/us/terms.html" target="_blank">Terms & Conditions</a>.</label>
                    </div>
                    <div>
                        <input class="input-02" type="checkbox" name="terms" /><label class="input-02">I have read the FOX <a target="_blank" href="http://www.foxprivacy.com/us/privacy.html">Privacy Policy</a> & <a target="_blank" href="http://www.foxprivacy.com/us/terms.html">Terms of Use</a>.</label>
                    </div>
                    <div>
                        <input class="input-02" type="checkbox" name="NEWSLETTER_HOME" value="1" /><label class="input-02">Yes! Send me email updates and offers from Fox and its Company Affiliates! I can opt out at any time.</label>
                    </div>

                    <a href="#" class="background-cover" id="btn_sweepstakes">Enter The <span class="color2">Sweepstakes</span></a>
                    <div class="text-conditions">
                        <p class="line-01">BY SIGNING UP BELOW, I AGREE TO THE FOX: </p>
                        <ul class="nav-form">
                            <li><a target="_blank" href="http://www.foxprivacy.com/us/terms.html">TERMS OF USE</a></li>
                            <li><a target="_blank" href="http://www.foxprivacy.com/us/privacy.html">PRIVACY POLICY</a></li>
                        </ul>
                        <p class="line-02">NO PURCHASE NECESSARY. The Fault In Our Stars Home Entertainment Sweepstakes is open to residents of the 50 United States, D.C., and Canada (excluding Quebec) age 21 or older. Void outside these geographic areas and wherever else prohibited by law. Sweepstakes begins at 12:00:00 AM ET on 8/26/14 and ends at 11:59:59 PM ET on 9/30/14. Click here for Official Rules. (Live Link) Sponsor: Twentieth Century Fox Home Entertainment LLC.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>