<?php 
 include "admin_reg.php";
 include "course_catalog_db.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
            #close_style {
            background: red;
            border: 2px solid red;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            
            text-transform: uppercase;
            cursor: pointer;
            }
            table{
           
                font-family:"Raleway";
                font-size:30px;
            
            }
            a{
                color:initial;
                text-decoration:none;
            }
            a:hover {
           color: red;
            text-decoration: none;
                }
            table td a {
                color: black !important;
                text-decoration: none !important;
                }
            table td a:hover{
                font-size:30px;
            color: red !important;
            text-decoration: none !important;
            }
        </style>
        <script type="text/javascript">
    function preventBack() {
        window.history.forward(); 
    }
      
    setTimeout("preventBack()", 0);
      
    window.onunload = function () { null };

    <script>
        window.onload = function() {
            // Set the desired window dimensions
            window.resizeTo(600, 400);
        };
    </script>
</script>


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#!">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!" onclick="signout(event,0)">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Final_list_post.php">Final List generation </a>
                                    <a class="nav-link" href="output_list.php">final</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Login</a>
                                            <a class="nav-link" href="#">Register</a>
                                            <a class="nav-link" href="#">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">401 Page</a>
                                            <a class="nav-link" href="#">404 Page</a>
                                            <a class="nav-link" href="#">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Abc
                    </div>
                </nav>
            </div>

          
            <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
            <!-- EDIT POP UP FORM (Bootstrap MODAL) -->

            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" id="model_main">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_reg_edit.php" method="post" autocomplete="off" id="myform">
        <div class="modal-body">
          <div class="form-group">
            <label for="text">Category</label>
            <input type="text" class="form-control" id="cat2" name="cat" placeholder="Enter Category" autocomplete="off" value="" required>
          </div>

          <div class="form-group">
            <label for="text">stream</label>
            <input type="text" class="form-control" id="stream2" name="stream" placeholder="Enter Category" autocomplete="off" value="" required>
          </div>
          <div class="form-group">
            <label for="text">Code</label>
            <input type="text" class="form-control" id="code2" name="code" placeholder="Enter Course Code" autocomplete="off" value="" required>
          </div>

          <div class="form-group">
            <label for="text">Title</label>
            <input type="text" class="form-control" id="title2" name="title" placeholder="Enter Course title" autocomplete="off" value="" required>
          </div>
          
          <input type="hidden" name="ak" value=""id="keylock">

          <div class="form-group">
            <label for="text">Credit</label>
            <input type="text" class="form-control" id="credit2" name="credit" placeholder="Enter Credits" autocomplete="off" value="" required>
          </div>

          <div class="form-group">
            <label for="text">Preq</label>
            <input type="text" class="form-control" id="preq2" name="preq" placeholder="Enter Prerequisites" autocomplete="off" value="" required>
          </div>

          <div class="form-group">
            <label for="text">Desc</label>
            <input type="text" class="form-control" id="descb2" name="descb" placeholder="Describe" autocomplete="off" value="" required>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_style">Close</button>

<script>
    // when close button is pressed this id editmodel gets executed
    $(document).ready(function() {
  $('#editmodal .close').on('click', function() {
    $('#editmodal').modal('hide');
  });
});
</script>
        

          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Admin Dashboard</li>
                        </ol>
                       
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead>
                                        <tr>
                                            <th>Cat.</th>
                                            <th>stream</th>
                                            <th>Code</th>
                                            <th >Title</th>
                                            <th>credit</th>
                                            <th id="cms">Preq</th>
                                            <th>Desc</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Cat.</th>
                                            <th>stream</th>
                                            <th>Code</th>
                                            <th >Title</th>
                                            <th>credit</th>
                                            <th>Preq</th>
                                            <th>Descb</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
           
                $sql = "SELECT * FROM admin_course 
                WHERE 
                    cat IS NOT NULL AND cat != '' 
                    AND stream IS NOT NULL AND stream != ''
                    AND code IS NOT NULL AND code != ''
                    AND title IS NOT NULL AND title != ''
                    AND credit IS NOT NULL AND credit != ''
                    AND preq IS NOT NULL AND preq != ''
                    AND descb IS NOT NULL AND descb != ''";  
                $result = mysqli_query($conns, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['cat']."</td>";
                        echo "<td>".$row['stream']."</td>";
                        echo "<td>".$row['code']."</td>";
                        
                        if (strtolower($row['title'])=="computational statistics and inference theory"){
                            echo '<td><a href="cse_program.pdf#page=136" target="_blank">'.$row['title'].'</a></td>';
                        }


                        else if (strtolower($row['title'])=="business analytics"){
                            echo '<td><a href="cse_program.pdf#page=138" target="_blank">'.$row['title'].'</a></td>';
                        }
                        else if (strtolower($row['title'])=="mining of massive datasets"){
                          echo '<td><a href="cse_program.pdf#page=140" target="_blank">'.$row['title'].'</a></td>';
                      }
                      else if (strtolower($row['title'])=="web mining"){
                        echo '<td><a href="cse_program.pdf#page=142" target="_blank">'.$row['title'].'</a></td>';
                    }
                    else if (strtolower($row['title'])=="time series analysis and forecasting"){
                      echo '<td><a href="cse_program.pdf#page=144" target="_blank">'.$row['title'].'</a></td>';
                  }
                  else if (strtolower($row['title'])=="social network analytics"){
                    echo '<td><a href="cse_program.pdf#page=146" target="_blank">'.$row['title'].'</a></td>';
                }
                else if (strtolower($row['title'])=="big data analytics"){
                  echo '<td><a href="cse_program.pdf#page=148" target="_blank">'.$row['title'].'</a></td>';
                }

                else if (strtolower($row['title'])=="cryptography"){
                  echo '<td><a href="cse_program.pdf#page=112" target="_blank">'.$row['title'].'</a></td>';
              }
              else if (strtolower($row['title'])=="information security"){
                echo '<td><a href="cse_program.pdf#page=114" target="_blank">'.$row['title'].'</a></td>';
            }
            else if (strtolower($row['title'])=="secure coding"){
              echo '<td><a href="cse_program.pdf#page=116" target="_blank">'.$row['title'].'</a></td>';
          }
          else if (strtolower($row['title'])=="cyber forensics and malware"){
            echo '<td><a href="cse_program.pdf#page=118" target="_blank">'.$row['title'].'</a></td>';
        }
        else if (strtolower($row['title'])=="ethical hacking"){
          echo '<td><a href="cse_program.pdf#page=120" target="_blank">'.$row['title'].'</a></td>';
      }
      else if (strtolower($row['title'])=="digital currency programming"){
        echo '<td><a href="cse_program.pdf#page=122" target="_blank">'.$row['title'].'</a></td>';
    }
    else if (strtolower($row['title'])=="social networking security"){
      echo '<td><a href="cse_program.pdf#page=124" target="_blank">'.$row['title'].'</a></td>';
  }
  else if (strtolower($row['title'])=="mobile and wireless security"){
    echo '<td><a href="cse_program.pdf#page=126" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="wireless sensor networks"){
  echo '<td><a href="cse_program.pdf#page=128" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="advanced computer networks"){
  echo '<td><a href="cse_program.pdf#page=130" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="mobile ad hoc networks"){
  echo '<td><a href="cse_program.pdf#page=132" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="wireless and mobile communication"){
  echo '<td><a href="cse_program.pdf#page=134" target="_blank">'.$row['title'].'</a></td>';
}

else if (strtolower($row['title'])=="digital image processing"){
  echo '<td><a href="cse_program.pdf#page=150" target="_blank">'.$row['title'].'</a></td>';
}

else if (strtolower($row['title'])=="pattern recognition"){
  echo '<td><a href="cse_program.pdf#page=152" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="computer graphics and visualization"){
  echo '<td><a href="cse_program.pdf#page=154" target="_blank">'.$row['title'].'</a></td>';
}

else if (strtolower($row['title'])=="image and video analysis"){
  echo '<td><a href="cse_program.pdf#page=156" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="computer vision"){
  echo '<td><a href="cse_program.pdf#page=158" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="machine vision"){
  echo '<td><a href="cse_program.pdf#page=160" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="deep learning for computer vision"){
  echo '<td><a href="cse_program.pdf#page=162" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="medical image processing"){
  echo '<td><a href="cse_program.pdf#page=164" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="augmented and virtual reality"){
  echo '<td><a href="cse_program.pdf#page=166" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="biometrics"){
  echo '<td><a href="cse_program.pdf#page=168" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="introduction to cyber-physical systems"){
  echo '<td><a href="cse_program.pdf#page=170" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="pervasive and ubiquitous systems"){
  echo '<td><a href="cse_program.pdf#page=172" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="spatiotemporal data management"){
  echo '<td><a href="cse_program.pdf#page=174" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="real-time systems"){
  echo '<td><a href="cse_program.pdf#page=176" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="cloud computing"){
  echo '<td><a href="cse_program.pdf#page=178" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="internet of things"){
  echo '<td><a href="cse_program.pdf#page=180" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="principles of artificial intelligence"){
  echo '<td><a href="cse_program.pdf#page=182" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="semantic web"){
  echo '<td><a href="cse_program.pdf#page=184" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="natural language processing"){
  echo '<td><a href="cse_program.pdf#page=186" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="information retrieval"){
  echo '<td><a href="cse_program.pdf#page=188" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="artificial intelligence and robotics"){
  echo '<td><a href="cse_program.pdf#page=190" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="neural networks and deep learning"){
  echo '<td><a href="cse_program.pdf#page=192" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="bayesian machine learning"){
  echo '<td><a href="cse_program.pdf#page=194" target="_blank">'.$row['title'].'</a></td>';
}
else if (strtolower($row['title'])=="computational intelligence"){
  echo '<td><a href="cse_program.pdf#page=196" target="_blank">'.$row['title'].'</a></td>';
}

 


                        else{
                            echo "<td>".$row['title']."</td>";
                        }



                       





                        echo "<td>".$row['credit']."</td>";
                        echo "<td>".$row['preq']."</td>";
                        echo "<td>".$row['descb']."</td>";
                        
                        
                        echo "<td><button class='btn btn-success editbtn'>Edit</button></td>";
                        

                        echo "<td><button class='btn btn-danger' onclick='confirmDelete(\"".$row['title']."\")'>Delete</button></td>";
                        
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No courses found.</td></tr>";
                }

                mysqli_close($conns);
            ?>
         
            <script>
                              function confirmDelete(title) {
                                console.log("emma",title);
                if (confirm("Are you sure you want to delete this row?")) {
                    console.log("Before redirecting to delete_row_course.php");
                window.location.href = "delete_row_course.php?id=" + title;
                console.log("After redirecting to delete_row_course.php");
                }
              }
                        </script>
      


                                        </tbody>

                </main>
                <footer class="py-4 bg-light mt-auto">

                <?php // from here code is for pop model adding courses  ?>
                <div class="modal fade" id="addcourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document" id="model_main">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_reg_db.php" method="post" autocomplete="off" id="myform">
        <div class="modal-body">
          <div class="form-group">
            <label for="text">Category</label>
            <input type="text" class="form-control" id="cat" name="cat" placeholder="Enter Category" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="text">stream</label>
            <input type="text" class="form-control" id="stream" name="stream" placeholder="Enter Category" autocomplete="off" value="" required>
          </div>
          <div class="form-group">
            <label for="text">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter Course Code" autocomplete="off"required>
          </div>

          <div class="form-group">
            <label for="text">Title</label>
            <input type="text" class="form-control" id="Title" name="title" placeholder="Enter Course title" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="text">Credit</label>
            <input type="text" class="form-control" id="credit" name="credit" placeholder="Enter Credits" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="text">Preq</label>
            <input type="text" class="form-control" id="preq" name="preq" placeholder="Enter Prerequisites" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="text">Desc</label>
            <input type="text" class="form-control" id="descb" name="descb" placeholder="Describe" autocomplete="off" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForm()">Close</button>
          <script>
            function clearForm() {
        document.getElementById("myform").reset();
        document.getElementById("cat").value = "";
        document.getElementById("stream").value = "";
        document.getElementById("code").value = "";
        document.getElementById("title").value = "";
        document.getElementById("credit").value = "";
        document.getElementById("preq").value = "";
        document.getElementById("descb").value = "";
        
           }
            </script>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcourses">
  Add Course
</button>
<?php /// till here model of add courses ?>

                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');
          
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data,"suii");

                console.log(data[2]);

                document.getElementById("keylock").value = data[2];
                document.getElementById('cat2').value = data[0];
                document.getElementById('stream2').value = data[1];
                document.getElementById('code2').value = data[2];
                document.getElementById('title2').value = data[3];
                document.getElementById('credit2').value = data[4];
                document.getElementById('preq2').value = data[5];
                document.getElementById('descb2').value = data[6];
        
            });
        });
    </script>
    </body>
    <script src="student_dashboard/signout.js" type="module"></script>
</html>
