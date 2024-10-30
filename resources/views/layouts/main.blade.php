<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Faiz Blog | {{ $title }}</title>
  </head>
  <body>
    
    @include('partials.navbar')
    
    <div class="container mt-4">
        @yield('container')
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- <script>
      let cache = {}; // Simpan URL gambar yang sudah didapatkan

      function getRandomImage(width, height) {
        const key = `${width}x${height}`;

        if (cache[key]) {
          imageElement.src = cache[key];
          return;
        }

        axios.get(`https://api.unsplash.com/photos/random?client_id=${apiKey}&w=${1200}&h=${400}`)
          .then(response => {
            imageElement.src = response.data.urls.regular;
            cache[key] = response.data.urls.regular;
          })
          .catch(error => {
            console.error('Error fetching image:', error);
          });
      }
    </script> --}}
  

  </body>
</html>