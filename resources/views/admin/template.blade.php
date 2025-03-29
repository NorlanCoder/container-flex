<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CapHash Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('admin/css/tailwind.output.css')}}" />
    <style>
      .alert{
        opacity: 0;
        transition: all 0.5s ease-in-out;
      }
      .show {
        transform: translateY(64px);
        opacity: 1;
      }

      .hide {
        transform: translateY(-100px);
        opacity: 0;
      }
    </style>
    @yield('style')
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="{{asset('build/assets/app-BbO0mL37.css')}}">
    <script src="{{asset('build/assets/app-CHSZ6LPi.js')}}"></script>

  </head>
  <body>
    
    {{-- @include('alert') --}}
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      @include('admin.layouts.sidebar')
      <div class="flex flex-col flex-1 w-full">
        @include('admin.layouts.header')
        <main class="h-full overflow-y-auto">
          @yield('content')
        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{asset('admin/js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    @yield('script')

    {{--<script src="{{asset('admin/js/charts-lines.js')}}" defer></script>
    <script src="{{asset('admin/js/charts-pie.js')}}" defer></script>--}}
  </body>
</html>
