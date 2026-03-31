<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramya Sri | Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <script src="script.js"></script>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <div class="logo">KST RAMYA SRI</div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container">
    <section id="about">
        <div class="about-card">
            <div style="text-align: center;">
                <img src="images/me.png" alt="Ramya Sri" class="profile-img">
                <div style="margin-top: 10px;">
                    <a href="https://github.com/KSTRamyaSri" target="_blank" style="margin: 0 8px; color: var(--text-muted);"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/kstramyasri" target="_blank" style="margin: 0 8px; color: var(--text-muted);"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div>
                <h4 style="color: var(--primary-blue); font-size: 0.75rem; text-transform: uppercase;">Full Stack Developer</h4>
                <h2 style="font-size: 1.8rem; margin: 5px 0;">Ramya Sri K.S.T.</h2>
                <p style="font-size: 0.9rem; color: var(--text-muted);">
                    CSE Student at Pragati Engineering College. Diploma Graduate with <strong>93%</strong>. Expert in Python, React, and Django. Focused on building high-performance web applications.
                </p>
            </div>
        </div>
    </section>

    <section id="skills">
    <h2 class="section-heading">Technical Expertise</h2>
    <div class="skills-grid">
        <?php
        $skills = [
            ['name' => 'Python', 'icon' => 'devicon-python-plain colored', 'r' => 5],
            ['name' => 'Java', 'icon' => 'devicon-java-plain colored', 'r' => 4],
            ['name' => 'C', 'icon' => 'devicon-c-plain colored', 'r' => 4],
            ['name' => 'C++', 'icon' => 'devicon-cplusplus-plain colored', 'r' => 4],
            ['name' => 'HTML5', 'icon' => 'devicon-html5-plain colored', 'r' => 5],
            ['name' => 'CSS3', 'icon' => 'devicon-css3-plain colored', 'r' => 4],
            ['name' => 'React JS', 'icon' => 'devicon-react-original colored', 'r' => 4],
            ['name' => 'Django', 'icon' => 'devicon-django-plain colored', 'r' => 4],
            ['name' => 'SQL', 'icon' => 'devicon-mysql-plain colored', 'r' => 4],
            ['name' => 'Git', 'icon' => 'devicon-git-plain colored', 'r' => 5]
        ];

        foreach ($skills as $s) {
            echo "<div class='skill-card'>
                    <i class='{$s['icon']}'></i>
                    <h4>{$s['name']}</h4>
                    <div class='stars-container'>"; 
                    for($i=1; $i<=5; $i++) {
                        if($i <= $s['r']) {
                            echo "<i class='fas fa-star'></i>";
                        } else {
                            echo "<i class='far fa-star star-empty'></i>";
                        }
                    }
            echo "</div></div>";
        }
        ?>
    </div>
</section>

    <section id="projects">
        <h2 class="section-heading">Projects</h2>
        <div class="skills-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <?php
            $proj_res = mysqli_query($conn, "SELECT * FROM projects");
            while($proj = mysqli_fetch_assoc($proj_res)) {
                echo "<div class='proj-card'>
                        <img src='images/{$proj['image_url']}'>
                        <div class='proj-details'>
                            <h3 style='font-size: 1rem;'>{$proj['title']}</h3>
                            <p style='font-size: 0.8rem;'>{$proj['description']}</p>
                        </div>
                      </div>";
            }
            ?>
        </div>
    </section>

    <section id="contact" style="border:none;">
        <h2 class="section-heading">Get In Touch</h2>
        <div class="contact-form">
            <form action="send_message.php" method="POST" id="mainContactForm">
                <div class="form-row">
                    <div class="input-group">
                        <label style="font-size: 0.8rem;">Name</label>
                        <input type="text" name="name" class="form-input" required>
                    </div>
                    <div class="input-group">
                        <label style="font-size: 0.8rem;">Email</label>
                        <input type="email" name="email" class="form-input" required>
                    </div>
                </div>
                <div class="input-group">
                    <label style="font-size: 0.8rem;">Subject</label>
                    <input type="text" name="subject" class="form-input" required>
                </div>
                <div class="input-group">
                    <label style="font-size: 0.8rem;">Message</label>
                    <textarea name="message" rows="4" class="form-input" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>
</div>

<footer>&copy; 2026 K.S.T. Ramya Sri.</footer>

<script>
    // 1. Smooth Scroll
    
</script>

</body>
</html>