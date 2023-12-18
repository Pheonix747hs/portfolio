<!-- resources/views/dynamic_content.blade.php -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .about-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px;
    }

    .image-container {
        flex: 1;
        margin-right: 5px; /* Adjust margin-right to reduce space */
    }

    .image-container img {
        border-radius: 8px; /* Optional: Add border-radius for rounded corners */
    }

    .text-container {
        flex: 2;
    }

    .text-container p {
        margin-bottom: 10px; /* Adjust margin-bottom to reduce space */
    }

    #style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}
</style>
<div class="">
    <div class="about-container">
        <div class="image-container">
            <img src="assets/abt_pic.jpg" alt="About Image" style="height: 36vh; width: 19vw">
        </div>
        <div class="text-container align-top ml-1">
            <div class="text-4xl mb-4 text-teal-600" style="--tw-text-opacity: 1;
            color: rgb(13 148 136 / var(--tw-text-opacity));">
                <h6>Learn, Adapt, Excel.</h6>
            </div>
            <p>Hey, I'm Ojasvin Borawke, a student at SPPU. I'm currently in my third year of my Bachelors in Computer Engineering (graduating 2025).</p>
            <p>Coding, one of my greatest passions, is just the tip of the iceberg. I've dipped my hand in a lot of activities like video editing, Game making, going to the gym, anime/TV shows, and last but not least, Badminton.</p>
            <p>While i dont do it all the time I love tinkering with my side projects , one of my favorites to work on was my Spotify controller I made in the semi well known AHK language, you can check it out in the projects tab. Currently Im working on a WPF pdf editing application in C# along with this website</p>
        </div>
    </div>
    <div class="text-container flex flex-col items-center">
        <div class="text-4xl mb-4 " style="--tw-text-opacity: 1;color: rgb(252 111 3 / var(--tw-text-opacity));">
            Skills
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\c.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>C</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\c--4.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>C#</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\java.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>Java</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\html-1.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <img src="assets\svgtopng\css-3.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>HTML5 & CSS</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\javascript-39395.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>JavaScript</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\laravel-2.png" alt="" style="height: 25px; width: 25px" class="mr-2">
            <b>Laravel[Beginner]</b>
        </div>
        <div class="flex items-center mb-2">
            <img src="assets\svgtopng\ahklogo.png" alt="" style="height: 25px; width: 50px" class="mr-2">
            <b>AutoHotKey</b>
        </div>
        
    </div>
    <div class="scrollbar" id="style-1">
        <div class="force-overflow"></div>
      </div>
    
</div>
