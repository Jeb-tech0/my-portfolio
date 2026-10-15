<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <section class="project-view-banner">
        <div class="container">
            <nav aria-label="breadcrumb" class="project-breadcrumb">
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Projects</li>
                </ol>
            </nav>

        </div>


        <div class="project-banner-content">
                <span class="section-kicker">Featured Project</span>
                <h1>Business Dashboard</h1>
                <p>
                    A responsive analytics platform designed to help teams monitor performance, track KPIs,
                    and make faster business decisions through clean data visualization.
                </p>
            </div>

    </section>

    <section class="project-gallery-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" alt="Project dashboard screenshot" class="project-gallery-image" />
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" alt="Project data analytics screenshot" class="project-gallery-image" />
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1516321165247-4aa89a48be28?auto=format&fit=crop&w=1200&q=80" alt="Project overview screenshot" class="project-gallery-image" />
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="Project team collaboration screenshot" class="project-gallery-image" />
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>