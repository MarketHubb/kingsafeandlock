<?php /* Template Name: Parent  Locksmith */
get_header(); ?>

<div class="custom-template custom-content">

        <!-- Banner -->
        <?php get_template_part('template-parts/global/content', 'banner'); ?>

        <!-- Reviews -->
        <?php get_template_part('template-parts/locksmith/content', 'reviews'); ?>

         <!-- Services -->
        <?php get_template_part('template-parts/locksmith/content'); ?>

    <!-- Content -->
    <div class="container content-section" id="locksmith-page">
        <div class="wrapper">

            <!-- Intro-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="font-weight-bolder">Houston's Fastest Locksmiths</h2>
                    <p class="lead">King Safe and Lock has the largest fleet of full-service locksmiths in the Houston area. We can tackle almost any job including access and lockouts, high security lock installation, key duplication and more. Whether you need a same day appointment or to schedule ahead, our team has the capacity, experience and professionalism to get the job done right.</p>
                </div>

                <?php
                if( have_rows('accreditations', 'option') ):
                    $c = '';
                    while ( have_rows('accreditations', 'option') ) : the_row();
                        $c .= '<div class="col-md-4 text-center">';
                        $c .= '<img src="' . get_sub_field('accreditation_logo', 'option') . '" class="accreditation-img"/>';
                        $c .= '<p class="lead font-weight-bold">' . get_sub_field('accreditation_name', 'option') . '</p>';
                        $c .= '</div>';
                    endwhile;
                    echo $c;
                endif;

                ?>

            </div>

            <!-- Services (Auto) -->

            <!-- Services (General) -->
            <div class="row align-items-center">
                <div class="col-md-6 h-100 px-sm-2 pe-md-3 order-md-last">
                    <h2>We We Do</h2>
                    <p class="lead">No matter the size, or the urgency of the job, our 24/7 Houston locksmiths can get the job done</p>
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2021/02/locksmith.jpg' ?>" alt="">
                </div>
                <div class="col-md-6 h-100 px-sm-2 pe-lg-5">
                    <ul class="list-group ms-2 list-group-flush ml-0">
                        <li class="list-group-item lead font-weight-bold">Commercial & Residential Lockouts</li>
                        <li class="list-group-item lead font-weight-bold">Lock Repair & Replace</li>
                        <li class="list-group-item lead font-weight-bold">Rekeying</li>
                        <li class="list-group-item lead font-weight-bold">Access Control Systems</li>
                        <li class="list-group-item lead font-weight-bold">Panic Devices</li>
                    </ul>
                </div>
            </div>

            <!-- Services (Rekeying) -->
            <div class="row align-items-center bg-light my-4 py-4">
                <div class="col-md-6 h-100 px-sm-2 pe-md-3">
                    <h2>Rekeying: Copy, Duplicating & Replacing</h2>
                    <p class="lead">Make the replacement today and never get locked out again</p>
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2021/02/Rekey-2.jpg' ?>" alt="">
                </div>
                <div class="col-md-6 h-100 px-sm-2 pe-lg-5">
                    <ul class="list-group ms-2 list-group-flush ml-0">
                        <li class="list-group-item bg-transparent lead font-weight-bold">If you have lost your house keys.</li>
                        <li class="list-group-item bg-transparent lead font-weight-bold">If your car keys have gone missing.</li>
                        <li class="list-group-item bg-transparent lead font-weight-bold">You are worried about a former employee.</li>
                        <li class="list-group-item bg-transparent lead font-weight-bold">You have moved into a new home or apartment.</li>
                        <li class="list-group-item bg-transparent lead font-weight-bold">You have had a personal breakup.</li>
                    </ul>
                </div>
            </div>

            <!-- Services (High Security Locks) -->
            <div class="row align-items-center">
                <div class="col-md-6 h-100 px-sm-2 pe-md-3 order-md-last">
                    <h2>High Security Locks: Professional Installation</h2>
                    <p class="lead">Truly protect your home or office with Medeco & Mut-T-Lock high-security locks.</p>
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2021/02/High-Security-copy.jpg' ?>" alt="">

                </div>
                <div class="col-md-6 h-100 px-sm-2  pe-lg-5">
                    <ul class="list-group ms-2 list-group-flush ml-0">
                        <li class="list-group-item lead font-weight-bold">Medeco, Mul-T-Lock and Tuff Strike </li>
                        <li class="list-group-item lead font-weight-bold">Prevent picking, drilling  & bumping</li>
                        <li class="list-group-item lead font-weight-bold">Advanced key control and access systems</li>
                        <li class="list-group-item lead font-weight-bold">The same brands used by the Houston Police and Fortune 500 Companies</li>
                        <li class="list-group-item lead font-weight-bold">Professionally installed by our licensed locksmiths</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

    <!-- Testimonials -->
    <?php get_template_part('template-parts/global/content', 'testimonials'); ?>

</div>

<?php get_footer(); ?>

