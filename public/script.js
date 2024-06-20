
$(document).ready(function() {
    $('.add-to-wishlist').on('click', function(e) {
        e.preventDefault();

        var $icon = $(this).find('i');
        var produkId = $(this).data('produk-id');
        var isAdded = $icon.hasClass('fa-solid');

        $.ajax({
            url: isAdded ? '{{ route('wishlist.remove') }}' : '{{ route('wishlist.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                produk_id: produkId
            },
            success: function(response) {
                if (response.status === 'success') {
                    if (isAdded) {
                        $icon.removeClass('fa-solid fa-heart').addClass('icon-heart');
                    } else {
                        $icon.removeClass('icon-heart').addClass('fa-solid fa-heart');
                    }

                    // Update the wishlist count
                    updateWishlistCount();
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('You must be logged in to manage your wishlist.');
            }
        });
    });

    function updateWishlistCount() {
        $.ajax({
            url: '/wishlist/count',
            method: 'GET',
            success: function(response) {
                $('.item-count').text(response.count);
            }
        });
    }
});
