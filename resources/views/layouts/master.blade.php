<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Online-News Portal</title>
  @include('partials.styles')
</head>

<body class="d-flex flex-column min-vh-100">
  @include('partials.header')
  <div class="container mt-2 mb-2">
    @yield('content')
  </div>
  @include('partials.footer')
  <!-- @include('partials.scripts') -->

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