<html lang="en-US">
    
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,viewport-fit=cover">	
	
  <title>  Basic PayPal Payments Panel Button GO </title>
	
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
	  <!-- import CSS -->
	
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  
  <link rel="stylesheet" href="https://asiamusicvideo.000webhostapp.com/website/buttons/flat-ui/css/style.css">
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	
<!-- Compiled and minified CSS  -->

<!-- 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

-->
	
<!-- 
-->
	
	
</head>
<body>
		
<hgroup>
</hgroup>
	
<center>	
	
<header>
 <img src="https://createbrowser.github.io/AutoGetFeaturesCefSharpBrowserDesktopPC/Public/PayPal.jpg">
</header>

	<div id="app">

    <el-header>
    </el-header>
	 <H1> Pay quickly with PayPal </H1>
     <H6>  You can complete your payment with just a few clicks. </H6> 
    <H6> Don't have a PayPal account? </H6>   <H6> Use your credit card or bank account (where available). </H6> 

    
    <el-button @click="visible = true" type="primary" size="medium"> Pay| PayPal Payments Standard </el-button>
    <el-dialog :visible.sync="visible" title="Basic for PayPal Payments Standard Donate ">

	    
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business"
        value="sandeep@conestogac.on.ca">

    <!-- Specify a Donate button. -->
    <input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <input type="hidden" name="item_name" value="Friends of the Park">
    <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
    <input type="hidden" name="amount" value="0.00"> <!-- $5 - 5.00 -->
    <input type="hidden" name="currency_code" value="USD">
		  
    <!-- Donate button. -->	  
  	  
 <!-- Display the payment button. -->
<INPUT TYPE="hidden" name="cancel_return" value="https://createbrowser.github.io/AutoGetFeaturesCefSharpBrowserDesktopPC/PayPal.html">
	 	 
	
<input class="btn btn-primary btn-lg" type="submit" value="Donate" alt="Donate">
<img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 	

<select name="amount" style="margin: 50px 11px 11px 50px;">
<option selected value="5.00">Please Select Amount</option>
		    	<option value="1.00">$1.00</option>		    
<option value="2.00">$2.00</option>		    
<option value="3.00">$3.00</option>		    
<option value="4.00">$4.00</option>		    	
<option value="5.00">$5.00</option>		    
<option value="10.00">$10.00</option>
<option value="15.00">$15.00</option>
<option value="20.00">$20.00</option>	
<option value="25.00">$25.00</option>
<option value="30.00">$30.00</option>
<option value="40.00">$40.00</option>
<option value="50.00">$50.00</option>
<option value="100.00">$100.00</option>
<option value="200.00">$200.00</option>
<option value="500.00">$500.00</option>
<option value="1000.00">$1000.00</option>	
</select><br>
		  
</form>
        
    </el-dialog>
	 	  
  </div>
		

 </center>
	
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
	
    <!-- Bottom Continue Scripts -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Bottom Continue Scripts -->		
	
	 <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>      
	 <!-- Compiled and minified JavaScript -->

<script  src="https://asiamusicvideo.000webhostapp.com/website/buttons/flat-ui/js/index.js"></script>	
<script> </script>
	
</body>
		
 <!-- import Vue before Element -->
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <!-- import JavaScript -->
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  
  <script>
    new Vue({
      el: '#app',
      data: function() {
        return { visible: false }
      }
    })
  </script>

      <style type="text/css">
  .button {
    backface-visibility: hidden;
  position: relative;
  cursor: pointer;
  display: inline-block;
  white-space: nowrap;
  background: #58c;
  border-radius: 0px;
  border: 0px groove #246;
  border-width: 0px 0px 0px 0px;
  padding: 11px 11px 11px 11px;
    color: #fff;
  font-size: 41px;
  font-family: Times New Roman;
  font-weight: 900;
  font-style: normal
  }
  .button > div {
    color: #999;
  font-size: 20px;
  font-family: Helvetica Neue;
  font-weight: 900;
  font-style: normal;
  text-align: center;
  margin: 0px 0px 0px 0px
  }
  .button > i {
    font-size: 1em;
  border-radius: 0px;
  border: 0px double transparent;
  border-width: 0px 0px 0px 0px;
  padding: 0px 0px 0px 0px;
  margin: 0px 0px 0px 0px;
  position: static
  }
  .button > .ld {
    font-size: initial
  }
</style>
 
	
<center>	
	<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://createbrowser.github.io/AutoGetFeaturesCefSharpBrowserDesktopPC/PayPal.html" title="How PayPal Works"  onclick="javascript:window.open('https://createbrowser.github.io/ACefSharpChromiumBrowserDesktop/PayPal.html','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_payments_by_pp_2line.png" border="0" alt="Payments by PayPal"></a><div style="text-align:center"><a href="https://www.paypal.com/eg/webapps/mpp/pay-online" target="_blank"><font size="2" face="Arial" color="#0079CD"><b>How PayPal Works</b></font></a></div></td></tr></table><!-- PayPal Logo -->
</center>	
	
</html>