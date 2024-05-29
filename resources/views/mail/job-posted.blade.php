<h2>
    {{ $job->title }}
</h2>

<p>
    Congratulations! Your job is live!
</p>

<p>
    <a href={{ url('/jobs/' . $job->id) }}>View your job listing</a>
</p>
