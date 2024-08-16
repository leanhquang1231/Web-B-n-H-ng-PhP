<style>.login-block {
    background: #f8f9fa;
    padding: 50px 0;
    height: 100vh;
    display: flex;
    align-items: center;
}

.login-sec {
    padding: 50px 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.login-sec h3 {
    font-size: 30px;
    font-weight: 800;
    color: #333;
    margin-bottom: 30px;
}

.login-form .form-group {
    margin-bottom: 25px;
}

.login-form label {
    font-size: 14px;
    font-weight: 600;
    color: #555;
}

.login-form input {
    height: 45px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 0 15px;
}

.login-form .btn-primary {
    background: #007bff;
    border: none;
    padding: 10px 25px;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.login-form .btn-primary:hover {
    background: #0056b3;
}

.banner-sec {
    background: #007bff;
    min-height: 500px;
    border-radius: 0 10px 10px 0;
    padding: 0;
}

.carousel-inner {
    border-radius: 0 10px 10px 0;
}

.carousel-item {
    min-height: 500px;
}

.carousel-caption {
    text-align: left;
    left: 5%;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
    bottom: initial;
}

.banner-text h2 {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 20px;
}

.banner-text p {
    font-size: 18px;
    line-height: 1.5;
}</style>
<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h3 class="text-center"><b>Login Now</b></h3>
        <form  action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="username" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="password" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit" name="submit"> Đăng Nhập</button> 
            
          </div>

        </form>
      
      </div>
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>