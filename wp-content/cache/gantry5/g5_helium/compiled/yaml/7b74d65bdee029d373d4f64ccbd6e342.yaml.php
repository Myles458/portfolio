<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\xampp\\htdocs\\portfolio/wp-content/themes/g5_helium/custom/config/home_-_particles/layout.yaml',
    'modified' => 1723727918,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1723703102
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'custom-7796'
                ]
            ],
            '/intro/' => [
                0 => [
                    0 => 'custom-5807'
                ]
            ],
            '/features/' => [
                0 => [
                    0 => 'custom-7714'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'custom-3686'
                ],
                1 => [
                    0 => 'contenttabs-3854'
                ]
            ],
            '/above/' => [
                0 => [
                    0 => 'custom-7590'
                ],
                1 => [
                    0 => 'contentcubes-7850'
                ]
            ],
            '/testimonials/' => [
                0 => [
                    0 => 'custom-7658'
                ]
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 75' => [
                            
                        ]
                    ],
                    1 => [
                        'sidebar 25' => [
                            
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-flushed'
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'custom-7796' => [
                'title' => 'Header',
                'attributes' => [
                    'html' => '<div class="con-container">
        <div class="scroll-container">
            <div class="a-scroll-content fade-in" id="introText"> Hi I am </div>
            <div class="scroll-content moving-content" id="scrollText">
                Myles Bonnin E. Patungan
            </div>
            <div class="b-scroll-content slide-up b" id="outroText"> An aspiring Software Developer </div>
        </div>
    </div>'
                ]
            ],
            'custom-5807' => [
                'title' => 'Intro',
                'attributes' => [
                    'html' => '<div class="fp-intro">
        <h2 class="g-title">Who Am I?</h2>
        <div class="intro-content">
            <p>I am a recent graduate of Our Lady of Fatima University - Antipolo, holding a Bachelor\'s Degree in Information Technology. I am eager to leverage my education to enhance my programming skills and gain practical experience in a dynamic environment. My commitment to continuous learning and adaptability to new technologies will enable me to contribute effectively to organizational goals and support innovation within the team.</p>
        </div>
    </div>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-7714' => [
                'title' => 'Experience',
                'attributes' => [
                    'html' => '<div class="exp-container">
<div class="ut-title">
        <h1>Experience</h1>
    </div>
    <div class="experience">
        <div class="experience-header">
            <div class="title">
                <h3>Internship (Software Engineer)</h3>
                <p>Autumn Global Outsourcing Inc.</p>
            </div>
            <div class="date">
                <p>FEB 2024 - MAY 2024</p>
            </div>
        </div>
        <div class="experience-details">
            <ul>
                <li>Web Development (WordPress)</li>
                <li>Designed and Developed Website</li>
            </ul>
        </div>
    </div>
</div>'
                ]
            ],
            'custom-3686' => [
                'title' => 'Skills',
                'attributes' => [
                    'html' => '<div class="st-title">
        <h1>Skills</h1>
</div>'
                ]
            ],
            'contenttabs-3854' => [
                'title' => 'Content Tabs',
                'attributes' => [
                    'items' => [
                        0 => [
                            'content' => '<p> Developed a comprehensive website using HTML, CSS, and JavaScript (JQuery) for the front-end. Implemented backend functionality using PHP, integrating MySQL as the database. Designed and implemented user authentication, product management, and payment integration features. </p>
<div class="g-grid size-100">
        <div class="g-block">
            <h4>Web Development.</h4>
            <ul>
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>WordPress</li>
            </ul>
        </div>
        <div class="g-block">
            <h4>Databases.</h4>
            <ul>
                <li>MySQL</li>
                <li>Oracle</li>
                <li>SQL</li>
            </ul>
        </div>
        <div class="g-block">
            <h4>Programming Languages.</h4>
            <ul>
                <li>C Programming</li>
                <li>Java</li>
                <li>Python</li>
            </ul>
        </div>
    </div>',
                            'title' => 'Technical Skills'
                        ],
                        1 => [
                            'content' => '<p>Motivated and detail-oriented IT graduate with strong problem-solving skills and a passion for continuous learning. Excellent team player with effective communication abilities.
</p>
<h4>Soft Skills.</h4>
<div class="g-grid size-100">
    <div class="g-block size-50">
         <ul>
                <li>Teachable</li>
                <li>Creative Thinker</li>
                <li>Adaptability</li>
                <li>Collaborative Team Player</li>
                <li>Strong Interpersonal Skills</li>
            </ul>
    </div>
</div>',
                            'title' => 'Soft Skills'
                        ]
                    ]
                ]
            ],
            'custom-7590' => [
                'title' => 'Portfolio',
                'attributes' => [
                    'html' => ' <div class="st-title"> <h1>Portfolio</h1>
 </div>'
                ]
            ],
            'contentcubes-7850' => [
                'title' => 'Content Cubes',
                'attributes' => [
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://2024/08/Thumbnail-3.png',
                            'imageposition' => 'left',
                            'label' => 'WordPress Website',
                            'title' => 'Grey\'s Pet Hotel',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Graphic Design'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Website Creation'
                                ]
                            ],
                            'link' => 'https://greyspethotel.com',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Grey\'s Pet Hotel'
                        ],
                        1 => [
                            'image' => 'gantry-media://2024/08/Thumbnail-1.png',
                            'imageposition' => 'right',
                            'label' => 'WordPress Website',
                            'title' => 'Website Design# 1',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Graphic Design'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Website Creation'
                                ]
                            ],
                            'link' => 'http://localhost/portfolio/wp-content/uploads/2024/08/Assignment-3.png',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Web 1'
                        ],
                        2 => [
                            'image' => 'gantry-media://2024/08/Thumbnail-2.png',
                            'imageposition' => 'left',
                            'label' => 'WordPress Website',
                            'title' => 'Website Design# 2',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Graphic Design'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Website Creation'
                                ]
                            ],
                            'link' => 'http://localhost/portfolio/wp-content/uploads/2024/08/Assignment-4.png',
                            'linktext' => '&rarr;',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Item 2'
                        ]
                    ]
                ]
            ],
            'custom-7658' => [
                'title' => 'Customer Testimonials',
                'attributes' => [
                    'html' => '<div class="fp-testimonials">
    <blockquote>
        <p class="h3">"The end is just the beginning, in hearts that keep on spinning."</p>
        <footer>Myles Bonnin</footer>
    </blockquote>
</div>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
