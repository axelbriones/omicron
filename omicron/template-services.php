<?php
/**
 * Template Name: Services Page
 *
 * @package Omicron
 */

get_header(); ?>

<section
    id="servicios"
    class="py-20 relative bg-cover bg-center bg-no-repeat"
    style="background-image: url('https://medizin.thememove.com/wp-content/uploads/2021/02/h7-16.jpg');"
    data-aos="fade-up"
>
    <!-- Overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-blue-900/90"></div>

    <!-- Iconos decorativos fusionados con el degradado -->
    <div
        style="background-image: url('https://labstica.peacefulqode.co.in/wp-content/uploads/2025/03/1.png'); filter: brightness(1.2);"
        class="absolute inset-0 opacity-10 bg-contain bg-center mix-blend-overlay"
    ></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-blue-300 font-medium text-lg">Nuestros Servicios</span>
            <h2 class="text-4xl font-light text-white mt-2 mb-4" data-aos="fade-left">
                Excelencia en Cada Proceso
            </h2>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto" data-aos="fade-up">
                Ofrecemos servicios integrales que abarcan desde la investigación hasta la distribución,
                manteniendo los más altos estándares de calidad farmacéutica.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = array(
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M12 8V6a2 2 0 0 0-2-2H7.83a2 2 0 0 0-1.42.59L4 7l-1.41 1.41a2 2 0 0 0 0 2.82l5.66 5.66a2 2 0 0 0 2.82 0l5.66-5.66a2 2 0 0 0 0-2.82L13.41 4.59A2 2 0 0 0 12 4.17V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h2"/><path d="M12 12v4h4"/><path d="m16 12-4 4"/></svg>',
                    'title'       => 'Investigación y Desarrollo',
                    'description' => 'Innovación constante en formulaciones farmacéuticas con los más altos estándares de calidad.',
                ),
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>',
                    'title'       => 'Control de Calidad',
                    'description' => 'Rigurosos procesos de control que garantizan la eficacia y seguridad de nuestros productos.',
                ),
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M5 18H3c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3"/><path d="M10 6h4"/><path d="M10 18h4"/><path d="M10 12h4"/><path d="m7.81 12-2.7 2.7a2.83 2.83 0 0 0 0 4L7.81 22"/><path d="m16.19 12 2.7 2.7a2.83 2.83 0 0 1 0 4L16.19 22"/></svg>',
                    'title'       => 'Distribución Nacional',
                    'description' => 'Red de distribución que llega a todo el territorio nacional con tiempos de entrega optimizados.',
                ),
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.82 2.94 0l.02-.02.02-.02c.82-.82.82-2.13 0-2.94L12 5Z"/></svg>',
                    'title'       => 'Consultoría Médica',
                    'description' => 'Asesoramiento especializado para profesionales de la salud sobre nuestros productos.',
                ),
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="m9 16 2 2 4-4"/></svg>',
                    'title'       => 'Farmacovigilancia',
                    'description' => 'Monitoreo continuo de la seguridad y efectividad de nuestros medicamentos.',
                ),
                array(
                    'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white"><path d="M12 8V6a2 2 0 0 0-2-2H7.83a2 2 0 0 0-1.42.59L4 7l-1.41 1.41a2 2 0 0 0 0 2.82l5.66 5.66a2 2 0 0 0 2.82 0l5.66-5.66a2 2 0 0 0 0-2.82L13.41 4.59A2 2 0 0 0 12 4.17V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h2"/><path d="M12 12v4h4"/><path d="m16 12-4 4"/></svg>',
                    'title'       => 'Certificación ISO',
                    'description' => 'Cumplimiento de estándares internacionales de calidad ISO 9001 y buenas prácticas de manufactura.',
                ),
            );

            foreach ( $services as $index => $service ) :
                ?>
                <div
                    class="bg-white/10 backdrop-blur-sm p-8 hover:bg-white/20 transition-all duration-300 border border-white/20 rounded-lg"
                    data-aos="flip-up"
                    data-aos-delay="<?php echo $index * 100; ?>"
                >
                    <div class="w-16 h-16 bg-gradient-to-r from-gray-900 to-blue-900 flex items-center justify-center mb-6 rounded-lg">
                        <?php echo $service['icon']; ?>
                    </div>

                    <h3 class="text-xl font-medium text-white mb-4">
                        <?php echo $service['title']; ?>
                    </h3>

                    <p class="text-gray-200 leading-relaxed">
                        <?php echo $service['description']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
