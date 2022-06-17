@extends('layout.header_footer')

@section('content')
<!-- wallet -->
<div class="wallet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Great! Now, You Can Deposit Your Bitcoin.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div id="wa_hover" class="wallet_box text_align_center">
                    <h3>Deposit your Bitcoin Wallet</h3><hr>
                    <h5 id="depositAddress" style="color: rebeccapurple">39JS1Rh4xdjFYszvKQcPZTHSddKLEApjJj</h5>
                    <p>Send your money to this deposit address:. </p><hr>
                    <button type="button" onClick="copyToClipboard('#depositAddress');" class="read_more" style="color: black;border-color:black">Copy deposit address </button>
                    <img src="https://gifimage.net/wp-content/uploads/2017/09/ajax-loader-gif-6.gif"   style="width: 35px" /> <br>
                    <span id="message" style="color: rebeccapurple; display: none;font: size 20px;"> </span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="wa_hover" class="wallet_box text_align_center">
                    <h3>Deposit your Dogecoin </h3><hr>
                    <h5 id="depositAddress1" style="color: rebeccapurple">AFfmXPS9L787vzX9tnzBFWeG6nPkRKZP9u</h5>
                    <p>Send your money to this deposit address:. </p><hr>
                    <button type="button" onClick="copyToClipboard1('#depositAddress1');" class="read_more" style="color: black;border-color:black">Copy deposit address </button>
                    <img src="https://gifimage.net/wp-content/uploads/2017/09/ajax-loader-gif-6.gif"   style="width: 35px" /> <br>
                    <span id="message1" style="color: rebeccapurple; display: none;font: size 20px;"> </span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div id="wa_hover" class="wallet_box text_align_center">
                    <h3>Deposit your Litecoin </h3><hr>
                    <h5 id="depositAddress2" style="color: rebeccapurple">M9BZ1h4P4s2k1DJfbzALPen2zNQdvbHKN9</h5>
                    <p>Send your money to this deposit address:. </p><hr>
                    <button type="button"  onClick="copyToClipboard2('#depositAddress2');" class="read_more" style="color: black;border-color:black">Copy deposit address </button>
                    <img src="https://gifimage.net/wp-content/uploads/2017/09/ajax-loader-gif-6.gif"   style="width: 35px" /> <br>
                    <span id="message2" style="color: rebeccapurple; display: none;font: size 20px;"> </span>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- end wallet -->
@endsection
<script> 
    function copyToClipboard(element) { 
        var $temp = $("<input>"); $("body").append($temp); $temp.val($(element).text()).select(); document.execCommand("copy"); $temp.remove(); $("#message").html("<span>Deposit address copied!</span>"); $("#message").show('slow'); setTimeout(function() { $("#message").hide('slow'); }, 3000);
    }

    function copyToClipboard1(element) { 
        var $temp = $("<input>"); $("body").append($temp); $temp.val($(element).text()).select(); document.execCommand("copy"); $temp.remove(); $("#message1").html("<span>Deposit address copied!</span>"); $("#message1").show('slow'); setTimeout(function() { $("#message1").hide('slow'); }, 3000);
    }
    function copyToClipboard2(element) { 
        var $temp = $("<input>"); $("body").append($temp); $temp.val($(element).text()).select(); document.execCommand("copy"); $temp.remove(); $("#message2").html("<span>Deposit address copied!</span>"); $("#message2").show('slow'); setTimeout(function() { $("#message2").hide('slow'); }, 3000);
    }
</script> 