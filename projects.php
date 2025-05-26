<?php include 'includes/header.php'; ?>

<section class="section projects-hero">
    <div class="container">
        <h1>My Projects</h1>
        <p class="lead">A collection of my recent work and personal projects</p>
    </div>
</section>

<section class="section projects-grid">
    <div class="container">
        <div class="filter-buttons">
            <button class="button active" data-filter="all">All</button>
            <button class="button" data-filter="web">Web Apps</button>
            <button class="button" data-filter="mobile">Mobile</button>
            <button class="button" data-filter="design">Design</button>
        </div>

        <div class="projects-container grid">
            <!-- Project 1 -->
            <div class="card project-card" id="project1" data-category="web">
                <div class="project-image">
                    <img src="images/project1.jpg" alt="E-commerce Platform">
                </div>
                <div class="project-content">
                    <h3>E-commerce Platform</h3>
                    <p class="project-tags">React.js, Node.js, MongoDB</p>
                    <p class="project-description">
                        A full-featured online store with product management, shopping cart, and secure payment integration.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/johndoe/ecommerce" class="button" target="_blank">View Code</a>
                        <a href="https://ecommerce-demo.com" class="button" target="_blank">Live Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="card project-card" id="project2" data-category="web">
                <div class="project-image">
                    <img src="images/project2.jpg" alt="Task Management App">
                </div>
                <div class="project-content">
                    <h3>Task Management App</h3>
                    <p class="project-tags">Vue.js, Firebase, Vuex</p>
                    <p class="project-description">
                        A collaborative task management tool with real-time updates and team features.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/johndoe/taskmanager" class="button" target="_blank">View Code</a>
                        <a href="https://task-app-demo.com" class="button" target="_blank">Live Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="card project-card" data-category="mobile">
                <div class="project-image">
                    <img src="images/project3.jpg" alt="Fitness Tracking App">
                </div>
                <div class="project-content">
                    <h3>Fitness Tracking App</h3>
                    <p class="project-tags">React Native, Firebase</p>
                    <p class="project-description">
                        A mobile app for tracking workouts and monitoring fitness progress.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/johndoe/fitness-app" class="button" target="_blank">View Code</a>
                        <a href="https://fitness-app.demo" class="button" target="_blank">Live Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="card project-card" data-category="design">
                <div class="project-image">
                    <img src="images/project4.jpg" alt="Portfolio Website">
                </div>
                <div class="project-content">
                    <h3>Portfolio Website</h3>
                    <p class="project-tags">HTML5, CSS3, JavaScript</p>
                    <p class="project-description">
                        A responsive portfolio website with modern design principles and animations.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/johndoe/portfolio" class="button" target="_blank">View Code</a>
                        <a href="https://johndoe.com" class="button" target="_blank">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section github-activity">
    <div class="container">
        <h2 class="section-title">GitHub Activity</h2>
        <div class="github-calendar">
            <!-- GitHub activity calendar will be loaded here via JavaScript -->
            <div id="github-graph"></div>
        </div>
        <div class="text-center">
            <a href="https://github.com/johndoe" class="button" target="_blank">View More on GitHub</a>
        </div>
    </div>
</section>

<script src="https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/github-calendar@latest/dist/github-calendar-responsive.css" />

<script>
    // Initialize GitHub Calendar
    GitHubCalendar("#github-graph", "johndoe", { responsive: true });

    // Project filtering
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-buttons .button');
        const projects = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filter projects
                projects.forEach(project => {
                    if (filter === 'all' || project.dataset.category === filter) {
                        project.style.display = 'block';
                    } else {
                        project.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?> 