@extends('client.infomation.master_info')
@section('layoutcontent')

<div class="wrapper">
    <section class="hoc container clear">
        <div class="group latest">
          <article class="one_third first"><a href="{{Route('observatory',1)}}"><img src="{{asset('assets/images/demo/Sydney_observatory.jpg')}}" alt="" /></a>
           <h6>Sydney observatory</h6>
            <p>The Sydney Observatory is a heritage-listed meteorological station, astronomical observatory, function venue, and education facility located on Observatory Hill at Upper Fort Street, Australia.&hellip;</p>
           <footer><a href="{{Route('observatory',1)}}">Read More</a></footer>  
          </article>

          <article class="one_third"><a href="{{Route('observatory',12)}}"><img src="{{asset('assets/images/demo/Atacama.jpg')}}" alt="" /></a>
            <h6>Atacama Large Millimeter Array</h6>
            <p>The Atacama Large Millimeter Array is an astronomical interferometer of 66 radio telescopes in the Atacama Desert of northern Chile.&hellip;</p>
            <footer><a href="{{Route('observatory',12)}}">Read More</a></footer>
        </article>

          <article class="one_third "><a href="{{Route('observatory',14)}}"><img src="{{asset('assets/images/demo/palomar.jpg')}}" alt="" /></a>
            <h6>Palomar observatory</h6>
            <p>Palomar Observatory is an astronomical research observatory in San Diego County, California, United States, in the Palomar Mountain Range. It is owned and operated by the California Institute of Technology.&hellip;</p>
            <footer><a href="{{Route('observatory',14)}}">Read More</a></footer> 
        </article>

        </div>

        <div class="group latest">

            <article class="one_third first"><a href="{{Route('observatory',4)}}"><img src="{{asset('assets/images/demo/Very.jpg')}}" alt="" /></a>
                <h6>Very Large Array (VLA)</h6>
                <p>The Karl G. Jansky Very Large Array is a centimeter-wavelength radio astronomy observatory located in central New Mexico. The VLA stands at an elevation of 6,970 feet (2,120 m) above sea level.&hellip;</p>
                <footer><a href="{{Route('observatory',4)}}">Read More</a></footer> 
            </article>

            
          <article class="one_third"><a href="{{Route('observatory',5)}}"><img src="{{asset('assets/images/demo/Roque.jpg')}}" alt="" /></a>
            <h6>Roque de los Muchachos observatory</h6>
            <p>Roque de los Muchachos Observatory is an astronomical observatory located in the municipality of Garafía, Spain. The observatory site is operated by the Instituto de Astrofísica de Canarias.&hellip;</p>
            <footer><a href="{{Route('observatory',5)}}">Read More</a></footer>  
          </article>

          <article class="one_third"><a href="{{Route('observatory',13)}}"><img src="{{asset('assets/images/demo/Indian.jpg')}}" alt="" /></a>
            <h6>Indian Astronomical Observatory (IAO)</h6>
            <p>The Royal Observatory, Greenwich known as the Old Royal Observatory from 1957 to 1998, is an observatory situated on a hill in Greenwich Park in south east London.&hellip;</p>
            <footer><a href="{{Route('observatory',13)}}">Read More</a></footer> 
          </article>
        </div>

        <div class="group latest">

            <article class="one_third first"><a href="{{Route('observatory',7)}}"><img src="{{asset('assets/images/demo/kpob.jpg')}}" alt="" /></a>
                <h6>Kitt Peak National observatory</h6>
                <p>The Kitt Peak National Observatory (KPNO) is a United States astronomical observatory located on Kitt Peak of the Quinlan Mountains in the Arizona-Sonoran Desert on the Tohono O'odham Nation.&hellip;</p>
                <footer><a href="{{Route('observatory',7)}}">Read More</a></footer>  
              </article>

            <article class="one_third"><a href="{{Route('observatory',8)}}"><img src="{{asset('assets/images/demo/mkob.jpg')}}" alt="" /></a>
              <h6>Mauna Kea observatory</h6>
              <p>The Mauna Kea Observatories (MKO) are a group of independent astronomical research facilities and large telescope observatories that are located at the summit of Mauna Kea on the Big Island .&hellip;</p>
              <footer><a href="{{Route('observatory',8)}}">Read More</a></footer> 
            </article>

            <article class="one_third"><a href="{{Route('observatory',3)}}"><img src="{{asset('assets/images/demo/pob.jpg')}}" alt="" /></a>
              <h6>Paranal observatory</h6>
              <p>Paranal Observatory is an astronomical observatory operated by the European Southern Observatory. It is located in the Atacama Desert of northern Chile on Cerro Paranal at 2,635 m (8,645 ft) altitude.&hellip;</p>
              <footer><a href="{{Route('observatory',3)}}">Read More</a></footer> 
            </article>

          </div>


        <div class="group latest">

            <article class="one_third first"><a href="{{Route('observatory',10)}}"><img src="{{asset('assets/images/demo/South.jpg')}}" alt="" /></a>
                <h6>South African Astronomical observatory</h6>
                <p>South African Astronomical Observatory is the national centre for optical and infrared astronomy in South Africa. It was established in 1972. The observatory is run by the National Research Foundation.&hellip;</p>
                <footer><a href="{{Route('observatory',10)}}">Read More</a></footer> 
            </article>

            <article class="one_third"><a href="{{Route('observatory',2)}}"><img src="{{asset('assets/images/demo/yob.jpg')}}" alt="" /></a>
                <h6>Yerkes observatory</h6>
                <p>Yerkes Observatory is an astronomical observatory located in Williams Bay, U.S.A. It was operated by the University of Chicago Department of Astronomy and Astrophysics from its founding in 1897 to 2020.&hellip;</p>
                <footer><a href="{{Route('observatory',2)}}">Read More</a></footer> 
            </article>

            <article class="one_third"><a href="{{Route('observatory',11)}}"><img src="{{asset('assets/images/demo/gob.jpg')}}" alt="" /></a>
              <h6>Greenwich observatory</h6>
              <p>The Royal Observatory, Greenwich known as the Old Royal Observatory from 1957 to 1998, is an observatory situated on a hill in Greenwich Park in south east London. It played a major role in the history of astronomy and navigation.&hellip;</p>
              <footer><a href="{{Route('observatory',11)}}">Read More</a></footer>  
            </article>

          </div>

          <div class="group latest">

            <article class="one_third first"><a href="{{Route('observatory',6)}}"><img src="{{asset('assets/images/demo/arob.jpg')}}" alt="" /></a>
              <h6>Arecibo observatory</h6>
              <p>The Arecibo Observatory, the National Astronomy and Ionosphere Center and formerly known as the Arecibo Ionosphere Observatory, is an observatory in Barrio Esperanza, Arecibo, Puerto Rico owned by the US National Science Foundation.&hellip;</p>
              <footer><a href="{{Route('observatory',6)}}">Read More</a></footer> 
            </article>

            <article class="one_third "><a href="{{Route('observatory',9)}}"><img src="{{asset('assets/images/demo/lsob.jfif')}}" alt="" /></a>
                <h6>La Silla observatory</h6>
                <p>La Silla Observatory is an astronomical observatory in Chile with three telescopes built and operated by the European Southern Observatory. The observatory is one of the largest in the Southern Hemisphere and was the first in Chile to be used by ESO.&hellip;</p>
                <footer><a href="{{Route('observatory',9)}}">Read More</a></footer> 
            </article>

          </div>
    </section>
</div>

@endsection
