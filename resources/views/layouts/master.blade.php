<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Online-News Portal</title>
  @include('partials.styles')
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>

<body class="d-flex flex-column min-vh-100">
  @include('partials.header')
  <div class="container mt-2 mb-2">
    @yield('content')
  </div>

  @include('partials.footer')

  <!-- Bootstrap core Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function (e) {
      $('#photo').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#image').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      });
    });
  </script>
</body>

</html>