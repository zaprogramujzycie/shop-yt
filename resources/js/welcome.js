$(function() {
    $('div.products-count a').click(function(event) {
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        getProducts($(this).text());
    });

    $('a.sorting-option').click(function(event) {
        event.preventDefault();
        let selectedOption = $(this).data("sorting-option");        // separate values to send
        let optionToDisplay = $(this).text();                       // and to be displayed need to be read
        $('a#sorting-option-display')
            .attr("data-sorting-option",selectedOption)             // values are injected into displayed link
            .text(optionToDisplay);
        getProducts($('a.products-actual-count').first().text());   // after setting displayed and passing value
                                                                    // getProducts function is called
    });

    $('a#filter-button').click(function(event) {
        event.preventDefault();
        getProducts($('a.products-actual-count').first().text());
    });

    function getProducts(paginate) {
        const form = $('form.sidebar-filter').serialize();
        const orderBy = $('a#sorting-option-display').attr("data-sorting-option"); // reading sorting option value
        $.ajax({
            method: "GET",
            url: "/",
            data: form + "&" + $.param({paginate: paginate,orderBy: orderBy}) // added additional parameter in param()
        })
        .done(function (response) {
            $('div#products-wrapper').empty();
            $.each(response.data, function (index, product) {
                const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' +
                    '            <div class="card h-100 border-0">' +
                    '                <div class="card-img-top">' +
                    '                    <img src="' + getImage(product) + '" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">' +
                    '                </div>' +
                    '                <div class="card-body text-center">' +
                    '                    <h4 class="card-title">' +
                                            product.name +
                    '                    </h4>' +
                    '                    <h5 class="card-price small">' +
                    '                        <i>PLN ' + product.price + '</i>' +
                    '                    </h5>' +
                    '                </div>' +
                    '            </div>' +
                    '        </div>';
                $('div#products-wrapper').append(html);
            });
        });
    }

    function getImage(product) {
        if (!!product.image_path) {
            return storagePath + product.image_path;
        }
        return defaultImage;
    }
});
