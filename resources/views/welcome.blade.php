<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="referrer" content="no-referrer">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets\style.css">
    <style>
      .container2 
      {
        height: 100vh; /* Set a fixed height for the container */
        overflow-y: scroll; /* Allow vertical scrolling */
      }
      .no-scrollbar 
      {
     -ms-overflow-style: none;  /* IE and Edge */
     scrollbar-width: none;  /* Firefox */
     }

     .no-scrollbar::-webkit-scrollbar 
     {
      display: none;
     }
    </style>
</head>
<body class="flex flex-col items-center h-screen m-0 overflow-hidden" >

  <div class="grid2">
    <div class="grid__item"></div>
  </div>

  <!-- "OB" Text -->
  <nav class="flex items-center justify-between w-full p-4 " style="z-index: 2; background: rgb(19, 19, 19)">
    <a href="javascript:void(0);" onclick="reloadOriginalContent()">
      <img src="assets\logo.png" alt="Square Image" style="width: 10vh; height: 10vh;">
    </a>

    <!-- Navigation buttons -->
    <div class="flex justify-center items-center flex-grow">
      <button onclick="loadView('about')" class="text-white py-3 px-4 rounded-md transition duration-150 hover:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300">
        About
      </button>
      <button onclick="loadView('projects')" class="text-white py-3 px-4 rounded-md transition duration-150 hover:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300">
        Projects
      </button>
      <button onclick="loadView('lets_talk')" class="text-white py-3 px-4 rounded-md transition duration-150 hover:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300">
        Let's Talk
      </button>
      <button onclick="downloadFile()" class="text-white py-3 px-4 rounded-md transition duration-150 hover:bg-gray-700 focus:outline-none focus:ring focus:border-blue-300">
        <div class="flex justify-center">Resume <img src="assets/download.png" class=" mt-1" alt="" style="height: 2vh; width:2vh"></div>
      </button>
    </div>
  </nav>

  <main id="main_content" class=" pointer-events-none flex-1 p-20 items-center justify-center text-white container2 no-scrollbar" style="z-index: 2;">
    <!-- Initial Content -->
    <div>
      <div class="text-center" style="width: auto; padding: 16px; solid white;">
        <img src="assets\white bg photo 128kb.jpeg" alt="Square Image" style="width: 25vh; height: 25vh; border-radius:80%">
      </div>
      <div class="text-center" style="width: auto;height:auto ;padding: 16px; solid white;">
        <div><h2>Hi, my name is Ojasvin Borawke</h2></div>
        <div><p>I am a <span class="sentence"></span></p></div>
      </div>
    </div>
  </main>

  <!-- Include scripts -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="assets\script.js"></script>
  <script src="assets\typer.js"></script>
  <script type="text/javascript">
    function loadView(viewName) {
        $('#main_content').load('/' + viewName);
    }

  </script>
  <script>
    function reloadOriginalContent() {
      location.reload();
    }
  </script>
  <script>
      function downloadFile() {
         var page = 'https://drive.google.com/file/d/1esmtmGDE5c40A9smvyJmFXyI2FJioNTZ/view?usp=sharing';
         var myWindow = window.open(page, "_blank", "scrollbars=yes,width=400,height=500,top=300");
         myWindow.focus();
 
       }
   </script>
</body>
</html>
