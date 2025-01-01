<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>
  <body>
    <div class="sign-up">
      <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="div">
          <div class="text-wrapper">Log in</div>

          <!-- Email Input -->
          <div class="textbox-3">
            <label class="text-wrapper-6">Email</label>
            <input type="email" name="email" placeholder="example.email@gmail.com" required>
          </div>

          <!-- Password Input with Toggle Icon -->
          <div class="textbox-4">
            <label class="text-wrapper-8">Password</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <img id="togglePassword" class="toggle-icon" src="{{ asset('img/hide.png') }}" alt="Toggle Password Visibility" />
            </div>
          </div>

          <!-- Log In Button -->
          <button type="submit" class="button-4"><div class="text-wrapper-9">Log in</div></button>

          <!-- OR Separator -->
          <div class="text-wrapper-11">OR</div>

          <!-- Social Login Buttons -->
          <div class="social-buttons">
            <a href="{{ url('/auth/google') }}" class="button">
                <img class="img" src="{{ asset('img/google.jpeg') }}" alt="Log in with Google" />
            </a>
            <a href="{{ url('/auth/facebook') }}" class="button-2">
                <img class="img" src="{{ asset('img/facebook.png') }}" alt="Log in with Facebook" />
            </a>
            <a href="{{ url('/auth/apple') }}" class="button-3">
                <img class="img" src="{{ asset('img/apple.jpeg') }}" alt="Log in with Apple" />
            </a>
          </div>
        </div>
      </form>
    </div>

    <!-- JavaScript for toggling password visibility -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the icon based on password visibility
            this.src = type === 'password' ? "{{ asset('img/hide.png') }}" : "{{ asset('img/show.jpeg') }}";
        });
    </script>
  </body>
</html>
