<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/home_-_particles/page/head.yaml',
    'modified' => 1723727195,
    'data' => [
        'atoms' => [
            0 => [
                'id' => 'assets-5274',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.con-container {
    display: flex;
    align-items: center;
    justify-content: left;
    padding-left: 50px;
    height: 100vh;
    background-image: url(\'http://localhost/portfolio/wp-content/uploads/2024/08/Header.png\');
    background-size: cover;
    background-position: center;
}

.scroll-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.a-scroll-content {
    white-space: nowrap;
    margin: 0;
    margin-bottom: -45px;
    font-size: 25px;
    opacity: 0;
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
}

.b-scroll-content {
    white-space: nowrap;
    margin: 0;
    margin-top: -30px;
    font-size: 20px;
    opacity: 0;
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
}

.fade-in {
    animation: fadeIn 1s forwards;
}

.moving-content {
    font-size: 75px; /* Larger font size */
    margin-left: -3px;
    font-weight: bold; /* Bold font */
    position: relative;
    left: -100%;
    opacity: 1;
    transition: left 1s ease-in-out;
}


.slide-up {
    transform: translateY(100%);
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

@keyframes slideUp {
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideDown {
    to {
        transform: translateY(100%);
        opacity: 0;
    }
}
',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'animation'
                        ],
                        1 => [
                            'location' => '',
                            'inline' => '#g-navigation .g-social {
    text-align: left;
    line-height: 3.125;
    margin-left: -320px;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'icon links'
                        ],
                        2 => [
                            'location' => '',
                            'inline' => 'body {
    margin: 0;
}

#g-intro {
    background: #f4f5f7;
    color: #020202;
    padding: 1rem 0;
}

.g-home-particles.g-helium-style #g-intro {
    padding-bottom: 4.5rem;
}

.fp-intro {
    max-width: 100%;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 2s ease-out, transform 2s ease-out;
}

.g-title {
    margin: 0;
    font-size: 4em;
    margin-bottom: 10px;
    font-family: Helvetica;
    font-weight: bold;
}

.intro-content p {
    font-size: 1.2em;
    line-height: 1.5;
}

.fp-intro.in-view {
    opacity: 1;
    transform: translateY(0);
}

.fp-intro.outro {
    opacity: 0;
    transform: translateY(20px);
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeOutDown {
    to {
        opacity: 0;
        transform: translateY(20px);
    }
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'intro'
                        ],
                        3 => [
                            'location' => '',
                            'inline' => '/* Container Styles */
#g-features {
    height: 570px;
}
.exp-container {
    position: relative;
    padding: 20px;
}

/* Title Styles */
.ut-title {
    opacity: 0;
    transform: translateY(-30px); 
    transition: opacity 1.5s ease-in-out, transform 1.5s ease-in-out;
    will-change: opacity, transform;
}

.ut-title h1 {
    text-align: center;
    font-size: 4rem;
    margin: 0;
    padding: 0;
    font-family: Helvetica, sans-serif; /* Font-family fallback */
}

/* Experience Styles */
.experience {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px; /* Adjusted padding */
    margin-bottom: 20px; /* Space below */
    opacity: 0;
    transform: translateY(30px); 
    transition: opacity 1.5s ease-in-out, transform 1.5s ease-in-out;
    will-change: opacity, transform;
}

/* Experience Header Styles */
.experience-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

/* Title Styles Inside Experience */
.title h3 {
    margin: 0;
    font-size: 2em;
    font-family: Raleway, sans-serif; /* Font-family fallback */
    font-weight: bolder;
}

.title p {
    margin: 0;
    color: #fff;
    font-size: 1.2em;
    font-family: Raleway, sans-serif; /* Font-family fallback */
}

.date p {
    margin: 0;
    font-style: italic;
    color: #fff;
    font-size: 1em;
    margin-top: -35px; /* Adjust as needed */
}

/* Experience Details Styles */
.experience-details ul {
    list-style-type: disc;
    padding-left: 20px;
    margin: 0;
    font-size: 1.1em;
}

.experience-details li {
    margin-bottom: 5px;
}

/* Visibility Classes */
.ut-title.visible {
    opacity: 1;
    transform: translateY(0);
}

.experience.visible {
    opacity: 1;
    transform: translateY(0);
}

.ut-title.hidden {
    opacity: 0;
    transform: translateY(-30px);
}

.experience.hidden {
    opacity: 0;
    transform: translateY(30px);
}
',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'experience'
                        ],
                        4 => [
                            'location' => '',
                            'inline' => '.g-contentcubes .cube-items-wrapper {
    background: #ffffff;
    color: #020202;
    border-radius: 50px;
    overflow: hidden;
}

.g-contentcubes .cube-items-wrapper .cube-content-wrapper .item-label {
    display: inline-block;
    background: #020202;
    padding: 0.35em 0.85em;
    margin-bottom: 0.5rem;
    font-size: 0.8125rem;
    line-height: 1.1538;
    font-weight: 600;
    border-radius: 2.5rem;
    text-align: center;
    color: #fff;
}

.g-contentcubes .cube-items-wrapper .cube-content-wrapper .item-title a.item-link {
    display: block;
    color: #020202;
}

a {
    color: #020202;
    transition: all 0.2s;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'portfolio'
                        ],
                        5 => [
                            'location' => '',
                            'inline' => '.ui-tabs-active .g-contenttabs-tab-wrapper-head {
    background: #020202;
}

.st-title h1{
     text-align: center;
    font-size: 4rem;
    margin: 0;
    padding: 0;
    font-family: Helvetica;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'skills'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => '',
                            'inline' => 'window.addEventListener(\'load\', () => {
    const introText = document.getElementById(\'introText\');
    const scrollText = document.getElementById(\'scrollText\');
    const outroText = document.getElementById(\'outroText\');

    // Initial animations
    introText.classList.add(\'fade-in\');
    scrollText.style.left = \'0%\';
    outroText.style.transform = \'translateY(0)\';
    outroText.style.opacity = \'1\';

    window.addEventListener(\'scroll\', () => {
        const scrollPosition = window.scrollY;
        const windowHeight = window.innerHeight;
        
        // Trigger reverse animations when scrolling down
        if (scrollPosition >= windowHeight / 2) {
            introText.style.opacity = \'0\';
            scrollText.style.left = \'-100%\';
            outroText.style.transform = \'translateY(100%)\';
            outroText.style.opacity = \'0\';
        } else {
            introText.style.opacity = \'1\';
            scrollText.style.left = \'0%\';
            outroText.style.transform = \'translateY(0)\';
            outroText.style.opacity = \'1\';
        }
    });
});
',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'animation'
                        ],
                        1 => [
                            'location' => '',
                            'inline' => 'document.addEventListener(\'DOMContentLoaded\', () => {
    const fpIntro = document.querySelector(\'.fp-intro\');
    
    function checkScroll() {
        const rect = fpIntro.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Check if the element is within the viewport
        if (rect.top < windowHeight && rect.bottom >= 0) {
            fpIntro.classList.add(\'in-view\');
            fpIntro.classList.remove(\'outro\');
        } else {
            fpIntro.classList.remove(\'in-view\');
            fpIntro.classList.add(\'outro\');
        }
    }

    window.addEventListener(\'scroll\', checkScroll);
    checkScroll(); // Initial check
});
',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'intro'
                        ],
                        2 => [
                            'location' => '',
                            'inline' => 'document.addEventListener(\'DOMContentLoaded\', () => {
    const title = document.querySelector(\'.ut-title\');
    const experience = document.querySelector(\'.experience\');

    const handleScroll = () => {
        const titlePosition = title.getBoundingClientRect();
        const experiencePosition = experience.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Check if title is in view
        if (titlePosition.top <= windowHeight && titlePosition.bottom >= 0) {
            title.classList.add(\'visible\');
            title.classList.remove(\'hidden\');
        } else {
            title.classList.add(\'hidden\');
            title.classList.remove(\'visible\');
        }

        // Check if experience is in view
        if (experiencePosition.top <= windowHeight && experiencePosition.bottom >= 0) {
            experience.classList.add(\'visible\');
            experience.classList.remove(\'hidden\');
        } else {
            experience.classList.add(\'hidden\');
            experience.classList.remove(\'visible\');
        }
    };

    window.addEventListener(\'scroll\', () => {
        requestAnimationFrame(handleScroll); // Smooth scrolling animation
    });

    // Initial check in case elements are in view on load
    handleScroll();
});
',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'experience'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
