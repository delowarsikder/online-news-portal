<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-1">
    @yield('content')
  </div>

  <!-- <script type="text/javascript" src="{{asset ('js/image_preview.js') }}"></script> -->
  @push('script')
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
@endpush

</body>
</html>
