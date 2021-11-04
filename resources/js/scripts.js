$(document).ready(function() {
    $('.vat').on('change', function() {
        const $this = $(this),
            value = parseInt($this.val()),
            $tr = $(this).closest('tr'),
            price = parseFloat($tr.find('.price').data('price')),
            count = parseFloat($tr.find('.count').data('count'));

        $(this).closest('tr').find('.gross').text(price+((value/100)*price));
        $(this).closest('tr').find('.net').text(count*price);
        $(this).closest('tr').find('.gross_value').text((price+((value/100)*price))*count);
    });

    $('.verifyPrice').on('click', function() {
        $('.invoice--table tr').each(function() {
            const $row = $(this),
                price = $row.find('.net').text();
            if (parseFloat(price) >= 1000) {
                $row.css('background-color', 'green');
            }
        })
    })

    $('.remove--item').on('click', function(e){
        e.preventDefault();
        if (confirm('Potwierdzić usunięcie elementu')) {
            $(e.target).closest('form').submit()
        }
    });
});

