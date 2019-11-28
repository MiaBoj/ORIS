


<nav class="navbar navbar-expand-lg navbar-dark bg-dark " role="navigation" style="
    table-layout: fixed;
 ">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="../images/logo.png" alt="" style="width:240px;"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Pocetna</a></li>
                <li class="nav-item"><a href="prijave.php" class="nav-link">Takmicenja</a></li>
                <li class="nav-item"><a href="galerija.php" class="nav-link">Orijentiring karte</a></li>
          
             </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                 
                       <li class="px-3 py-2">
                          <?php
include("login.php");
loginForm();
?>
                        </li>
                    
   
                </li>
            </ul>
        </div>
    </div>
</nav>

 




                
