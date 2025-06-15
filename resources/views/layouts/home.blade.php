@extends('app')
@section('title')
  Car Rental-Home page
@endsection
@section('content')
 <section id="second_hader" class="py-5">
      <div class="row container-fluid">
        <div class="col-md-6 text-dark px-5">
          <h3 class="fw-bolder">BEST IN CITY</h3>
          <h2 class="fw-bolder">TRUSTED CAB SERVICES IN NEW YORK</h2>
            <P class="my-4">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur dapibus pulvinar, sapien eros sodales ante, euismod aliquet nulla metus a mauris.Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur dapibus pulvinar, sapien eros sodales ante, euismod aliquet nulla metus a mauris.</P>
            <button class="bg-dark text-white fw-bold rounded">READ MORE</button>
        </div>
        <div class="col-md-6 overflow-hidden">
          <div class="form bg-white  m-auto">
            <h3 class="text-white bg-dark text-center py-3 fw-bold">BOOK A <span class="text-warning">CAB</span></h3>
            <form action="" class="">
              <div class="row">
                <div class="col-md-6"><input type="text" placeholder="Name"><hr></div>
                <div class="col-md-6"><input type="text" placeholder="Phone"><hr></div>
              </div>
              <div class="row">
                <div class="col-md-6"><input type="text" placeholder="When"><hr></div>
                <div class="col-md-6"><input type="text" placeholder="Time"><hr></div>
              </div>
              <div class="row">
                <div class="col-md-6"><input type="text" placeholder="Start"><hr></div>
                <div class="col-md-6"><input type="text" placeholder="End"><hr><br></div>
              </div>
              <div class="row">
                <input type="text" placeholder="Choose Vehicle"><hr>
                <input type="submit" value="Submit" class="bg-dark text-white submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    @endsection
