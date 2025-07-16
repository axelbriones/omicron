</div><!-- #content -->

        <footer class="bg-gradient-to-r from-gray-900 to-blue-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div class="col-span-1 md:col-span-2">
                        <img alt="Laboratorio Omicron" src="https://omicron.bbrion.es/LogoOmicron.webp" class="h-12 w-auto mb-6 object-contain" />
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Desde 1954, Laboratorio Omicron se dedica a desarrollar y elaborar productos
                            medicinales con parámetros de calidad internacional, mejorando la calidad de
                            vida de las personas.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-6">Enlaces Rápidos</h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_class'     => 'space-y-3',
                                'container'      => false,
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-lg font-semibold mb-6">Información de Contacto</h4>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400 flex-shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span class="text-gray-300 text-sm">Av. Corrientes 1234, Buenos Aires</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400 flex-shrink-0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                <span class="text-gray-300 text-sm">+54 11 4555-0123</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400 flex-shrink-0"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                <span class="text-gray-300 text-sm">info@omicron.com.ar</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400 flex-shrink-0"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <span class="text-gray-300 text-sm">Lun - Vie: 8:00 - 18:00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-700 mt-12 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 text-sm">
                            Copyright 1954 - <?php echo date('Y'); ?> Laboratorio Omicron. Todos los derechos reservados.
                        </p>
                        <div class="flex space-x-6 mt-4 md:mt-0">
                            <a href="#" class="text-gray-400 hover:text-pink-400 text-sm transition-colors">
                                Política de Privacidad
                            </a>
                            <a href="#" class="text-gray-400 hover:text-pink-400 text-sm transition-colors">
                                Términos de Uso
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- #page -->

    <?php wp_footer(); ?>

</body>
</html>
