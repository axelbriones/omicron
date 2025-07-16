<?php
/**
 * Template Name: Products Navigation Page
 *
 * @package Omicron
 */

get_header(); ?>

<section data-aos="fade-up" class="py-20 bg-gray-50 rounded-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl font-light text-gray-900 mb-4">
                Productos
            </h2>
            <p class="text-gray-600 text-lg">
                Explora nuestros productos farmacéuticos organizados de diferentes maneras para facilitar tu búsqueda
            </p>
        </div>
    </div>

    <div class="max-w-10xl mx-auto px-0 lg:px-0 sm:px-0 rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 rounded-lg">
            <?php
            $sections = array(
                array(
                    'title'       => 'Alfabéticamente',
                    'description' => 'Productos en orden alfabético',
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16 mb-6"><line x1="8" x2="21" y1="6" y2="6"/><line x1="8" x2="21" y1="12" y2="12"/><line x1="8" x2="21" y1="18" y2="18"/><line x1="3" x2="3.01" y1="6" y2="6"/><line x1="3" x2="3.01" y1="12" y2="12"/><line x1="3" x2="3.01" y1="18" y2="18"/></svg>',
                    'link'        => '/productos/alfabetico',
                    'color'       => 'bg-[#036]',
                ),
                array(
                    'title'       => 'Vademécum',
                    'description' => 'Archivo de productos con filtros',
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16 mb-6"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>',
                    'link'        => '/productos/vademecum',
                    'color'       => 'bg-gradient-to-r from-[#036] to-[#8b0d80]',
                ),
                array(
                    'title'       => 'Principio Activo',
                    'description' => 'Productos por subcategorías',
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16 mb-6"><path d="m12 2-7.5 4.5v9l7.5 4.5 7.5-4.5v-9L12 2Z"/><path d="m12 2-7.5 4.5v9l7.5 4.5 7.5-4.5v-9L12 2Z"/><path d="M2.5 6.5 12 12l9.5-5.5"/><path d="M12 22V12"/></svg>',
                    'link'        => '/productos/principio-activo',
                    'color'       => 'bg-[#c2119f]',
                ),
            );

            foreach ( $sections as $index => $section ) :
                ?>
                <a href="<?php echo esc_url( home_url( $section['link'] ) ); ?>" class="group" data-aos="flip-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="<?php echo $section['color']; ?> hover:scale-105 transition-all duration-300 p-12 shadow-sm border border-gray-100 hover:shadow-md text-white h-[450px] flex flex-col justify-center items-center text-center">
                        <?php echo $section['icon']; ?>
                        <h3 class="text-2xl font-semibold mb-4"><?php echo $section['title']; ?></h3>
                        <p class="text-white/90 text-lg"><?php echo $section['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
