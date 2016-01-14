@extends('layouts.master')

@section('title', 'About')


@section('content')
    <h1>About me</h1>
    <p>I am {{$age}} years old and was born in Japan in 1986.</p> <!-- This is the same as <?= $age; ?> -->
    <p>
        While I was going to university in Japan, my dream was to travel around the world spending 2 -3 years.
        In 2009, I graduated with a degree in Law and began to work for a property management company in Tokyo.
        I was planning to take on the journey after I worked for the place for 3 - 4 years,
        gaining enough money and also work experience so that I'd be able to get a job when I return
        from the journey.
    </p>
    <p>
        There were two problems. One was that I wasn't happy with the working culture in Japan.
        As you might have heard of, Japanese employees work for a very long time.
        What is even worse is that sometimes they can't get their rightful payment for their
        overtime working. Of course this is illegal, euphemistically referred to as Service Zangyo.
        The other problem was that I wanted to change my profession. I was into technology since
        I was very young, but I wasn't good enough at math to take a degree in CS/IT when I was 18.
    </p>
    <p>
        In the second year of me working for that company, I found a book on Amazon, called
        "How to stop being Japanese". I appreciate the Amazon's recommendation algorithm,
        as this is probably one of the best accidents in my life. This book was all about the cultural
        differences between Japan and Australia from a Japanese expat's point of view,
        and gave me an idea - If I dislike unpaid overtime working, why don't I leave a society
        where I have to do that?
    </p>

    <p>
        I decided to study abroad to be able to work abroad. I spent all of my saving in Australia.
        In 2015, I got a master degree in IT, then I became a web developer.
    </p>

    <h2>What do I want to do?</h2>
    <p>I'm passionate about the following things.</p>
    <ul>
        <li>Web development</li>
        <li>Data mining</li>
        <li>Traveling/Backpacking</li>
        <li>Language learning(German, Russian, Spanish)</li>
        <li>Exercising</li>
        <li>Reading books (Self improvement, Communication, Traveling)</li>
    </ul>

    <h2>What is my future goal?</h2>
    <p>One of them</p>
    <ul>
        <li>Researcher in data science</li>
        <li>Software engineer</li>
        <li>Nomad worker/Freelancer</li>
    </ul>


@endsection
