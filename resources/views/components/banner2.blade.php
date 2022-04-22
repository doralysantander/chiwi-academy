
<dh-component>

    <div class="bg-orange-100 mt-20">
      <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
        <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-neutral-800 font-black leading-7 md:leading-10">
            Aún no hay eventos registrados.
            <span class="text-orange-700">¡Registra un evento!</span>
          </h1>
          
        </div>
        <div class="flex justify-center items-center">
          <a class=" bg-orange-600 transition duration-150 ease-in-out lg:text-xl lg:font-bold  rounded-lg text-white px-4 sm:px-10 border py-2 sm:py-4 text-sm"
             href="{{ route('createEvent.index') }}">Registrar evento</a>
        </div>
      </div>
    </div>
  </dh-component>