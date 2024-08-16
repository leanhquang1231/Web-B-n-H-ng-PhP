
<!--  -->
  <style>
    .container {
    padding-top: 50px;
    padding-bottom: 50px;
}

.well {
    background-color: #f8f9fa;
    border: none;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    padding: 30px;
}

legend {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 25px;
    text-align: center;
}

legend i {
    color: #007bff;
    margin-right: 10px;
}

.form-control {
    height: 45px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px 15px;
    margin-bottom: 15px;
}

label {
    font-weight: 600;
    color: #555;
    margin-bottom: 5px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 12px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.row {
    margin-bottom: 15px;
}

@media (max-width: 767px) {
    .col-xs-4, .col-xs-8 {
        width: 100%;
        padding: 0;
    }
    
    .col-xs-4 {
        margin-bottom: 5px;
    }
}
  </style>
<div class="container"> 
 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <form  action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text"> 
     </div> 
    </div><label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email" type="email">
    <label for="email">Mat khau:</label> <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
  
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"> Đăng ký</button> 

   </form> 
  </div> 
 </div>
</div>