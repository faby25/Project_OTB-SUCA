<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css" />
  <title>Sistema Control Agua</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-info">
        <form action="#" class="sign-in-form">
          <!-- <h2>SISTEMA DE CONTROL PARA EL COBRO DE AGUA</h2> -->
          <h1 class="title">OTB-SUCA</h1>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input class="btn solid" type="submit" value="Ingresar" /><!--Login  -->

          <!-- <a href=""id="forgot-password">Olvidaste tu contrasena?</a> -->
          <button class="btn solid" id="ask-password">olvidaste tu contrasena </button>
        </form>

        <form action="#" class="ask-info-form"><!-- class="sign-up-form" -->
          <h2 class="title">Pedir Información</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input type="submit" class="btn" value="Enviar" />
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Primera véz aqui ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex
            ratione. Aliquid! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <button class="btn transparent" id="ask-info-btn">Información </button>
        </div>
        <img src="img/login.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Tienes una cuenta ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">Ingresar</button>
        </div>
        <img src="img/login-password.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>

</html>
