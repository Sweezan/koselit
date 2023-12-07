<style>
  body {
  font-family: sans-serif;
  background: #d5f0f3;
}
.container {
  position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 350px;
    background-color: white;
}
button {
   padding: 20px ;
  margin: 0px 40px;
  background-color: #4BB543;
  width: 80%;
  text-align: center;
  position: relative;
  color: white;
  font-size: 20px;

}


</style>

<div class="container">

    <div class="lab">
    <a href="<?php echo site_url('welcome/login_admin'); ?>"><button>Login Admin</button></a>
    </div>
    <br>
    <div class="lab">
    <a href="<?php echo site_url('welcome/login_cs'); ?>"><button>Login Member</button></a>
    </div>




</div>
