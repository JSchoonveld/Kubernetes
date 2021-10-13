<form method="POST" action="/upload">
    @csrf
    <div class="form-container container-column">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="container-column">
                <label for="text-body">Tekst</label><input name="text-body" id="text-body" type="text">
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="container-column">
                    <label for="text-family">Lettertype:</label>
                    <select name="text-family" id="text-family" value="">
                        <option value="">Select a font</option>
                        <option value="">Arial</option>
                        <option value="">Times New Roman</option>
                    </select>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="container-column">
                    <label for="text-size">Tekst grootte</label><input name="text-size" id="text-size" placeholder="15" type="number">
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="container-column">
                    <label for="text-color">Color</label><input name="text-color" id="text-color" type="color">
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col"><button type="submit" class="btn btn-primary">Primary</button></div>
            <div class="col"></div>
        </div>
    </div>
</form>
