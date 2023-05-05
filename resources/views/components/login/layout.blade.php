<x-layout>
  <div class="bg-secondary" style="min-height: 100vh;">
    <div class="container">
    <div class="row pt-5 justify-content-center">
      <div class="col-lg-4 col-md-8 col-sm-12 col-12">
        <div class="card p-3">
          {{$slot}}
        </div>
      </div>
    </div>
  </div>
  </div>  
</x-layout>