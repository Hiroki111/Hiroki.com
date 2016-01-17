@extends('layouts.master')

@section('title', 'About')


@section('content')
    <h1>About me</h1>
    <p>I am {{$age}} years old and was born in Japan in 1986.</p> <!-- This is the same as <?= $age; ?> -->
    <p>
        While I was going to university in Japan, my dream was to travel around the world.
        In 2009, I graduated with a degree in Law and began to work for a property management company in Tokyo.
        I was planning to travel abroad for 2 to 3 years after I worked for the company for 3 to 4 years,
        gaining enough money and also work experience so that I'd be able to get a job when I return
        from the journey.
    </p>
    <p>
        There were two problems. One was that I wasn't very happy with the working culture in Japan.
        <!--As you might have heard of, Japanese employees work for a very long time.
        What is even worse is that sometimes they can't get their rightful payment for their
        overtime working. Of course this is illegal, euphemistically referred to as Service Zangyo.-->
        The other was that I wanted to change my profession. I was into technology since
        I was very young, but I wasn't good enough at math to take a degree in CS/IT when I was 18.
    </p>
    <p>
        In the second year of me working for that company, I found an old book on Amazon, called
        <a href = "http://www.amazon.co.jp/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%82%92%E3%82%84%E3%82%81%E3%82%8B%E6%96%B9%E6%B3%95-%E3%81%A1%E3%81%8F%E3%81%BE%E6%96%87%E5%BA%AB-%E6%9D%89%E6%9C%AC-%E8%89%AF%E5%A4%AB/dp/4480027769">
        "How to stop being Japanese" (roughly translated). </a> I appreciate the Amazon's recommendation algorithm,
        - this is probably one of the best accidents in my life. This book was all about the cultural
        differences between Japan and Australia from a Japanese expat's point of view,
        and gave me an idea - How about being able to work and live abroad, rather than just traveling?
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
        <li>Web/Software engineer</li>
        <li>Nomad worker/Life-long traveler</li>
    </ul>


@endsection
