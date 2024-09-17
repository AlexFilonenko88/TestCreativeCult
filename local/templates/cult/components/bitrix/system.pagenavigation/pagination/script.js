$(document).ready(function () {
    $(document).on('click', '.load_more', function () {
        let targetContainer = $('.support-items'), //  Контейнер, в котором хранятся элементы
            url = $('.load_more').attr('data-url'), //  URL, из которого будем брать элементы
            paginationContainer = $('.support-bottom'); // Контейнер с пагинацией

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function (data) {
                    $('.load_more').remove(); //  Удаляем старую пагинацию

                    let elements = $(data).find('.support-card'), // Ищем элементы
                        pagination = $(data).find('.load_more'); // Ищем пагинацию

                    targetContainer.append(elements); // Добавляем элементы в конец контейнера
                    paginationContainer.append(pagination); // Добавляем пагинацию
                }
            })
        }
    });
});