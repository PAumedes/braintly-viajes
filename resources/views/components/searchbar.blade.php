<form action="{{ route('flights.search-by-airport')}}">
    <div class="form-row justify-content-between align-items-center">
      <div class="col-8 my-1">
        <label class="sr-only" for="airport_input">Airport</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Ingresá un Aeropuerto</div>
          </div>
          <input type="text" class="form-control" id="airport_input" placeholder="Ej: Ciudad Autónoma de Buenos Aires" name="q" required>
        </div>
      </div>
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
    </div>
</form>
