document.addEventListener('DOMContentLoaded', function() {
    var starRatingElements = document.querySelectorAll('.samuraimart-star-rating');

    starRatingElements.forEach(function(element) {
        var averageScore = parseFloat(element.dataset.rate);
        var roundedAverageScore = Math.round(averageScore); // 小数点以下を四捨五入して整数に変換
        var filledStars = roundedAverageScore;
        var emptyStars = 5 - filledStars;

        var starsHtml = '<span class="star-rating" data-rate="' + roundedAverageScore + '">';
        starsHtml += '★'.repeat(filledStars);
        starsHtml += '<span class="empty-star">★</span>'.repeat(emptyStars);
        starsHtml += '</span>';

        element.querySelector('.star-rating').innerHTML = starsHtml;
    });
});
