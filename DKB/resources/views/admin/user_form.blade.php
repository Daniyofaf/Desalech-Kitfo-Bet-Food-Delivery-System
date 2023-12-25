<html>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/svg+xml">


<head>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/svg+xml">

<title>{{ config('', 'Desalech Kitfo Bet Food Delivery System') }}</title>
    
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    /* Add padding to containers */
    .container {
      padding: 16px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password],
    textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .SendButton {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .SendButton:hover {
      opacity: 1;
    }
  </style>

</head>

<body>
  <nav>

    <div class="navbar item">
      <div class="px-4">
        <!-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> -->
      </div>

      <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </nav>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">



          <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container">
              <h1><b>Contact us</b></h1>
              <p><b>Please fill in the form details below.</b></p>
              <hr>

              <label for="full_name"><b>Full Name</b></label>
              <input type="text" placeholder="Enter your Full Name" name="full_name" required>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>

              <label for="phone_number"><b>Phone Number</b></label>
              <input type="text" placeholder="Enter Your Phone Number" name="phone_number" required>

              <label for="address"><b>Address</b></label>
              <input type="text" placeholder="Enter your Address" name="address" required>

              <select name="food" class="form-select" aria-label="Default select example" style="background-color: #4CAF50; color:white; border-radius:25px; " required>
                <option selected>Choose Your favorite Food</option>
                <option value="kitfo">Kitfo</option>
                <option value="kurt">Kurt</option>
                <option value="tibs">Tibs</option>
              </select>

              <br><br>

              <label for="Text"><b>Make Payment Of The Food At CBE: 1000399781608 And</b></label><br><br>
              <label for="image"><b>Upload Screenshot</b></label>
              <input type="file" name="image" accept="image/*" style="border-radius:25px; color:white; background-color:#4CAF50; border-color:#ddd; " required><br><br>

              <label for="message"><b>Write Your Specific Area For The Accuracy Of The Food Deliver</b></label>
              <textarea name="message" rows="5" cols="5" placeholder="Write your Location with details here..." required></textarea>

              <button type="submit" class="SendButton">Send</button>
            </div>


          </form>


        </div>
      </div>
    </div>
  </div>








</body>

</html>