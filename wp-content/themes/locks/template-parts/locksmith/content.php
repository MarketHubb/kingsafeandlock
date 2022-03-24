<div class="section">
<div class="container">

    <!-- Overview / Callout -->
    <div class="row content-section justify-content-center">
        <div class="col-md-10 text-center">
            <h2 class="fw-bold text-center">Locksmith services you can count on</h2>
            <p class="lead text-center">No matter your security needs, the professionals from King Safe & Lock can help. As soon as you notice a problem — lost keys, stuck locks, or even broken keys — you can trust us to respond quickly and fix the problem just as fast.</p>
            <?php 
            if( have_rows('services') ):
                $a = '<div class="row">';
                while ( have_rows('services') ) : the_row();
                    $a .= '<div class="col-6 col-md-3 my-3 text-center">';
                    $a .= '<div class="border border-1 rounded shadow-sm mx-2 px-2 bg-light-blue-opacity h-100">';
                    $a .= '<img src="' . get_sub_field('image') . '" />';
                    $a .= '<h3 class="fw-bold">' . get_sub_field('heading') . '</h3>';
                    $a .= '<p class="lead">' . get_sub_field('description') . '</p>';
                    $a .= '</div></div>';
                endwhile;
                $a .= '</div>';
                echo $a;
            endif;
            ?>
        </div>
    </div>
</div>
</div>
