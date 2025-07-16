document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('mobile-menu-open-icon');
    const closeIcon = document.getElementById('mobile-menu-close-icon');

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    const emblaNode = document.querySelector('.embla');
    if (emblaNode) {
        const embla = EmblaCarousel(emblaNode, { loop: true }, [
            EmblaCarouselAutoplay({ delay: 3000 })
        ]);
    }

    const productFilters = document.querySelectorAll('.product-filter, #product-category-filter');
    if (productFilters.length > 0) {
        productFilters.forEach(filter => {
            filter.addEventListener('change', function() {
                loadProducts();
            });
        });
        loadProducts();
    }

    function loadProducts() {
        const category = document.getElementById('product-category-filter').value;
        const presentations = Array.from(document.querySelectorAll('.product-filter[id^="pa_presentacion"]:checked')).map(el => el.value);
        const saleConditions = Array.from(document.querySelectorAll('.product-filter[id^="pa_condicion-de-venta"]:checked')).map(el => el.value);

        const data = {
            'action': 'filter_products',
            'category': category,
            'presentations': presentations,
            'sale_conditions': saleConditions,
        };

        fetch(omicron_ajax.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(data),
        })
        .then(response => response.text())
        .then(result => {
            document.getElementById('products-container').innerHTML = result;
        });
    }
});
