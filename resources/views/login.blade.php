<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>phoneX-Login</title>
    <link rel="stylesheet" href="css/loginStyle.css" />
  </head>
  <body>
    <div class="con">
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="{{Route("registerCheck")}}" method="post">
            @csrf
          <input type="text" id="username" name="username" placeholder="Username" value="{{old("username")}}"  />
          <span class="formError">@error('username'){{$message}} @enderror </span>
          <input type="text" id="email" name="email" placeholder="Email" value="{{old("email")}}"  />
          <span class="formError"> @error('email'){{$message}} @enderror</span>
          <input type="text" id="address" name="address" placeholder="Address" value="{{old("address")}}"  />
          <span class="formError">@error('address'){{$message}} @enderror </span>
          <input type="password" id="password" name="password" placeholder="Password"  />
          <span class="formError"> @error('password'){{$message}} @enderror</span>
          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm-Password"  />
          <span class="formError"> @error('password_confirmation'){{$message}} @enderror</span>
          <input type="submit" value="Signup" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form action="{{Route("loginCheck")}}" method="post">
            @csrf
          <input type="text" id="username" name="username" placeholder="Username" value="{{old("username")}}" required/>
          <span class="lformError">@error('username'){{$message}} @enderror
          </span>
          <input type="password" id="password" name="password" placeholder="Password" required />
          <span class="lformError">@error('password'){{$message}} @enderror
          </span>
          <input type="submit" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </div>
  </body>
</html>

