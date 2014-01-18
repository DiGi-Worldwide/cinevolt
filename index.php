<?php 
include('header.php');
?>


    <body>
        

        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner">
                <div class="container">
                    
                    <div class="pull-right">
                        

<ul class="nav share group">
	
	
	<li class="verdevider"></li>
    
        <li class=""><a class="social-facebook social-large" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fcinevolt.com" title="Share on Facebook" target="_blank">Share on Facebook</a></li>
    
    
        <li class="twitter "><a class="social-twitter social-large" href="https://twitter.com/intent/tweet?text=Sell+films+directly+to+buyers+&hashtags=&related=&url=http%3A%2F%2Fcinevolt.com" title="Share on Twitter" target="_blank">Share on Twitter</a></li>
    
    
    
    	
    
    	
</ul>

                    </div>
                </div>
            </div>
        </div>
        
        <a name="intro"></a>
        <section class="block intro">
            <div class="container">
                
                
                    <header>
                        
                            
                                <h1>CINEVOLT</h1>
                            
                                <h2><p>Sell your film's directly to buyers, Worlwide! </p></h2>
                            
                        
                    </header>
                
                
                    
                
            </div>
        </section>

        
            

            <section class="actions">
                <div class="container">
                    
                        
                            


<section class="action salsa" id="salsa-email">

    
        <h1>Contact Us?</h1>
    

    <p>If you would like to state something, please fill out the fields below.</p>

    <form method="post" id="subscribeform" action="emailform.php">
        <div style='display:none'></div>
        <table>
            <tr>
        <th>
       
    </th>
        <tb>
        <input type="text" placeholder="Your Name" name="name" id="name">
    </tb>
</br>
    </tr>
        <tr>
        <th>
        
    </th>
        <tb>
        <input type="text" placeholder="Your Email" name="email" id="email">
    </tb>
</br>
    </tr>
    <tr>
        <th>
        
    </th>
        <tb>
        <textarea type="text" placeholder="Your Message" name="message" id="message"></textarea>
    </tb>
</br>
    </tr>

    </table>
        
        <div class="field buttons">
            <button type="submit" class="btn btn-success">CineVolt Me!</button>
        </div>

        </form>


            


       

<script type="text/javascript">

function getip(json){
    var ipElement = document.getElementsByName('member[ip_address]')[0],
        uaElement = document.getElementsByName('member[user_agent]')[0];

    if (!ipElement) {
        return;
    }

    ipElement.value = json.ip;
    uaElement.value = navigator.userAgent;
}
</script>
<script type="application/javascript" src="//fftf-ips.heroku.com/?callback=getip"></script>

</section>

                        
                    
                </div>
            </section>
        

        
            
                







            
                





<?php 
include('footer.php');
?>