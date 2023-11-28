<h2>Hello, {{ $booking->patient->name }}</h2>
@if($booking->status == 'approved')
<p>Your booking has been {{ $booking->status }}</p>
<h2>
    Details
</h2>
<p>Doctor Name: {{ $booking->doctor->fname }}</p>
<p>Book Date: {{ $booking->book_date_bs }}</p>
<p>Start Time : {{ $booking->start_time }}</p>
<p>End Time: {{ $booking->end_time }}</p>
@else
<p>Your appointment booking has been canceled. Plese try to book another time</p>
@endif