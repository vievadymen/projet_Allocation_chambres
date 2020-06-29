<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/stylechambres.css">
</head>
  <body>
      <div class="row">
          <div class="col-lg-12 formulaire">
  <form id="form">

  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="prenom" placeholder="prenom">
      <small id="helpprenom" class="text-danger"></small>
    </div>
    
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nom" placeholder="nom">
      <small id="helpnom" class="text-danger"></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="text" name="email" class="form-control" id="email" placeholder="email">
      <small id="helpemail" class="text-danger"></small>
    </div>
    <small id="p" class="text-danger"></small>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Tel</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="tel" placeholder="telephone">
      <small id="helptel" class="text-danger"></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Adresse</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="adr" placeholder="adresse">
      <small id="helpadr" class="text-danger"></small>
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Date Naissance</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" id="naiss" placeholder="date de naissance">
      <small id="helpnaiss" class="text-danger"></small>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Type Bourse</label>
    <div class="col-sm-5">
  <select class="custom-select my-1 mr-sm-2" id="tbourse">
    <option value="1">Bourse entière</option>
    <option value="2">Demi bourse</option>
  </select>
  <small id="helptbourse" class="text-danger"></small>
  </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Logement</label>
    <div class="col-sm-5">
  <select class="custom-select my-1 mr-sm-2" id="tlogmt">
    <option value="1">Logé</option>
    <option value="2">Non logé</option>
  </select>
  <small id="helptlogmt" class="text-danger"></small>
  </div>
  </div>

  <div class="form-group row">
  <div class="col-sm-5 submit">
  <button class=" btn btn-primary "type="submit">Enregister</button>
  </div>
  </div>
</form>
</div>
<script type="text/javascript" language="Javascript"  src="jquery-3.5.1.js"></script>
      <script type="text/javascript" src="scriptetudiant.js"></script>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>