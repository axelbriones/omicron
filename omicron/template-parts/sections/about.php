<?php
/**
 * Template part for displaying the about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Omicron
 */

?>
<section id="empresa" class="py-20 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-16">
            <div class="relative" data-aos="fade-right">
                <div class="w-full h-96 flex items-center justify-center">
                    <img alt="Empresa" src="https://bbrion.es/wp-content/uploads/dr.webp" class="w-full h-full rounded-lg object-cover" />
                </div>
            </div>

            <div>
                <div class="mb-6">
                    <span class="text-blue-600 font-medium text-lg">La Empresa</span>
                    <h2 class="text-4xl font-light text-gray-900 mt-2 mb-6" data-aos="fade-left">
                        Nuestra misión es mejorar la calidad de vida de las personas
                    </h2>
                </div>

                <p class="text-gray-700 text-lg mb-6 leading-relaxed" data-aos="fade-up-left">
                    Desarrollando y elaborando productos medicinales con parámetros de calidad internacional.
                </p>

                <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up-left">
                    Laboratorio Omicron nace en el año 1954 conducido por profesionales de reconocida
                    trayectoria en la Industria Farmacéutica.
                </p>

                <p class="text-gray-600 mb-8 leading-relaxed" data-aos="fade-up-left">
                    Nuestra capacitación tecnológica y profesional permanente nos ha permitido desarrollar
                    nuevos productos ampliando así, de manera continua, nuestra gama de productos para
                    el cuidado de la salud.
                </p>
            </div>
        </div>

        <?php
        $stats = array(
            array(
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white mx-auto mb-3"><path d="M12 8V6a2 2 0 0 0-2-2H7.83a2 2 0 0 0-1.42.59L4 7l-1.41 1.41a2 2 0 0 0 0 2.82l5.66 5.66a2 2 0 0 0 2.82 0l5.66-5.66a2 2 0 0 0 0-2.82L13.41 4.59A2 2 0 0 0 12 4.17V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h2"/><path d="M12 12v4h4"/><path d="m16 12-4 4"/></svg>',
                'number' => '70+',
                'text' => 'Años de Experiencia',
            ),
            array(
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white mx-auto mb-3"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
                'number' => '500+',
                'text' => 'Profesionales',
            ),
            array(
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white mx-auto mb-3"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>',
                'number' => '25+',
                'text' => 'Países',
            ),
            array(
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white mx-auto mb-3"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                'number' => '100%',
                'text' => 'Calidad Garantizada',
            ),
        );
        ?>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php foreach ( $stats as $index => $stat ) : ?>
                <div data-aos="flip-up" data-aos-delay="<?php echo $index * 100; ?>" class="text-center p-6 bg-white/10 backdrop-blur-sm bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 p-3 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
                    <?php echo $stat['icon']; ?>
                    <div class="text-3xl font-bold text-white mb-2"><?php echo $stat['number']; ?></div>
                    <div class="text-sm text-white font-medium"><?php echo $stat['text']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
