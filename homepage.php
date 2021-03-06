<?php 
session_start();
if(!isset($_SESSION["email"])){
    header("location:moviesin.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE HOMEPAGE</title>
    <link rel="stylesheet" href="moviehomepage.css">
</head>
<body>
    <header>
           
        <nav>          
            <ul class="topmenu">
                <li><a href="">Home</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">Tv Shows</a></li>
                <li><a href="">Web series</a></li>
            </ul>
       
    </nav>
    </header>
    <form action="logout.php">
        
        <button class="out" style="float:right">LOGOUT</button>
    </form>
<div class="topcontainer">
    <div class="logo">
        <img src="./LOGO@2x.png" width = "260px" height = "80px" alt="logo">
    </div>
    <div class="content"><p>Watch your favourite <span style="color: #A6AE00;">  Movies, Shows, Web series</span></p> 
        <p class = "line2">at <span>Anywhere and Anytime</span></p>
    </div>
    <div class="bg">
        <div class="signupback" style="background-image: url(./homepageimages/09@2x.png);"></div>
      
    </div>    
</div>
<div class="movielist">
    <h3 class="thumbnail">Recent Watch</h3>
   <div class="recent">
        <div class="movieimg" style="background-image: url(./homepageimages/1.png);">
           <div class="details">
               <h3 style="color:#a6ae00">SHADOW</h3>
               <table>
                   <tbody>
                       Crew
                       <td>
                      <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                      <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                       <p style="font-family: sans-serif;">Year</p>
                       <span class="sp" style="color:#a6ae00">Nov 2021</span>
                   </td>
                   </tbody>
                   
               </table>
           </div>
       </div>
        <div class="movieimg" style="background-image: url(./homepageimages/2.png);">
           <div class="details">
               <h3 style="color:#a6ae00">SHADOW IN THE CLOUD</h3>
               <table>
                   <tbody>
                       Crew
                       <td>
                      <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Lari Mark</span></pre>
                      <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Swifty</span></pre>
                       <p style="font-family: sans-serif;">Year</p>
                       <span class="sp" style="color:#a6ae00">Nov 2020</span>
                   </td>
                   </tbody>
                   
               </table>
           </div>
       </div>
        <div class="movieimg" style="background-image: url(./homepageimages/3.png);">
           <div class="details">
               <h3 style="color:#a6ae00">Matrix</h3>
               <table>
                   <tbody>
                       Crew
                       <td>
                      <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                      <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                       <p style="font-family: sans-serif;">Year</p>
                       <span class="sp" style="color:#a6ae00">Nov 2021</span>
                   </td>
                   </tbody>
                   
               </table>
           </div>
       </div>
   </div>
</div>
<h3 class="thumbnail">Recommended</h3>
<div class="recent">
     <div class="movieimg" style="background-image: url(./homepageimages/4.png);">
        <div class="details">
            <h3 style="color:#a6ae00">CONTRA</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Arnold Schwarzenegger,sylvester stallone</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/5.png);">
        <div class="details">
            <h3 style="color:#a6ae00">X-MEN</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Bryan Singer</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Simon Kinberg</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2020</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/6.png);">
        <div class="details">
            <h3 style="color:#a6ae00">DEAD POOL 2</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
</div>
<h3 class="thumbnail">Tamil movies</h3>
<div class="recent">
     <div class="movieimg" style="background-image: url(./homepageimages/7.png);">
        <div class="details">
            <h3 style="color:#a6ae00">Anbarivu</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Hiphop thamizha</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/8.png);">
        <div class="details">
            <h3 style="color:#a6ae00">Valimai</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Ajith kumar</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Huma Qureshi</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2020</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/9.png);">
        <div class="details">
            <h3 style="color:#a6ae00">Beast</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Vijay</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Pooja Hedge</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
</div>
<h3 class="thumbnail">Malayalam movies</h3>
<div class="recent">
     <div class="movieimg" style="background-image: url(./homepageimages/10.png);">
        <div class="details">
            <h3 style="color:#a6ae00">#HOME</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Hiphop thamizha</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/11.png);">
        <div class="details">
            <h3 style="color:#a6ae00">SUNNY</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Jayasurya</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">SShivada</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2020</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
     <div class="movieimg" style="background-image: url(./homepageimages/12.png);">
        <div class="details">
            <h3 style="color:#a6ae00">ONE</h3>
            <table>
                <tbody>
                    <p style = "color :#fff; font-family: sans-serif;">Crew</p>
                    <td>
                   <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;"> Mamooty</span></pre>
                   <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">-</span></pre>
                    <p style="color: #fff; font-family: sans-serif;">Year</p>
                    <span class="sp" style="color:#a6ae00">Nov 2021</span>
                </td>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
<div class="rows">
    <div class="column">
        <ul>
            <li class ="fieldj"><a href="" class = "fieldja">FAQ</a></li>
            <li class ="fieldj"><a href="" class = "fieldja">Terms of use</a></li>
            <li class ="fieldj"><a href="" class = "fieldja">Privacy policy</a></li>
        </ul>
    </div>
    <div class="column">
        <ul>
            <li class ="fieldj"><a href="" class = "fieldja">Help center</a></li>
            <li class ="fieldj"><a href="" class = "fieldja">Blog</a></li>
            <li class ="fieldj"><a href="" class = "fieldja">Watch List</a></li>
        </ul>    
    </div>
    <div class="column">
        <ul>
            <li class ="fieldj"><a href="" class = "fieldja">Media center</a></li>
            <li class ="fieldj1"><a href="" class = "fieldj1a"></a><img src="./OTT Icon 2/You Tube.png" alt=""><img src="./OTT Icon 2/Face book.png" alt=""><img src="./OTT Icon 2/Instagram.png" alt=""></a></li>
            <li class ="fieldj2"><a href="" class = "fieldj1a"><img src="./OTT Icon 2/App Store.png" alt=""><img src="./OTT Icon 2/Google play.png" alt=""></a></li>
        </ul>    
    </div>
    <p class="rights"><span style="color: #A6AE00;">Terms and Privacy NoticeSend us feedbackHelp</span> &#169; 1996-2021, Watchify.com. Inc. or its affilites</p>
</div>

</body>
</html>
