@extends('client.infomation.master_info')
@section('layoutcontent')

<div class="wrapper">
    <section class="hoc container clear">
        <div class="group latest">

          <article class="one_third first"><a href="{{Route('constellation',9)}}"><img src="{{asset('assets/images/demo/Vigro.jpg')}}" alt="" /></a>
            <p>Virgo is one of the constellations of the zodiac. Its name is Latin for maiden, and its old astronomical symbol is ♍.&hellip;</p></p>
            <footer><a href="{{Route('constellation',9)}}">Read More</a></footer>
          </article>

            <article class="one_third"><a href="{{Route('constellation',8)}}"><img src="{{asset('assets/images/demo/Leo.jpg')}}" alt="" /></a>
                <p>Leo is one of the constellations of the zodiac. Its name is Latin for lion. Its old astronomical symbol is ♌.&hellip;</p></p>
                <footer><a href="{{Route('constellation',8)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('constellation',2)}}"><img src="{{asset('assets/images/demo/Aquarius.jpg')}}" alt="" /></a>
                <p>Aquarius is a constellation of the zodiac. Its name is Latin for "water-carrier" and its old astronomical symbol is ♒.&hellip;</p></p>
                <footer><a href="{{Route('constellation',2)}}">Read More</a></footer>
            </article>

        </div>

        <div class="group latest">

          <article class="one_third first"><a href="{{Route('constellation',12)}}"><img src="{{asset('assets/images/demo/Ophiuchus.jpg')}}" alt="" /></a>
            <p>Ophiuchus  is a large constellation straddling the celestial equator. Its name comes from the Ancient Greek .&hellip;</p></p>
            <footer><a href="{{Route('constellation',12)}}">Read More</a></footer>
          </article>

            <article class="one_third"><a href="{{Route('constellation',5)}}"><img src="{{asset('assets/images/demo/taurus.jpg')}}" alt="" /></a>
                <p>Taurus (Latin for "the Bull") is one of the constellations of the zodiac. Its old astronomical symbol is ♉.&hellip;</p></p>
                <footer><a href="{{Route('constellation',5)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('constellation',11)}}"><img src="{{asset('assets/images/demo/scorpius.jpg')}}" alt="" /></a>
                <p>Scorpius is one of the constellations of the zodiac,is located in the Southern celestial .Its old astronomical symbol is ♏.&hellip;</p></p>
                <footer><a href="{{Route('constellation',11)}}">Read More</a></footer>
            </article>

        </div>

        <div class="group latest">

            <article class="one_third first"><a href="{{Route('constellation',10)}}"><img src="{{asset('assets/images/demo/Cancer.jpg')}}" alt="" /></a>
                <p>Cancer is one of the twelve constellations of the zodiac. Its old astronomical symbol is ♋. Its name is Latin for crab and it is commonly represented as one.&hellip;</p></p>
              <footer><a href="{{Route('constellation',10)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('constellation',1)}}"><img src="{{asset('assets/images/demo/Capricornus.jpg')}}" alt="" /></a>
                <p>Capricornus is one of the constellations of the zodiac. Its name is Latin for "horned goat" or "goat horn". Its old astronomical symbol is ♑.&hellip;</p></p>
              <footer><a href="{{Route('constellation',1)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('constellation',10)}}"><img src="{{asset('assets/images/demo/Libra.jpg')}}" alt="" /></a>
              <p>Libra is a constellation of the zodiac and is located in the Southern celestial hemisphere. Its name is Latin for weighing scales. Its old astronomical symbol is ♎.&hellip;</p></p>
              <footer><a href="{{Route('constellation',10)}}">Read More</a></footer>
            </article>
          </div>


        <div class="roup latest">

            <article class="one_third first"><a href="{{Route('constellation',13)}}"><img src="{{asset('assets/images/demo/Sagittarius.jpg')}}" alt="" /></a>
                <p>Sagittarius is one of the constellations of the zodiac and is located in the Southern celestial hemisphere. It is one of the 48 constellations listed by the 2nd-century astronomer Ptolemy and remains one of the 88 modern constellations ♐.&hellip;</p></p>
                <footer><a href="{{Route('constellation',13)}}">Read More</a></footer>
            </article>

            <article class="one_third"><a href="{{Route('constellation',6)}}"><img src="{{asset('assets/images/demo/gemini.jpg')}}" alt="" /></a>
                <p>Gemini is one of the constellations of the zodiac and is located in the northern celestial hemisphere. It was one of the 48 constellations described by the 2nd century AD astronomer Ptolemy, and it remains one of the 88 modern ♊.&hellip;</p></p>
                <footer><a href="{{Route('constellation',6)}}">Read More</a></footer>
            </article>

            <article class="one_third "><a href="{{Route('constellation',3)}}"><img src="{{asset('assets/images/demo/Pisces.jpg')}}" alt="" /></a>
              <p>Pisces is a constellation of the zodiac. Its vast bulk – and main asterism viewed in most European cultures per Greco-Roman antiquity as a distant pair of fishes connected by one cord each that join at an apex – are in the Northern ♓.&hellip;</p></p>
              <footer><a href="{{Route('constellation',3)}}">Read More</a></footer>
            </article>
            
          </div>

          <div class="roup latest">

            <article class="one_third first"><a href="{{Route('constellation',4)}}"><img src="{{asset('assets/images/demo/Aries.jpg')}}" alt="" /></a>
              <p>Aries is one of the constellations of the zodiac. It is located in the Northern celestial hemisphere between Pisces to the west and Taurus to the east.Its old astronomical symbol is ♈.&hellip;</p></p>
              <footer><a href="{{Route('constellation',4)}}">Read More</a></footer>
          </article>
        </div>
    </section>
</div>

@endsection