<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Form Elements</h5>

          <!-- General Form Elements -->
          <form>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-3 col-form-label">Text</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-3 col-form-label">Number</label>
              <div class="col-sm-9">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-3 col-form-label">File Upload</label>
              <div class="col-sm-9">
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-3 col-form-label">Date</label>
              <div class="col-sm-9">
                <input type="date" class="form-control">
              </div>
            </div>



            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">Textarea</label>
              <div class="col-sm-9">
                <textarea class="form-control" style="height: 100px"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">Textarea</label>
              <div class="col-sm-9">
              <div class="quill-editor-default">
                <p>Hello World!</p>
                <p>This is Quill <strong>default</strong> editor</p>
              </div>
              </div>
            </div>



            
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
              <div class="col-sm-9">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    First radio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Second radio
                  </label>
                </div>
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                  <label class="form-check-label" for="gridRadios3">
                    Third disabled radio
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="row mb-3">
              <legend class="col-form-label col-sm-3 pt-0">Checkboxes</legend>
              <div class="col-sm-9">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                  <label class="form-check-label" for="gridCheck2">
                    Example checkbox 2
                  </label>
                </div>

              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Disabled</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="Read only / Disabled" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Select</label>
              <div class="col-sm-9">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

     

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Submit Button</label>
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

  
  </div>
</section>

</main><!-- End #main -->