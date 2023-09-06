<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <x-navbar/>
    {{$slot}}

    @if(session()->has('message'))

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header
            @if (session('message')['status'] == 'success') bg-success @endif
          ">
            <strong class="me-auto">{{ session('message')['title'] }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ session('message')['content'] }}
          </div>
        </div>
      </div>



    @endif
    @livewireScripts
</body>
</html>