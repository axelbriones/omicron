<?php
/**
 * Template Name: Testimonials Page
 *
 * @package Omicron
 */

get_header(); ?>

<section class="py-20 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Testimonials -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-medium text-lg">Testimonios</span>
            <h2 class="text-4xl font-light text-gray-900 mt-2 mb-4">
                Lo que dicen los profesionales
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                La confianza de los médicos y profesionales de la salud es nuestro mayor respaldo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <?php
            $testimonials = array(
                array(
                    'name'    => 'Dr. María González',
                    'position' => 'Directora Médica, Hospital Central',
                    'content' => 'Los productos de Laboratorio Omicron han demostrado una eficacia excepcional en nuestros pacientes. La calidad y consistencia son incomparables.',
                    'rating'  => 5,
                    'image'   => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                ),
                array(
                    'name'    => 'Dr. Carlos Mendoza',
                    'position' => 'Especialista en Medicina Interna',
                    'content' => 'Confío plenamente en Omicron para el tratamiento de mis pacientes. Su compromiso con la excelencia es evidente en cada producto.',
                    'rating'  => 5,
                    'image'   => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                ),
                array(
                    'name'    => 'Dra. Ana Rodríguez',
                    'position' => 'Farmacéutica Clínica',
                    'content' => 'Laboratorio Omicron representa lo mejor de la industria farmacéutica nacional. Su dedicación a la investigación es admirable.',
                    'rating'  => 5,
                    'image'   => 'https://images.unsplash.com/photo-1594824248077-b60d98479ba1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                ),
            );

            foreach ( $testimonials as $index => $testimonial ) :
                ?>
                <div class="bg-white p-8 shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-blue-600 mb-4"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 2v6c0 7 4 8 7 8Z"/><path d="M17 21c3 0 7-1 7-8V5c0-1.25-.75-2.017-2-2h-4c-1.25 0-2 .75-2 2v6c0 7 4 8 7 8Z"/></svg>

                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "<?php echo $testimonial['content']; ?>"
                    </p>

                    <div class="flex items-center mb-4">
                        <?php for ( $i = 0; $i < $testimonial['rating']; $i++ ) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-yellow-400"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <?php endfor; ?>
                    </div>

                    <div class="flex items-center">
                        <img
                            src="<?php echo $testimonial['image']; ?>"
                            alt="<?php echo $testimonial['name']; ?>"
                            class="w-12 h-12 rounded-full object-cover mr-4"
                        />
                        <div>
                            <div class="font-medium text-gray-900"><?php echo $testimonial['name']; ?></div>
                            <div class="text-sm text-gray-600"><?php echo $testimonial['position']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Certifications -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h3 class="text-3xl font-light text-gray-900 mb-4">
                Certificaciones y Reconocimientos
            </h3>
            <p class="text-lg text-gray-600">
                Avalados por las principales organizaciones de salud y calidad
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php
            $certifications = array(
                array(
                    'name'        => 'ISO 9001:2015',
                    'description' => 'Sistema de Gestión de Calidad',
                    'icon'        => '🏆',
                ),
                array(
                    'name'        => 'GMP',
                    'description' => 'Buenas Prácticas de Manufactura',
                    'icon'        => '✅',
                ),
                array(
                    'name'        => 'ANMAT',
                    'description' => 'Administración Nacional de Medicamentos',
                    'icon'        => '🔬',
                ),
                array(
                    'name'        => 'FDA',
                    'description' => 'Food and Drug Administration',
                    'icon'        => '🌟',
                ),
            );

            foreach ( $certifications as $index => $cert ) :
                ?>
                <div class="text-center p-6 bg-white shadow-sm border border-gray-100" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="text-4xl mb-3"><?php echo $cert['icon']; ?></div>
                    <h4 class="font-medium text-gray-900 mb-2"><?php echo $cert['name']; ?></h4>
                    <p class="text-sm text-gray-600"><?php echo $cert['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
