<div class="container ">

    <h1 class="text-center">Ask A Question</h1>
    <form class="row g-3" method="post" action="server/request.php">
  <div class="col-6 offset-sm-3 mt-1">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question Title">
  </div>
  <div class="col-6  offset-sm-3 mt-1 ">
    <label for="description" class="form-label">Description</label>
    <textarea name="email" class="form-control" id="description" placeholder="Enter your Question"></textarea>
  </div>

  <div class="offset-sm-3  ">
    <button type="submit" name="Ask" class="btn btn-primary mx-auto">Ask</button>
  </div>
  </div>

</form>
</div>