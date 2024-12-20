
<!--This is myportal index.html-->
<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Nahum Yanez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1>Nahum Yanez</h1>
        <nav class="topnav" id="myTopnav">
            <a href="index.html" class="_blank">Home</a>
            <a href="https://nahyan.dreamhosters.com/myportal/case_study.php" target="blank">Case Study</a>
            <a href="https://nahyan.dreamhosters.com/myportal/contact.php" target="_blank">Contact</a>
            <a href="" target="_blank">GitHub</a>
            <a href="" target="_blank">LinkIn</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
    <h2 class="subheader"></h2> 
    <!--header ends here, applied by nahum-->
    
        <picture class="profile">
            <source media="(min-width: 1200px)" srcset="images/img_desktop.png">
            <source media="(min-width: 501px)" srcset="images/img_desktop.png">
            <img src="images/img_desktop.png" alt="">
        </picture>   
        <h2 class="subheader"></h2> 
        <p>My name is <strong>Nahum Yanez</strong>, and <strong>I love IT.</p></strong>
            <p>
            I was born and raised, both my childhood
            and adolescence in Mexico, and I have lived in Seattle Washington for the past 15 years.</p>
            <p>Growth is always a priority for me, so I am always looking for ways to keep my self and mind
            occupied in doing the things that benefit me in some more than ways.
            In my spare time, I like to read, to cook, to watch the news, and 
            to enjoy of myself and solitude.</p>
            <p>Academically, I attended Seattle Central College where I completed my:
            ESL, ABE, GED, and a 2-year transfer degree in Global Studies. After this, I completed a 2-year
            college degree from Mexico via online through the National Autonomous University of Mexico (UNAM). 
            Similarly, I completed 3 semesters 
            from the same University in Political Sciences.</p>
            <p>Also, I am about to complete a 2-year college transfer degree in Application Development
            at North Seattle College; nonetheless, I also registered at Seattle Central College to pursue
            the 90-credit certificate in website development. My goal is to gain experience
            working both as a back-end and front-end application and website development.
            I highly believe that both skills are essential in the world of technology to efficiently
            know how to manage new technologies.</p>
            <p>My short-term goal is to complete my 2-year website application certificate and application degree, to then
            take a bacherlor's degree in Application Development so that I can join the workforce industry
            and work for a technology company to put into practice and already education while continuing
            develop hands-on work and some other valuable and on demand IT skills.</p>
        </p>

        <p>Links:</p>
        <ul>
            <li><a href="https://nahyan.dreamhosters.com/myportal/index.html">Index.html</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/index.php">Index.php</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/includes/header.php">Header.html</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/includes/footer.php">Footer.php</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/template.php">Template.html</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/includes/portal-config.php">Portal-config.php</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/contact.php">Contact.php</a></li>
            <li><a href="https://nahyan.dreamhosters.com/myportal/case_study.php">Case-Study</a></li>
            <li><a href="">Github.php</a></li>
            <li><a href="">LinkIn.html</a></li>
          </ul> 

    <!--footer starts her, applyed by nahum-->
     <footer>
      <p><small>&copy; 2023-<span id="this-year"></span> by 
          Nahum Yanez, All Rights Reserved ~ 
          <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
          <a id="css-checker" href="#" target="_blank">Check CSS</a></small>
     </p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
    <script>
    //https://tinyurl.com/dynamic-html-css-checkers
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 
     
     //set current year in span with id of this-year
     let d = new Date(); let thisYear = d.getFullYear();
     document.getElementById("this-year").innerHTML = thisYear;
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
 </body>
</html>
