
// при кліку по likeBtn використ аякс
$('.likeBtn').on('click', function(e) {
    // $(this).data('id'); // отримати атрибут
    let that = $(this); // змінна потрібна для роботи з елементом кнопки
    $.post( "/api.php?p=like", { post_id: that.data('id')})
        .done(function(data) {

            data = JSON.parse(data);

            if(data.status == 'liked') { // якщо є лайк
                that.addClass('liked') // додаю клас лайк
            } else {
                that.removeClass('liked') // забрати клас лайк
            }
            that.find('p').text(data.count)
        });

})





