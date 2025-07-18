{{-- <div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div> --}}

<h2>
    {{ $job->title }}
</h2>
<p>Congrats!Your job is now live on our website.</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your Job Listing</a>
</p>
