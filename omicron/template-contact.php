<?php
/**
 * Template Name: Contact Page
 *
 * @package Omicron
 */

get_header(); ?>

<section
    id="contacto"
    class="py-20 bg-gradient-to-br from-blue-900 to-purple-900 relative overflow-hidden"
    data-aos="fade-up"
>
    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-pink-400 font-semibold text-lg">Contacto</span>
            <h2 class="text-4xl font-bold text-white mt-2 mb-4">
                ¿Necesitas ayuda?
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Estamos aquí para responder tus consultas y brindarte la mejor atención
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Info -->
            <div class="lg:col-span-1" data-aos="fade-right">
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-r from-pink-500 to-purple-600 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Teléfono</h4>
                            <p class="text-gray-300">+54 11 4555-0123</p>
                            <p class="text-gray-300">+54 11 4555-0124</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-r from-pink-500 to-purple-600 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Email</h4>
                            <p class="text-gray-300">info@omicron.com.ar</p>
                            <p class="text-gray-300">ventas@omicron.com.ar</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-r from-pink-500 to-purple-600 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Dirección</h4>
                            <p class="text-gray-300">Av. Corrientes 1234</p>
                            <p class="text-gray-300">Buenos Aires, Argentina</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2" data-aos="fade-left">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-2xl">
                    <?php echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
