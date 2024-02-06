@php
    $filledStars = floor($averageScore);
    $emptyStars = 5 - $filledStars;
@endphp
<div class="samuraimart-star-rating" data-rate="{{ $averageScore }}">
    <span class="star-rating"></span>
    {{ number_format($averageScore, 1) }}
</div>
