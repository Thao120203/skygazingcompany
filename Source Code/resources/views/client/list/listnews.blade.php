@extends('client.infomation.master_info')
@section('layoutcontent')

<div class="wrapper">
    <section class="hoc container clear">
        <div class="group latest">
          <article class="one_third first"><a href="{{Route('news',1)}}"><img src="{{asset('assets/images/demo/Solar_Eclipse.jpg')}}" alt="" /></a>
           <h6>Solar Eclipse</h6>
           <p>A solar eclipse occurs when the Moon passes between Earth and the Sun, thereby obscuring Earth's view of the Sun, totally or partially.&hellip;</p>
           <footer><a href="{{Route('news',1)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('news',4)}}"><img src="{{asset('assets/images/demo/Lunar_Eclipse.jpg')}}" alt="" /></a>
            <h6>Lunar Eclipse</h6>
            <p>A lunar eclipse occurs when the Moon moves into the Earth's shadow. This can occur only when the Sun, Earth, and Moon are exactly or&hellip;</p>
            <footer><a href="{{Route('news',4)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('news',3)}}"><img src="{{asset('assets/images/demo/Evolution_Earth.jpg')}}" alt="" /></a>
            <h6>Evolution of Earth</h6>
            <p>As the Earth started to grow, about 4.56 billion years ago, the heavy iron sank to the center, and the lighter silicates rose to the surface.&hellip;</p>
            <footer><a href="{{Route('news',3)}}">Read More</a></footer>
          </article>
        </div>

        <div class="group latest">

          <article class="one_third first"><a href="{{Route('news',11)}}"><img src="{{asset('assets/images/demo/Odd.jpg')}}" alt="" /></a>
              <h6>Odd behavior of star reveals lonely black hole hiding in giant star cluster</h6>
              <p>Globular star clusters are huge spheres of tens of thousands of stars that orbit most galaxies. They are among the oldest known stellar systems in the Universe and date back to near the beginning of galaxy growth and evolution. More than 150 are currently.&hellip;</p>
              <footer><a href="{{Route('news',11)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('news',12)}}"><img src="{{asset('assets/images/demo/Undead.jpg')}}" alt="" /></a>
              <h6>Undead planets: The unusual conditions of the first exoplanet detection</h6>
              <p>Undead planets: The unusual conditions of the first exoplanet detection. Summary: The first ever exoplanets were discovered 30 years ago around a rapidly rotating star, called a pulsar. Now, astronomers have revealed that these planets may be incredibly rare.&hellip;</p>
              <footer><a href="{{Route('news',12)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('news',13)}}"><img src="{{asset('assets/images/demo/A.jpg')}}" alt="" /></a>
              <h6>A blueprint for life forms on Mars?</h6>
              <p>For the first time, scientists have demonstrated that microbes found living in Canada's High Arctic, in conditions similar to those on Mars, can survive by eating and breathing simple inorganic compounds like those that have been detected on Mars.&hellip;</p>
              <footer><a href="{{Route('news',13)}}">Read More</a></footer>
          </article>
        </div>

        <div class="group latest">

          <article class="one_third first"><a href="{{Route('news',10)}}"><img src="{{asset('assets/images/demo/sw.jpg')}}" alt="" /></a>
            <h6>Star with the shortest orbital period around black hole discovered</h6>
            <p>The star, S4716, orbits Sagittarius A*, the black hole in the centre of our Milky Way, in four years and reaches a speed of around 8000 kilometres per second. S4716 comes as close as 100 AU to the black hole -- a small distance by astronomical.&hellip;</p>
            <footer><a href="{{Route('news',10)}}">Read More</a></footer>
          </article>

            <article class="one_third"><a href="{{Route('news',9)}}"><img src="{{asset('assets/images/demo/hd.jpg')}}" alt="" /></a>
              <h6>Hidden companions shape the final days of dying stars</h6>
              <p>Billions of years from now, as our Sun approaches the end of its life and helium nuclei begin to fuse in its core, it will bloat dramatically and turn into what’s known as a red giant star. After swallowing Mercury, Venus and Earth with hardly a burp, it will grow so large that it can no longer hold onto its outermost layers of gas.&hellip;</p>
              <footer><a href="{{Route('news',9)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('news',2)}}"><img src="{{asset('assets/images/demo/bb.jpg')}}" alt="" /></a>
              <h6>Big Bang theory</h6>
              <p>The Big Bang theory describes how the universe expanded from an initial state of high density and temperature.It is the prevailing cosmological model explaining the evolution of the observable universe from the earliest known periods through its subsequent large-scale form.&hellip;</p>
              <footer><a href="{{Route('news',2)}}">Read More</a></footer>
            </article>

          </div>

          <div class="group latest">

            <article class="one_third first"><a href="{{Route('news',8)}}"><img src="{{asset('assets/images/demo/First.jpg')}}" alt="" /></a>
                <h6>Multi-Planet System Around A Sun-Like Star Caotured By Eso Telescope</h6>
                <p>The image shows two bright, giant exoplanets orbiting their star at distances of 160 and about 320 times the Earth-Sun distance. At 17 million years old, the star – officially called TYC 8998-760-1 .&hellip;</p>
                <footer><a href="{{Route('news',8)}}">Read More</a></footer>
            </article>

          <article class="one_third"><a href="{{Route('news',5)}}"><img src="{{asset('assets/images/demo/Star_Gaze.jpg')}}" alt="" /></a>
            <h6>Star Gaze</h6>
            <p>Before we dive into the main part of this article, I should touch on some points that will be relevant to the rest of this discussion. I don't want to go into too many details because I’ve already written a very thorough Telescope Buying Guide.&hellip;</p>
            <footer><a href="{{Route('news',5)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('news',6)}}"><img src="{{asset('assets/images/demo/What.jpg')}}" alt="" /></a>
            <h6>What a Martian meteorite can teach us about Earth's origins</h6>
            <p>This discovery, hidden in the oldest martian fragments found on Earth, could provide information about our planet that was lost over billions of years of geological movement and could help explain why the Earth developed into a planet that sustains a broad diversity of life and Mars did not.&hellip;</p>
            <footer><a href="{{Route('news',6)}}">Read More</a></footer>
          </article>
        </div>


    </section>
</div>

@endsection
