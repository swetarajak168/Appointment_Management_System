<h1>Hello,{{ $book->doctor->fname }} You have new booking</h1>
<h2>Please respond to status</h2>
<p>
   Booking Date: {{ $book->book_date_bs }}

</p>
<p>Start Time: {{ $book->start_time }}</p>
<p>End Time: {{ $book->end_time }}</p>