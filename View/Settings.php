<!DOCTYPE html>
<html lang="en">
<head>  


      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prototipo</title>
     <!-- MATERIAL ICONS -->


     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
   


 

      <!-- STYLESHEET -->
      <meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	
      <link rel="stylesheet" href="Public/css/style-Main.css">
</head>
<body>
      <div class="container">
        <aside >
           <div class="top">
                 <div class="logo">
                     <img src="Public/images/images-12/logo.png" >
                     <h2 > T<span class="danger">WSB</span></h2>
                 </div>
                  
                 <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                 </div>

           </div>
               <div class="sidebar">
                    <a href="?op=dash" >
                        <span class="material-icons-sharp">grid_view</span>
                         <h3>Dashoard</h3>

                        

                        

                        <a href="?op=Analit">
                            <span class="material-icons-sharp">insights</span>
                             <h3>Analytics</h3>
                        </a>

                       


                        <a  href="?op=report">
                            <span class="material-icons-sharp">report_gmailerrorred</span>
                             <h3>Report</h3>
                        </a>


                        <a href="#" class="active">
                            <span class="material-icons-sharp">settings</span>
                             <h3>Settings</h3>
                        </a>

                      

                      

                        <a href="#">
                            <span class="material-icons-sharp">logout</span>
                             <h3>Logg out</h3>
                        </a>
                       
                    </a>
               </div>
        </aside>
        <!----------------------- END OF ASIDE ------------------->
             <main>
              <h1>PERFIL DE USUARIO</h1>
         <!--  <div class="date">
                <input type="date">

              </div>

              --> <div class="right">                     
                 <div class="sales-analytics"> 

                  
                 <div class="item online">

                  <div class="profile-photo-profile">
                   <img src="Public/images/images-12/profile-1.jpg" alt="">
                </div>
                <div class="right">
                       <div class="info">
                        <h3 class="font-12">Daniel  </h3>
                        <h3 class="font-12">Hernandez  </h3>
                        
                      
                        <small class="text-muted">Last 24 Hours</small>
                       </div>
                            
                       
                            <div class="item">
                            <span class="material-icons-sharp">person</span>
                            <h3>384/400</h3>
                             </div> 
                             <div class="item">
                              <span class="material-icons-sharp">person</span>
                              <h3>384/400</h3>
                               </div>
                               <div class="item">
                                <span class="material-icons-sharp">person</span>
                                <h3>384/400</h3>
                                 </div>
                 </div>
                



              </div>
              <div class="item online">

                
              <div class="right">
                     <div class="info">
                      <h3 class="font-12">Correo:<small class="text-muted"> Danielhernandez.gmail.com</small>  </h3>
                      <h3 class="font-12">Edad:<small class="text-muted"> 22 años</small>  </h3>
                      <h3 class="font-12">Sexo:<small class="text-muted"> Hombre</small>  </h3>
                      <h3 class="font-12">Numero Telefonico:<small class="text-muted"> (507)65974854</small>  </h3>
                      
                     </div>
                          
                     
                          <div class="item">
                          <span class="material-icons-sharp">person</span>
                          <h3>384/400</h3>
                           </div> 
                          
                            
               </div>
                              
                         

                    
                               
                               
          
                       <!--     
                                    
                                    <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                                      <div class="profile-tab-nav border-right">
                                        <div class="p-4">
                                          <div class="img-circle text-center mb-3">
                                            <img src="img/user2.jpg" alt="Image" class="shadow">
                                          </div>
                                          <h4 class="text-center">Kiran Acharya</h4>
                                        </div>
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                          <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                                            <i class="fa fa-home text-center mr-1"></i> 
                                            Account
                                          </a>
                                          <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                                            <i class="fa fa-key text-center mr-1"></i> 
                                            Password
                                          </a>
                                          <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                            <i class="fa fa-user text-center mr-1"></i> 
                                            Security
                                          </a>
                                          <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
                                            <i class="fa fa-tv text-center mr-1"></i> 
                                            Application
                                          </a>
                                          <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                                            <i class="fa fa-bell text-center mr-1"></i> 
                                            Notification
                                          </a>
                                        </div>
                                      </div>
                                      <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                          <h3 class="mb-4">Account Settings</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>First Name</label>
                                                  <input type="text" class="form-control" value="Kiran">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Last Name</label>
                                                  <input type="text" class="form-control" value="Acharya">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Email</label>
                                                  <input type="text" class="form-control" value="kiranacharya287@gmail.com">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Phone number</label>
                                                  <input type="text" class="form-control" value="+91 9876543215">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Company</label>
                                                  <input type="text" class="form-control" value="Kiran Workspace">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Designation</label>
                                                  <input type="text" class="form-control" value="UI Developer">
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Bio</label>
                                                <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
                                              </div>
                                            </div>
                                          </div>
                                          <div>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                          <h3 class="mb-4">Password Settings</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Old password</label>
                                                  <input type="password" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>New password</label>
                                                  <input type="password" class="form-control">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Confirm new password</label>
                                                  <input type="password" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                                          <h3 class="mb-4">Security Settings</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Login</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Two-factor auth</label>
                                                  <input type="text" class="form-control">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="recovery">
                                                  <label class="form-check-label" for="recovery">
                                                  Recovery
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                          <h3 class="mb-4">Application Settings</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="app-check">
                                                  <label class="form-check-label" for="app-check">
                                                  App check
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
                                                  <label class="form-check-label" for="defaultCheck2">
                                                  Lorem ipsum dolor sit.
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                                          <h3 class="mb-4">Notification Settings</h3>
                                          <div class="form-group">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="notification1">
                                              <label class="form-check-label" for="notification1">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
                                              </label>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="notification2" >
                                              <label class="form-check-label" for="notification2">
                                                hic nesciunt repellat perferendis voluptatum totam porro eligendi.
                                              </label>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="notification3" >
                                              <label class="form-check-label" for="notification3">
                                                commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
                                              </label>
                                            </div>
                                          </div>
                                          <div>
                                            <button class="btn btn-primary">Update</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    
                                  
                                   -->  
                              



                                <!--  
                                  <div class="icon">
                                      <span class="material-icons-sharp">shopping_cart</span>
                                  </div>
                                  <div class="right">
                                         <div class="info">
                                          <h3>DELL</h3>
                                          <small class="text-muted">Last 24 Hours</small>
                                         </div>
                                              <h3 class="font-12">EDIFICIO 1 </h3>
                                         
                                              <div class="item">
                                              <span class="material-icons-sharp">person</span>
                                              <h3>384/400</h3>
                                               </div> -->
                    <!--     </div> -->          


<!--
                                  <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-2" id="carousel_a9a6">
                                    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                                      <h1 class="u-text u-text-1">Profile</h1>
                                      <p class="u-large-text u-text u-text-variant u-text-2">I'm a creative PHP webdeveloper</p>
                                      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                                        <div class="u-layout">
                                          <div class="u-layout-row">
                                            <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                                              <div class="u-container-layout u-container-layout-1">
                                                <h4 class="u-text u-text-3">About me</h4>
                                                <p class="u-text u-text-default u-text-4">I am an allround web developer. I am a senior programmer with good knowledge of front-end techniques. Vitae sapien pellentesque habitant morbi tristique senectus et. Aenean sed adipiscing diam donec adipiscing tristique risus.&nbsp;</p>
                                                <p class="u-text u-text-palette-5-dark-2 u-text-5">Image by <a href="https://www.freepik.com/photos/people" class="u-border-1 u-border-palette-5-dark-2 u-btn u-button-link u-button-style u-none u-text-palette-5-dark-2 u-btn-1">Freepik</a>
                                                </p>
                                              </div>
                                            </div>
                                            <div class="u-align-center-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                                              <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                                                <img src="images/cvv.jpg" alt="" class="u-image u-image-circle u-image-1" data-image-width="700" data-image-height="700">
                                              </div>
                                            </div>
                                            <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                                              <div class="u-container-layout u-container-layout-3">
                                                <h4 class="u-text u-text-6">Details</h4>
                                                <p class="u-text u-text-7">
                                                  <span style="font-weight: 700;">Name: </span>
                                                  <br>Hunter Norton<br>
                                                  <span style="font-weight: 700;">Age: </span>
                                                  <br>33 years <span style="font-weight: 700;">
                                                    <br>Location: 
                                                  </span>
                                                  <br>'s-Hertogenbosch, The Netherlands, Earth
                                                </p>
                                                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                                  
                                                 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </section> 
 -->

                              </div>

                              
              <div class =insights>
                
                 <!----------------------- END OF ASIDE ---------------
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Suscritos</h3>
                                <h1>451</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>81%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>---->
                      <!----------------------- END OF Sales --------------
                      <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Asistieron</h3>
                                <h1>350</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>62%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>----->
                      <!----------------------- END OF EXPENSES ----------------
                      <div class="income">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total No Asistieron</h3>
                                <h1>125</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>44%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>--->
                      <!----------------------- END OF INCOME ------------------->
              </div>
                 <!----------------------- END OF INSIGHTS ------------------->
                  <!--      <div class="recent-order">
                         <h2>Recent Orders</h2>
                           <table>
                              <thead>
                                <tr>
                                    <th>Autores</th>
                                    <th>#conferencia</th>
                                    <th>Conferencia</th>
                                    <th>Estado</th>
                                  
                                    <th>Descripcion</th>
                                </tr>
                              </thead>
                                    <tbody>
                                      <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">Details</td>
                                        </tr> 
                                       
                                    </tbody>
                           </table>
                        
                                   <a href="#">Show All</a>
                       </div>

                    -->
             </main>
<!-------------------------------- END OF MAIN ------------------->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                    </button>
                     <div class="theme-toggler">
                        <span class="material-icons-sharp active" >light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                     </div>
                     <div class="profile">
                        <div class="info">
                            <p> Hey ,<b>Daniel </b></p>

                            <small class="text-muted">Admin</small>

                        </div>

                         <div class="profile-photo">
                            <img src="Public/images/images-12/profile-1.jpg" >
                         </div>
                     </div>
                </div>
<!-------------------------------- END OF TOP ------------------->
<!--  
                       <div class="recent-updates">
                           <h2>Recent Updates</h2>
                           <div class="updates">

                            <div class="update">
                            <div class="profile-photo">
                                 <img src="./images/profile-2.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Muke Tyson</b> received his order of nation</p>
                                  <small class="text-muted">2 minutes ago </small>
                            </div>
                            </div>

                            <div class="update">
                                <div class="profile-photo">
                                     <img src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="message">
                                    <p><b>Muke Tyson</b> received his order of nation</p>
                                      <small class="text-muted">2 minutes ago </small>
                                </div>
                                </div>

                                <div class="update">
                                    <div class="profile-photo">
                                         <img src="./images/profile-4.jpg" alt="">
                                    </div>
                                    <div class="message">
                                        <p><b>Muke Tyson</b> received his order of nation</p>
                                          <small class="text-muted">2 minutes ago </small>
                                    </div>
                                </div>
                           </div>
                       </div>
                       -->
          <!-------------------------------- END OF UPDATE ------------------->
                        <div class="sales-analytics">
                        <!--    <h2>ANALITICA CONFERENCA</h2>
                            <div class="item online">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>DELL</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                            <div class="item offline">
                                <div class="icon">
                                    <span class="material-icons-sharp">local_mall</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>HUAWEI</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="danger">-39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                            <div class="item customers">
                                <div class="icon">
                                    <span class="material-icons-sharp">person</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>SAMSUNG</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+25%</h5>
                                       <h3>835</h3>
                                </div>
                            </div>

                            <div class="item online">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>COPA</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                              <div class="item add-product">
                                   <div>
                                    <span class="material-icons-sharp">add</span>
                                    <h3>Add Product</h3>
                                   </div>
                              </div>
--> 
                   </div>
            </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
      <script src="Public/js/orders.js"></script>
       <script src="Public/js/index.js"></script>
</body>
</html>