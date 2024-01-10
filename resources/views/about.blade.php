<!-- resources/views/dynamic_content.blade.php -->
<style>

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

    .skills-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .skill-card {
    background-color: #282c34; /* Set background color */
    color: white;
    padding: 15px;
    margin: 10px;
    border-radius: 8px;
    max-width: 300px; /* Set maximum width for each card */
    
    /* Center content using Flexbox */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center; /* Optional: Center text within the card */

    @media screen {
        
    }
}
 

</style>
<div class="container mx-auto my-8 pointer-events-auto " style="z-index: 2; position: relative;">
    <div>
        <div class="about-container flex flex-col lg:flex-row">
            <div class="image-container lg:order-2">
                <img src="assets/abt_pic.jpg" alt="About Image" class="w-full h-auto lg:h-36 lg:w-19vw">
            </div>
            <div class="text-container align-top ml-1">
                <div class="text-4xl mb-4 text-teal-600" style="--tw-text-opacity: 1; color: rgb(13 148 136 / var(--tw-text-opacity));">
                    <h6>Learn, Adapt, Excel.</h6>
                </div>
                <p>Hey, I'm Ojasvin Borawke, a student at SPPU. I'm currently in my third year of my Bachelors in Computer Engineering (graduating 2025).</p>
                <p>Coding, one of my greatest passions, is just the tip of the iceberg. I've dipped my hand in a lot of activities like video editing, Game making, going to the gym, anime/TV shows, along with a few sports</p>
                <p>While I don't do it all the time, I love tinkering with my side projects. One of my favorites to work on was my Spotify controller I made in the semi well-known AHK language, you can check it out in the projects tab. Currently, I'm working on a WPF pdf editing application in C# along with this website</p>
            </div>
        </div>
        
        <div class="skills-container">
            <div class="text-4xl mb-4 " style="--tw-text-opacity: 1;color: rgb(252 111 3 / var(--tw-text-opacity));">
                Skills
            </div>
            <div class="row-wise-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="skill-card">
                        <img src="assets\svgtopng\c.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                        <b>C</b>
                    </div>
                    <div class="skill-card">
                        <img src="assets\svgtopng\c--4.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                        <b>C#</b>
                    </div>
                    <div class="skill-card">
                        <img src="assets\svgtopng\java.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                        <b>Java</b>
                    </div>
                    <div class="skill-card">
                        <span><img src="assets\svgtopng\html-1.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                            <img src="assets\svgtopng\css-3.png" alt="" style="height: 25px; width: 25px" class="mr-2"></span>
                        <b>HTML5 & CSS</b>
                    </div>
                    <div class="skill-card">
                        <img src="assets\svgtopng\javascript-39395.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                        <b>JavaScript</b>
                    </div>
                    <div class="skill-card">
                        <img src="assets\svgtopng\laravel-2.png" alt="" style="height: 25px; width: 25px" class="mr-2">
                        <b>Laravel</b>
                    </div>
                    <div class="skill-card">
                        <img src="assets\svgtopng\ahklogo.png" alt="" style="height: 25px; width: 50px" class="mr-2">
                        <b>AutoHotKey</b>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
