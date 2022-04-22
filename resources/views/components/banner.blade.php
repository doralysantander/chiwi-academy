{{-- BANNER-1 --}}


<div class="w-full pt-20">
    <div class="flex bg-white" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-neutral-800 md:text-4xl">Aún no hay eventos registrados. <span class="text-orange-600">¡Registra un evento!</span></h2>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-orange-600 text-white text-xs font-semibold rounded-lg" href="{{ route('createEvent.index') }}">Registrar evento</a>
                    
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</div>


{{-- BANNER-2 --}}


<dh-component>

    <div class="bg-orange-100">
      <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
        <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-neutral-800 font-black leading-7 md:leading-10">
            Aún no hay eventos registrados.
            <span class="text-orange-700">¡Registra un evento!</span>
          </h1>
          
        </div>
        <div class="flex justify-center items-center">
          <button class=" bg-orange-600 transition duration-150 ease-in-out lg:text-xl lg:font-bold  rounded-lg text-white px-4 sm:px-10 border py-2 sm:py-4 text-sm">
              <a  href="{{ route('createEvent.index') }}">Registrar evento</a></button>
        </div>
      </div>
    </div>
  </dh-component>