<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>Document</title>
</head>

<body style="background-color: hsl(0, 0%, 96%)">
   <!-- Section: Design Block -->
   <section class="">
      <!-- Jumbotron -->
      <div class="px-4 py-5 px-md-5 text-center text-lg-start">
         <div class="container">
            <div class="row gx-lg-5 align-items-center">
               <div class="col-lg-6 mb-5 mb-lg-0">
                  <h1 class="my-5 display-3 fw-bold ls-tight">
                     The best restaurant <br />
                     <span class="text-primary">WarungPedia</span>
                  </h1>
                  <p style="color: hsl(217, 10%, 50.8%)">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                     quibusdam tempora at cupiditate quis eum maiores libero
                     veritatis? Dicta facilis sint aliquid ipsum atque?
                  </p>
               </div>

               <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="card">
                     <div class="card-body py-5 px-md-5">
                        <form>
                           <!-- 2 column grid layout with text inputs for the first and last names -->
                           <!-- <div class="row">
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" />
                                    <label class="form-label" for="form3Example1">First name</label>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                 <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" />
                                    <label class="form-label" for="form3Example2">Last name</label>
                                 </div>
                              </div>
                           </div> -->

                           <!-- Email input -->
                           <div class="form-outline mb-4">
                              <input type="text" id="login-username" class="form-control" />
                              <label class="form-label" for="form3Example3">Username</label>
                           </div>

                           <!-- Password input -->
                           <div class="form-outline mb-4">
                              <input type="password" id="login-password" class="form-control" />
                              <label class="form-label" for="form3Example4">Password</label>
                           </div>

                           <!-- Checkbox -->
                           <!-- <div class="form-check d-flex justify-content-center mb-4">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                              <label class="form-check-label" for="form2Example33">
                                 Subscribe to our newsletter
                              </label>
                           </div> -->

                           <!-- Submit button -->
                           <button type="button" id="btn-login" class="btn btn-primary btn-block mb-4">
                              Login
                           </button>

                           <!-- Register buttons -->
                           <!-- <div class="text-center">
                              <p>or sign up with:</p>
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                 <i class="fa fa-facebook"></i>
                              </button>

                              <button type="button" class="btn btn-link btn-floating mx-1">
                                 <i class="fa fa-google"></i>
                              </button>

                              <button type="button" class="btn btn-link btn-floating mx-1">
                                 <i class="fa fa-twitter"></i>
                              </button>

                              <button type="button" class="btn btn-link btn-floating mx-1">
                                 <i class="fa fa-github"></i>
                              </button>
                           </div> -->
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Jumbotron -->
   </section>
   <!-- Section: Design Block -->
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <script src="js/global.js"></script>
   <script>
      $(document).ready(function() {
         $("#btn-login").click(function() {
            var username = $("#login-username").val();
            var password = $("#login-password").val();

            var json = {
               username: username,
               password: password
            }

            var url = "/loginsubmit";

            console.log(json);

            ajax.ajaxPost(url, json, function(response) {
            //    console.log(response);
                //kalo login berhasil
                if(response.length > 0){
                    //pindah ke home
                    window.location="/"; //gg google collab, apa copilot ini, kan enak tinggal klik doang
                }else{
                    //buat alert tidak berhasil
                    alert("Gagal Login");
                }
            });

         });
      });
   </script>
</body>

</html>