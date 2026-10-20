<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>

<main>
    
    <section id="home" class="hero-section">
        <div class="hero-slides" aria-hidden="true">
            <div class="hero-slide slide-1"></div>
            <div class="hero-slide slide-2"></div>
            <div class="hero-slide slide-3"></div>
        </div>

        <div class="container hero-content">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="hero-portrait">
                        <img src="assets/images/jeb_dev_profile.png" alt="Portfolio profile image" />
                    </div>
                </div>

                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="hero-copy">
                        <span class="mini-badge"><i class="bi bi-check-circle-fill"></i> Available for projects</span>
                        <h1>
                            I am a <span id="roleText" class="role">Web Developer</span>
                        </h1>
                        <p>
                            I design elegant websites, build reliable digital experiences, and solve technical challenges with creativity and precision.
                        </p>

                        <div class="cta-group">
                            <a href="#contact" class="btn btn-light">
                                Contact Me <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="mailto:jibuinemmanuelb@gmail.com" class="btn btn-outline-light">
                                <i class="bi bi-envelope"></i> Email Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="about-photo-wrap">
                        <img src="assets/images/about1.jpeg" alt="About me" />
                    </div>
                </div>

                <div class="col-lg-7">
                    <span class="section-kicker">About Me</span>
                    <h2>Focused on building smart digital solutions with a strong foundation in technology and design.</h2>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="info-card">
                                <h3>Professional Bio</h3>
                                <p>
                                    I am a multidisciplinary technology professional with experience in web development, graphic design,
                                    and networking support. Over the years, I have helped clients and businesses build digital experiences,
                                    solve technical issues, and improve their online presence through reliable and creative solutions.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-card">
                                <h3>Work History</h3>
                                <ul>
                                    <li><strong>Web Developer</strong> — Freelance / Client Projects (2022 – Present)</li>
                                    <li><strong>Graphic Designer</strong> — Creative Digital Services (2021 – 2023)</li>
                                    <li><strong>IT Support / Networking Assistant</strong> — Technical Support Roles (2019 – 2022)</li>
                                </ul>

                                <h3 class="mt-5">Work History</h3>
                                <ul>
                                    <li><strong>Web Developer</strong> — Freelance / Client Projects (2022 – Present)</li>
                                    <li><strong>Graphic Designer</strong> — Creative Digital Services (2021 – 2023)</li>
                                    <li><strong>IT Support / Networking Assistant</strong> — Technical Support Roles (2019 – 2022)</li>
                                </ul>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="info-card">
                                <h3>Skills and Expertise</h3>
                                <ul>
                                    <li>HTML, CSS, PHP, JavaScript</li>
                                    <li>Responsive Website Design</li>
                                    <li>Graphic Design and Branding</li>
                                    <li>Network Troubleshooting and Installation</li>
                                    <li>UI/UX Thinking and User-Centered Design</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-card">
                                <h3>Education and Certifications</h3>
                                <ul>
                                    <li>Bachelor's / Diploma in Information Technology or related field</li>
                                    <li>Web Development and Design Training</li>
                                    <li>Networking and Computer Support Courses</li>
                                    <li>Professional certificates in digital and IT systems</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="assets/jibuin-emmanuel.pdf" class="btn btn-primary rounded-pill px-4" download>
                            <i class="bi bi-download me-2"></i>Download My Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-kicker">Projects</span>
                <h2>Recent Work</h2>
                <p class="projects-intro">A collection of digital solutions built with creativity, code, and a focus on results.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80" alt="Project 1" />
                        <div class="project-body">
                            <span class="project-tag">Web App</span>
                            <h3>Business Dashboard</h3>
                            <p>A responsive analytics dashboard for tracking sales, performance, and customer engagement.</p>
                            <a href="view_project.php?id=1" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80" alt="Project 2" />
                        <div class="project-body">
                            <span class="project-tag">E-commerce</span>
                            <h3>Brand Storefront</h3>
                            <p>An online shopping experience with product discovery, clean UX, and conversion-focused design.</p>
                            <a href="view_project.php?id=2" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="Project 3" />
                        <div class="project-body">
                            <span class="project-tag">Portfolio</span>
                            <h3>Creative Portfolio</h3>
                            <p>A personal portfolio platform designed to showcase visual work and client case studies elegantly.</p>
                            <a href="view_project.php?id=3" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80" alt="Project 4" />
                        <div class="project-body">
                            <span class="project-tag">SaaS</span>
                            <h3>Client Portal</h3>
                            <p>A streamlined customer portal with user access, reports, and structured task tracking.</p>
                            <a href="view_project.php?id=4" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80" alt="Project 5" />
                        <div class="project-body">
                            <span class="project-tag">UI/UX</span>
                            <h3>Mobile Interface</h3>
                            <p>A clean mobile-first interface concept optimized for usability and accessibility across devices.</p>
                            <a href="view_project.php?id=5" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80" alt="Project 6" />
                        <div class="project-body">
                            <span class="project-tag">System</span>
                            <h3>Network Monitor</h3>
                            <p>A monitoring dashboard that visualizes traffic, system health, and device performance in real time.</p>
                            <a href="view_project.php?id=6" class="btn btn-primary btn-sm">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-kicker">Services</span>
                <h2>What I Do</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-code-slash"></i></div>
                        <h3>Web Development</h3>
                        <p>Custom websites and web applications built for performance, responsiveness, and business growth.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-palette"></i></div>
                        <h3>Graphic Designing</h3>
                        <p>Visual designs, branding elements, and creative assets tailored to elevate your online presence.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-layout-text-window"></i></div>
                        <h3>UI/UX</h3>
                        <span class="service-badge">Upcoming</span>
                        <p>User-centered interfaces and seamless experiences planned for digital products and modern brands.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-router"></i></div>
                        <h3>Networking Diagnostic</h3>
                        <p>Network health checks, troubleshooting, and diagnostics to keep systems stable and efficient.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-hdd-network"></i></div>
                        <h3>Networking Installation</h3>
                        <p>Setup and installation of network systems and connectivity solutions for reliable infrastructure.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-window-fullscreen"></i></div>
                        <h3>Web Design</h3>
                        <p>Modern, attractive, and responsive website designs focused on usability and brand identity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-kicker">Contact</span>
                <h2>Let’s work together</h2>
                <p class="contact-intro">Have a project or question? Send me a message and I’ll get back to you.</p>
            </div>

            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <div class="contact-details">
                        <h3>My Contact details</h3>
                        <p>Use the details below or send me a message through the form.</p>

                        <div class="contact-detail-row">
                            <span class="contact-detail-icon"><i class="bi bi-geo-alt"></i></span>
                            <div>
                                <span class="contact-detail-label">Location</span>
                                <p>Cameroon, Douala Bonaberi</p>
                            </div>
                        </div>

                        <div class="contact-detail-row">
                            <span class="contact-detail-icon"><i class="bi bi-telephone"></i></span>
                            <div>
                                <span class="contact-detail-label">Phone</span>
                                <p>(+237) 652 280 826 / 621 740 776</p>
                            </div>
                        </div>

                        <div class="contact-detail-row">
                            <span class="contact-detail-icon"><i class="bi bi-envelope"></i></span>
                            <div>
                                <span class="contact-detail-label">Email</span>
                                <a href="mailto:hello@yourportfolio.com">jibuinemmanuelb@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="https://formspree.io/f/xppqdzrw" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="contactName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="contactName" name="name" autocomplete="name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label">Contact</label>
                                <input type="tel" class="form-control" id="contactPhone" name="contact" autocomplete="tel" placeholder="Your phone number" required>
                            </div>
                            <div class="col-12">
                                <label for="contactEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="contactEmail" name="email" autocomplete="email" placeholder="you@example.com" required>
                            </div>
                            <div class="col-12">
                                <label for="contactMessage" class="form-label">Message</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Tell me a little about what you need" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
                                    Send Message <i class="bi bi-send ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



</main>

<?php include 'includes/footer.php'; ?>