$(function () {
    $('#search-input').on('keyup', function() {
        var value = $(this).val();
        console.log(value);
        $.get('/article/search-json?terms=' + value, function(articles) {
            $('#results').html('');
            articles.forEach(function (article) {
                $('#results').append("<li>" + article.title + "</li>");
            });
        });

    });
})