<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>
  <body>
    <div class="sign-up">
      <form action="{{ url('/signup') }}" method="POST">
        @csrf
        <div class="div">
          <div class="text-wrapper">Sign up</div>

          <!-- First Name Input -->
          <div class="textbox-2">
            <label class="text-wrapper-4">First name</label>
            <input type="text" name="first_name" placeholder="Input first name" required>
          </div>

          <!-- Last Name Input -->
          <div class="textbox">
            <label class="text-wrapper-2">Last name</label>
            <input type="text" name="last_name" placeholder="Input last name" required>
          </div>

          <!-- Email Input -->
          <div class="textbox-3">
            <label class="text-wrapper-6">Email</label>
            <input type="email" name="email" placeholder="example.email@gmail.com" required>
          </div>

          <!-- Password Input with Toggle Icon -->
          <div class="textbox-4">
            <label class="text-wrapper-8">Password</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" placeholder="Enter at least 8+ characters" required>
                <img id="togglePassword" class="toggle-icon" src="{{ asset('img/hide.png') }}" alt="Toggle Password Visibility" />
            </div>
          </div>

          <!-- Checkbox and Terms -->
          <div class="checkbox">
            <input type="checkbox" required />
            <p class="by-signing-up-i">By signing up, I agree with the Terms of Use & Privacy Policy</p>
          </div>

          <!-- Sign Up Button -->
          <button type="submit" class="button-4"><div class="text-wrapper-9">Sign up</div></button>

          <!-- Already have an account -->
          <p class="text-wrapper-10">
              Already have an account?
              <a href="{{ url('/login') }}" class="login-link">Log in</a>
          </p>

          <!-- OR Separator -->
          <div class="text-wrapper-11">OR</div>

          <!-- Social Login Buttons -->
          <div class="social-buttons">
            <a href="{{ url('/auth/google') }}" class="button">
                <img class="img" src="{{ asset('img/google.jpeg') }}" alt="Sign up with Google" />
            </a>
            <a href="{{ url('/auth/facebook') }}" class="button-2">
                <img class="img" src="{{ asset('img/facebook.png') }}" alt="Sign up with Facebook" />
            </a>
            <a href="{{ url('/auth/apple') }}" class="button-3">
                <img class="img" src="{{ asset('img/apple.jpeg') }}" alt="Sign up with Apple" />
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
