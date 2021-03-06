<!doctype html>

<html lang="en">

  <head>
    <title>Frostburg State University | Lost and Found</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="favicon.ico">

    <meta charset="UTF-8">
    <meta name="description" content="Database for lost property at Frostburg State University">
    <meta name="keywords" content="Lost and Found, Frostburg State University, missing/lost property">
    <meta name="author" content="FSU Research">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    
        <!--THIS CONTROLS HEADER SHRINK BEHAVIOR, JUST IGNORE-->
    <script>
function init() {    
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
//END INIT() FUNCTION----------------------------------------------------------------------</script>

  </head>

    <!--MODALS BEGIN HERE------------------>

    <div id="new-post-modal" class="modalDialog">
    <div>   <a href="#close" title="Close" class="close">&times;</a>
    <div class="modal-header">
    <div class="modal-content" id=modal-header>
        <h2>New Post</h2>
        </div>
    </div>
    <div class="modal-body">
       <div class="modal-content">
        <p>You don't have to, but if you sign in before making a post, you can get custom reminders, alerts, etc.</p>
        <div class="modal-button">
        <a href="#sign-in-modal">
            <button value="Sign in before posting" id="sign-in-button">Sign In</button>
        </a>
        <a href="#">
        <button value="Just make a quick post without signing in" id="quick-post-button">Quick Post</button>
        </div>
        </div>
    </div>
    <div class="modal-footer"> 
        <div class="modal-content">
            <a>Make sure to include enough details in your post!</a>
        </div>
        
    </div>
     

    


    </div>
</div>
     
     <!----------SEPERATOR-------------->

    <div id="sign-in-modal" class="modalDialog">
    <div>   <a href="#close" title="Close" class="close">&times;</a>
    <div class="modal-header">
    <div class="modal-content" id=modal-header>
        <h2>Sign In</h2>
        </div>
    </div>
    <div class="modal-body">
       <div class="modal-content">
          <div class="form">
            <form class="login-form">
              <input id="username" type="text" placeholder="FSU email"/>
              <input id="password" type="password" placeholder="password"/>
              <button id="login-button">login</button>
            </form>
          </div>
          <a href="#quick-post-form">
                <p>OR Never mind, just make a quick post instead?</p>
            </a>
        </div>

        </div>
    <div class="modal-footer"> 
        <div class="modal-content">
            <a href="http://www.frostburg.edu/computing/get-connected/password-management/">Forgot your password or having login issues?</a>
        </div>
        
    </div>
    </div>
</div>

     <!----------SEPERATOR-------------->

    <div id="submit-issue-modal" class="modalDialog">
    <div>   <a href="#close" title="Close" class="close">&times;</a>
    <div class="modal-header">
    <div class="modal-content" id=modal-header>
        <h2>Bring Attention To An Issue</h2>
        </div>
    </div>
    <div class="modal-body">
       <div class="modal-content">
          <div class="form">
            <form action="issue.php" method="post">
                Details: <input type="text" name="name"><br>
                <input type="submit">
            </form> 
        </div>

        </div>
    <div class="modal-footer"> 
        <div class="modal-content">
            <a>Thank you for alerting us to this; Please be aware that by submitting this, information about your device such as browser type and version, and operating system type will be colected in case this is a technical issue. No personally identifiable information such as name, etc. will be collected.</a>
        </div>
        
    </div>
    </div>
    </div>
</div>


<!----------SEPERATOR-------------->

    <div id="browse-modal" class="modalDialog">
    <div id="modal-tripart-wrapper">   <a href="#close" title="Close" class="close">&times;</a>
    <div class="modal-header">
    <div class="modal-content" id=modal-header>
        <h2>Browse Listings</h2>
        </div>
    </div>
    <div class="modal-body">
    <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search for items..">
      <div class="modal-content">
          <div class="rendered-images">
          <?php
            $dirname = "images/test images/";
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                echo '<div class = "rendered-image-backwall"><div class="rendered-image-container">
                  <span class="image-center-vertical"></span><img class = "browse-image" src="'.$image.'" />
                  </div>
                </div>';




              
}
            ?>
        </div>
        </div>

    
    </div>
    <div class="modal-footer"> 
        <div class="modal-content">
        Sort By ....?
        </div>
        
    </div>
    </div>
</div>


<!--MODALS END HERE------------------>
  


 
<body>
 <script src="js/scripts.js"></script>
  <div id="wrapper">

	<header>
		<div class="container clearfix">
			<a href="index.html">
                <div>
                    <h1 id="logo">
        				FSU Lost and Found
        			</h1>
                </div>
            </a>
			<nav>
                <a href="#browse-modal">Browse</a>
				<a href="#new-post-modal">New Post</a>
				<a href="#sign-in-modal">Sign In</a>
			</nav>
		</div>
	</header>
	
	
	
	
	<div id="main" class="homepage-section tab">
    <div id="content" class="content">
        <section class="no-color">
           <div class="unskew-text">
            <div class="container">
                <h1>CAMPUS POLICE</h1>
                <p>Latest submissions for items transferred to or found by campus police</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>                
            </div>
			</div>
        </section>
        <section class="color">
           <div class="unskew-text">
            <div class="container">
                <h1>CENTER FOR COMMUNICATIONS AND INFORMATION TECHNOLOGY</h1>
                <p>Most Recent Items found at or reported missing at the Gira Center</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>
            </div>
			</div>
        </section>
        <section class="no-color" classs="no-color">
           <div class=unskew-text>
            <div class="container">
                <h1>LANE CENTER</h1>
                <p>Most recent items found at or reported missing at Lane Center</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>
            </div>
		</div>
        </section>
        <section class="color">
           <div class="unskew-text">
            <div class="container">
                <h1>LIBRARY</h1>
                <p>Most recent items found at or reported missing at the Library</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>
            </div>
			</div>
        </section>
        <section class="no-color">
           <div class="unskew-text">
            <div class="container">
                <h1>OUTDOORS</h1>
                <p>Most recent items found or reported missing outside campus buildings.</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>
            </div>
			</div>
        </section>
        <section class="color">
           <div class="unskew-text">
            <div class="container">
                <h1>MISCELLANEOUS</h1>
                <p>Most recent items found or reported missing in buildings that do not have a Lost and Found center (dorms etc).</p>
                <p></p>
                <div class="img-container">
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><img src="http://placehold.it/350x150"></div>
                    <div><a class = "see-more" href="#" >See more</a></div>
                </div>
            </div>
            </div>
        </section>
    </div> <!--content ends here-->


<div class="container browse-section tab">
  Keep an eye on your belongings!
</div>
  
</div><!-- END #main -->


<footer>
<div id="info-bar" class="container">
    <div class="container clearfix">
        <span class="bring-attention"><a href="#submit-issue-modal">&#9888; Bring attention to an issue &#9888;</a></span>
        <span class="back-to-top"><a href="#"> &uarr; back to the top &uarr;</a></span>
    </div>
</div><!-- /#bar -->
</footer><!-- /footer -->


</div>
</body>
</html>