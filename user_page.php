<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admin.css">
   

</head>
<body>
   

<header>
  
<div class="position-sticky">

<div class="list-group list-group-flush mx-3 mt-4">
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
  <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
         <a class="navbar-brand" href="admin_page.php" >
        <img
          src="NOTIFIER.SVG"
          height="29"
          alt="MDB Logo"
          loading="lazy"
        />
      
      </a><a
          href="#"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
        
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>VIEW PROFILE</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>VIEW NOTICE</span>
        </a>
        <a href="login_form.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>LOG OUT</span></a
        >

      </div>
    </div>
    <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>
  
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
 
    <div class="container-fluid">

      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

     
     
      

      
      <ul class="navbar-nav ms-auto d-flex flex-row">
        

       
        <li class="nav-item">
          <a class="nav-link me-3 me-lg-0" href="#">
            <i class="fas fa-fill-drip"></i>
          </a>
        </li>
  
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fab fa-github"></i>
          </a>
        </li>

        
       
       
      </ul>
    </div>

  </nav>

</header>


<main style="margin-top: 58px;">
  <div class="container pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet tempora nostrum facilis ratione dolorum corporis quia eaque dicta vero, neque quod architecto, fugit quibusdam porro corrupti, sint nobis obcaecati asperiores harum est ut! Facilis adipisci optio corrupti quis nam, sit doloribus cum. Tenetur natus ipsam error dolores, voluptatibus assumenda neque voluptates est, culpa in ut porro, suscipit ipsum dolorum sequi pariatur maxime optio? Labore dolores error, velit nemo maxime excepturi praesentium aliquam illum fuga, tenetur totam dolorum similique ad perferendis soluta earum quo cumque eum animi iste magnam nesciunt deleniti ducimus! Quam quis a illo tempore tenetur nemo assumenda quisquam! Eius fugiat commodi maxime sapiente autem hic enim aperiam culpa ut ab, iusto nam distinctio necessitatibus debitis. Mollitia, sapiente eius autem minima facere voluptatem quo labore perferendis corrupti amet repellat itaque nostrum aut debitis reprehenderit atque numquam dicta eum. Ipsum, ex reiciendis quo error facere dolor esse fuga ut in aut eos officiis assumenda asperiores dolore optio dolores provident alias culpa adipisci qui mollitia quas aliquam! Quae tenetur dicta blanditiis nostrum non. Ullam fugit laudantium temporibus. Impedit, deserunt? Eveniet incidunt provident odio eius nesciunt quasi ut vero iusto culpa aperiam voluptate, unde repellat maxime harum molestiae libero laboriosam, laudantium sit. Ad at obcaecati cum placeat. Vitae hic quaerat commodi in, minus quae ducimus. Temporibus assumenda quas reprehenderit amet dolor voluptatum repellendus quos, vero recusandae ad impedit porro earum architecto id error placeat eos nisi nulla eius odit laborum! Deserunt at repellendus nostrum nisi, ipsam omnis mollitia architecto earum est! Facere quis temporibus dolorum qui debitis, sed quasi voluptatem maxime quam molestiae nulla voluptates repellendus molestias mollitia corrupti quod tempora sunt? Nam officia neque aperiam reprehenderit quis hic omnis, corporis tenetur? Nemo inventore esse rem quod. Voluptate adipisci iusto, et optio architecto explicabo facere laudantium error. Cum quas labore mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia consectetur provident rerum quod iusto dolorum et non? Maxime voluptatibus nostrum laudantium corrupti, eos molestiae accusamus numquam ipsum, earum sit doloribus culpa vel modi ex quam obcaecati porro! Mollitia nam animi tempore quasi similique harum porro cumque obcaecati praesentium, totam incidunt. A enim dolorum optio quas, rem nesciunt laborum aliquam doloribus doloremque ratione, eaque molestiae provident fugit placeat esse quam eos veritatis dolores ab praesentium, ex aspernatur. Tempora assumenda inventore repellendus officiis adipisci dicta iusto enim quibusdam expedita, ratione culpa, necessitatibus ipsam fugit officia obcaecati autem libero commodi, reprehenderit aut nihil doloribus iste voluptatem aperiam. Quos ut atque dolorem voluptatibus debitis recusandae numquam voluptates, deleniti a veniam aut voluptas ipsum, in eum natus! Nihil.</div>
</main>

</div>


<script type=""

</body>
</html>