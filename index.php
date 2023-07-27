<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/basic.css">
        <link rel="stylesheet" href="styles/page-1.css">
        <link rel="stylesheet" href="styles/page-2.css">
        <link rel="stylesheet" href="styles/page-3.css">
        <link rel="stylesheet" href="styles/page-4.css">
        <link rel="stylesheet" href="styles/page-5.css">
        
        <title>Michael Andreas Prasetio</title>
    </head>
    <body>
        <section class="page-1" id="page-1">
            <div class="left-side-p1">
                <img src="image/michael-square.jpg" alt="Profile Picture" class="self-photo">
            </div>
            <div class="right-side-p1">
                <div class="texts">
                    <h2 class="text">Hello there! My name is</h2>
                    <h1 class="text">Michael Andreas Prasetio</h1>
                    <h3 class="text">Android Developer | Front-end & Back-end Developer</h3>
                </div>
                <div class="button">
                    <button class="btn-get-started text" onclick="scrollToPage2()">Get Started!</button>
                </div>
            </div>
        </section>
        <section class="page-2" id="page-2">
            <div class="about-card">
                <h1 class="title text">About Me</h1>
                <hr>
                <p class="text">
                    I'm an ambitious 7th-semester informatics engineering student at Universitas Surabaya. I'm also a Bangkit 2023 cohort student graduates with mobile development learning path. This program has provided me with a valuable experience collaborating in my team, and hone my ability to work effectively in a group.
                    During my time in college, I have taken on several roles in committee, mostly as member. These experiences have allowed me to develop excellent communication, organizational, and teamwork skills, enhancing my ability to contribute effectively to collaborative projects.
                </p>
                <p class="text">
                    While I may not have formal work experience yet, I am eager to gain practical exposure and apply my skills in a professional environment. I am actively seeking internships to further develop my abilities and contribute to meaningful projects.
                    As a dedicated learner and a team player, I am always seeking opportunities for personal growth and making a positive impact. If you have any internship offers or are interested in collaborating, I would be thrilled to connect and explore potential synergies.
                </p>
                <br>
                <h3 class="text">I look forward to be contributing in your company!</h3>
            </div>
        </section>
        <section class="page-3" id="page-3">
            <div class="title text">
                <h1>Programming Skills</h1>
            </div>
            <div class="programming-cards">
                <?php 
                    $logo = array(
                        "image/logo/html.png",
                        "image/logo/css.png",
                        "image/logo/php.png",
                        "image/logo/js.png",
                        "image/logo/kotlin.png",
                        "image/logo/python.png"
                    );
                    $stars = array(4,4,4,2,4,3);

                    for ($i=0; $i < count($logo); $i++) { 
                        echo(
                            "<div class='programming-card'>
                                <div>
                                <img class='logo' src='".$logo[$i]."' alt=''>
                                </div>
                                <div class='stars'>"
                        );

                        $star = 1;
                        while ($star <= $stars[$i]) {
                            echo('<img src="image/logo/star.png" alt="">');
                            $star++;
                        }
                        
                        echo("</div></div>");
                    }
                ?>
            </div>
        </section>
        <section class="page-4" id="page-4">
            <div class="title text">
                <h1>My Done Projects</h1>
            </div>
            <div class="projects">
                <div class="project">
                    <div class="text align-left">
                        <h2>My First Portfolio Website (Discontinued)</h1>
                        <br>
                        <p>This is my first portfolio website I have ever made fully. This website is built by using HTML, CSS, and JavaScript. In this project, I made some animations in cards and other things. I also make the website responsive for mobile use. My Struggle with this project is with animations and making it responsive. This website is discontinued because I made a newer portfolio website because I don't like the old website design.</p>
                    </div>
                    <div class="image">
                        <img src="image/projects/proj_1.png" alt="Project 1" class="fit-cover">
                        <div class="more">
                            <button class="text" onclick="openURLInNewTab('https://michael-tio.github.io/')">Go to project</button>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="image">
                        <img src="image/projects/proj_2.png" alt="Project 2" class="fit-contain">
                        <div class="more">
                            <button class="text" onclick="openURLInNewTab('https://github.com/victorman01/FarmKu')">Go to project</button>
                        </div>
                    </div>
                    <div class="text align-right">
                        <h2>FarmKu (Discontinued)</h1>
                        <br>
                        <p>This is a big project that I have worked on at Bangkit Program with 5 of my other team members. This FarmKu app is built fully using Kotlin. In this project, we use kotlin features like Retrofit, LiveData, SharedPreferences, Custom View, Firebase, Google Maps, etc. My struggle with this project is accessing the API because the API is not really well documented by our cloud computing members, and lack of communications. Because of this, the project is not finished and the project is abandoned after Bangkit Program ended.</p>
                    </div>
                </div>
                <div class="project">
                    <div class="text align-left">
                        <h2>Ubaya Informatics Engineering Website (Coming Soon)</h1>
                        <br>
                        <p>This Project is given by the head of study program himself for our "Kerja Praktek" project. This website is built by using Laravel8. Our task is to update the design of the old website. The content of the website will be made the same, just need the design update.</p>
                    </div>
                    <div class="image">
                        <img src="image/projects/proj_3.png" alt="Project 3" class="fit-contain">
                        <div class="more">
                            <button class="text" onclick="openURLInNewTab('https://www.figma.com/file/KHteWy2hBIR1qDssYUbclg/IF-Ubaya?type=design&node-id=0%3A1&mode=design&t=WD0qlzQo7iFAy8ZZ-1')">Go to project</button>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="image">
                    </div>
                    <div class="text align-right">
                        <h2>Coming Soon Project</h1>
                        <br>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus provident! Sapiente ad quibusdam iure obcaecati tempore sunt rerum dolorum a deserunt, repellendus pariatur, facilis quam iusto harum, voluptatum eos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-5" id="page-5">
            <div class="title text">
                <h1>Certificates of Achievement and Participation</h1>
            </div>
            <div class="certificates">
                <?php
                    $title = array(
                        "United For Others 2021",
                        "Memulai Dasar Pemrograman untuk Menjadi Pengembang Software",
                        "Pengenalan ke Logika Pemrograman (Programming Logic 101)",
                        "Belajar Dasar Git dengan GitHub",
                        "Memulai Pemrograman Dengan Kotlin",
                        "Belajar Membuat Aplikasi Android untuk Pemula",
                        "Belajar Fundamental Aplikasi Android",
                        "Belajar Prinsip Pemrograman SOLID",
                        "Belajar Pengembangan Aplikasi Android Intermediate",
                        "Belajar Dasar UX Design",
                        "Belajar Membuat Aplikasi Android dengan Jetpack Compose",
                        "Memulai Pemrograman Dengan Java",
                        "Find IT Programming Competition",
                        "Bangkit 2023",
                    );
                    $subtitle = array(
                        "Volunteering as mathematics material provider, providing childrens in need. This event is hosted by Ubaya and UKP.",
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        "Participated in Find IT competitive programming by UGM. In this programming competition, we used Java as the programming language.",
                        "Participated as Bangkit 2023 Mobile Development Cohort Students. In this program, I learnt a lot about android programming using Kotlin.",
                    );
                    $links = array(
                        null,
                        "https://www.dicoding.com/certificates/72ZD9DOLJPYW",
                        "https://www.dicoding.com/certificates/MRZM4R4NLXYQ",
                        "https://www.dicoding.com/certificates/07Z6GM5RWXQR",
                        "https://www.dicoding.com/certificates/2VX3Y302VPYQ",
                        "https://www.dicoding.com/certificates/2VX3Y9N73PYQ",
                        "https://www.dicoding.com/certificates/JMZV9MD2JPN9",
                        "https://www.dicoding.com/certificates/07Z6VG6QMXQR",
                        "https://www.dicoding.com/certificates/RVZKOKVE4PD5",
                        "https://www.dicoding.com/certificates/EYX46Y70RPDL",
                        "https://www.dicoding.com/certificates/MRZMQE8MLPYQ",
                        "https://www.dicoding.com/certificates/1OP80MWMLXQK",
                        null,
                    );
                    $imagePath = array(
                        "image/certs/cert_1.jpg",
                        "image/certs/cert_2.png",
                        "image/certs/cert_3.png",
                        "image/certs/cert_4.png",
                        "image/certs/cert_5.png",
                        "image/certs/cert_6.png",
                        "image/certs/cert_7.png",
                        "image/certs/cert_8.png",
                        "image/certs/cert_9.png",
                        "image/certs/cert_10.png",
                        "image/certs/cert_11.png",
                        "image/certs/cert_12.png",
                        "image/certs/cert_13.png",
                        "image/certs/cert_14.png",
                    );

                    for ($i=0; $i < count($title); $i++) { 
                        echo('
                            <div class="certs-item">
                                <div class="item">
                                    <img src="'.$imagePath[$i].'" alt="cert_'.($i+1).'">
                                    <div class="more">
                                        <p class="text align-center small-title">'.$title[$i].'</p>'
                        );

                        if ($subtitle[$i] != null) {
                            echo('
                                <p class="text align-center small-subtitle">'.$subtitle[$i].'</p>
                            ');
                        } else {
                            echo('
                                <button class="text" onclick="openURLInNewTab(\''.$links[$i].'\')">Open Certificate</button>
                            ');
                        }
                        
                        echo('
                                    </div>
                                </div>
                            </div>'
                        );
                    }
                ?>
            </div>
        </section>
        <footer>

        </footer>
        <script src="js/app.js"></script>
    </body>
</html>