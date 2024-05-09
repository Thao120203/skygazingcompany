@extends('client.infomation.master_info')
@section('layoutcontent')

<div class="wrapper">
    <section class="hoc container clear">
      <h5>Primary</h5>
        <div class="group latest">
          <article class="one_third first"><a href="{{Route('ss',2)}}"><img src="{{asset('assets/images/demo/Mercury.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Mercury</h6>
            <p>Mercury—the smallest planet in our solar system and closest to the Sun—is only slightly larger than Earth's Moon. Mercury is the fastest planet, zipping around the.&hellip;</p>
            <footer><a href="{{Route('ss',2)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('ss',3)}}"><img src="{{asset('assets/images/demo/Venus.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Venus</h6>
            <p>Venus spins slowly in the opposite direction from most planets. A thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest.&hellip;</p>
            <footer><a href="{{Route('ss',3)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('ss',4)}}"><img src="{{asset('assets/images/demo/Earth.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Earth</h6>
            <p>Earth—our home planet—is the only place we know of so far that’s inhabited by living things. It's also the only planet in our solar system with liquid water on the surface.&hellip;</p>
            <footer><a href="{{Route('ss',4)}}">Read More</a></footer>
          </article>
        </div>

        <div class="group latest">

          <article class="one_third first"><a href="{{Route('ss',5)}}"><img src="{{asset('assets/images/demo/Mars.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Mars</h6>
            <p>Mars is a dusty, cold, desert world with a very thin atmosphere. There is strong evidence Mars was – billions of years ago – wetter and warmer, with a thicker atmosphere.&hellip;</p>
            <footer><a href="{{Route('ss',5)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('ss',6)}}"><img src="{{asset('assets/images/demo/Jupiter.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Jupiter</h6>
            <p>Jupiter is more than twice as massive than the other planets of our solar system combined. The giant planet's Great Red spot is a centuries-old storm bigger than Earth.&hellip;</p>
            <footer><a href="{{Route('ss',6)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('ss',7)}}"><img src="{{asset('assets/images/demo/Saturn.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Saturn</h6>
            <p>Adorned with a dazzling, complex system of icy rings, Saturn is unique in our solar system. The other giant planets have rings, but none are as spectacular as Saturn's.&hellip;</p>
            <footer><a href="{{Route('ss',7)}}">Read More</a></footer>
          </article>
          
        </div>

        <div class="group latest">

          <article class="one_third first"><a href="{{Route('ss',8)}}"><img src="{{asset('assets/images/demo/Uranus.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Uranus</h6>
            <p>Uranus—seventh planet from the Sun—rotates at a nearly 90-degree angle from the plane of its orbit. This unique tilt makes Uranus appear to spin on its side.&hellip;</p>
            <footer><a href="{{Route('ss',8)}}">Read More</a></footer>
          </article>

          <article class="one_third"><a href="{{Route('ss',9)}}"><img src="{{asset('assets/images/demo/Neptune.png')}}" alt="" /></a>
            <h6 class="heading font-x1">Neptune</h6>
            <p>Neptune—the eighth and most distant major planet orbiting our Sun—is dark, cold and whipped by supersonic winds. It was the first planet located through.&hellip;</p>
            <footer><a href="{{Route('ss',9)}}">Read More</a></footer>
          </article>

        </div>

        <h5>Dwarf</h5>

        <div class="group latest">
            <article class="one_third first"><a href="{{Route('ss',10)}}"><img src="{{asset('assets/images/demo/Pluto.jpg')}}" alt=""></a>
              <h6 class="heading font-x1">Pluto</h6>
              <p>Pluto is a complex world of ice mountains and frozen plains. Once considered the ninth planet, Pluto is the best known of a new class of worlds called dwarf planets.</p>
              <footer><a href="{{Route('ss',10)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('ss',11)}}"><img src="{{asset('assets/images/demo/Ceres.jpg')}}" alt=""></a>
              <h6 class="heading font-x1">Ceres</h6>
              <p>Ceres makes up almost a third of the asteroid belt's total mass, but it is still far smaller than Earth's Moon. Ceres is heavily cratered with large amounts of ice.&hellip;</p>
              <footer><a href="{{Route('ss',11)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('ss',12)}}"><img src="{{asset('assets/images/demo/Makemake.jpg')}}" alt=""></a>
              <h6 class="heading font-x1">Makemake</h6>
              <p>Slightly smaller than Pluto, Makemake is the second-brightest object in the Kuiper Belt as seen from Earth. It takes about 305 Earth years for this dwarf planet.&hellip;</p>
              <footer><a href="{{Route('ss',12)}}">Read More</a></footer>
            </article>
        </div>

        <div class="group latest">
            <article class="one_third first"><a href="{{Route('ss',13)}}"><img src="{{asset('assets/images/demo/Haumea.jpg')}}" alt=""></a>
              <h6 class="heading font-x1">Haumea</h6>
              <p>Haumea is one of the fastest rotating large objects in our solar system. Haumea is located in the Kuiper Belt, a donut-shaped region of.&hellip;</p>
              <footer><a href="{{Route('ss',13)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('ss',14)}}"><img src="{{asset('assets/images/demo/ERIS.png')}}" alt=""></a>
              <h6 class="heading font-x1">Eris</h6>
              <p>Eris is one of the largest known dwarf planets in our solar system. It's about the same size as Pluto, but it is three times farther from the Sun.&hellip;</p>
              <footer><a href="{{Route('ss',14)}}">Read More</a></footer>
            </article>

        </div>
    </section>
</div>

@endsection
