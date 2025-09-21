<div class="card h-100 p-3">
  <div class="ratio ratio-16x9">
    <img src="{{ $studio->logo }}" 
         class="w-100 h-100 object-fit-contain" 
         alt="{{ $studio->studio_name }}">
  </div>
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $studio->studio_name }}</h5>
    <p class="card-text flex-grow-1">{{ $studio->description }}</p>
    <a href="#" class="btn btn-primary mt-auto">See more</a>
  </div>
</div>
