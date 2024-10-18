<?php include 'header.php'; ?>
<div class="text-center mb-5">
    <h1 class="display-4 text-primary">Work Experience</h1>
    <hr class="mb-4">

</div>
<div class="container">
    <div class="row">
    
        <div class="col-12">
            <ul class="timeline">
                <!-- Software Developer - Shuru Advisory Pvt Ltd -->
                <li class="timeline-item mb-5">
                    <span class="timeline-date">May 2024 - Aug 2024</span>
                    <h5 class="text-primary mb-1">Software Developer - Shuru Advisory Pvt Ltd</h5>
                    <p>Developed and optimized a financial module for managing startup finances and investor relations using the latest PHP version. Automated investment workflows, ensured data security, and leveraged modern PHP practices to enhance system performance and scalability.</p>
                </li>

                <!-- Associate IT - Zydus Hospitals -->
                <li class="timeline-item mb-5">
                    <span class="timeline-date">Nov 2022 - Apr 2024</span>
                    <h5 class="text-primary mb-1">Associate IT - Zydus Hospitals</h5>
                    <p>Developed and maintained EMR systems for paperless hospital management. Designed and implemented web-based applications using PHP, MySQL, and JavaScript, including a Purchase Dashboard and an in-house feedback portal. Worked on task schedulers and cron jobs for automation.</p>
                </li>

                <!-- Software Developer (PHP) - Spero Healthcare -->
                <li class="timeline-item mb-5">
                    <span class="timeline-date">Jun 2021 - Nov 2022</span>
                    <h5 class="text-primary mb-1">Software Developer (PHP) - Spero Healthcare</h5>
                    <p>Developed and optimized multiple web-based applications using CodeIgniter, including an online doctor consultation system and a project for the tribal development department used by Pune Zilla Parishad. Worked on the MHEMS application for ambulance dispatch.</p>
                </li>

                <!-- Sales Manager - Satmat Group -->
                <li class="timeline-item mb-5">
                    <span class="timeline-date">Sep 2020 - Jun 2021</span>
                    <h5 class="text-primary mb-1">Sales Manager - Satmat Group</h5>
                    <p>Managed project queries from clients and coordinated with the development team to ensure timely delivery of IT projects while handling sales operations.</p>
                </li>

                <!-- Software Developer Internship - Daily Needs Online Services -->
                <li class="timeline-item mb-5">
                    <span class="timeline-date">Jan 2019 - Jun 2019</span>
                    <h5 class="text-primary mb-1">Software Developer Internship - Daily Needs Online Services</h5>
                    <p>Worked on WordPress development projects, including requirement gathering, analysis, and creating ER models for development purposes.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<style>
    .timeline {
        list-style: none;
        padding: 0;
    }

    .timeline-item {
        position: relative;
        padding-left: 40px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 10px;
        top: 0;
        height: 100%;
        width: 2px;
        background-color: #007bff; /* Adjust color as needed */
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        background-color: #007bff; /* Adjust color as needed */
    }

    .timeline-date {
        font-weight: bold;
        color: #007bff; /* Adjust color as needed */
    }
</style>
